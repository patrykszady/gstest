<?php namespace App\Http\Controllers;

use App\Client;
use App\Expense;
use App\Project;
use App\Http\Requests;
use App\Http\Requests\ClientRequest;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use Request;

use Ddeboer\Imap\Server;
use Ddeboer\Imap\SearchExpression;
use Ddeboer\Imap\Search\Flag\Unseen;
use Ddeboer\Imap\Message\Attachment;

class HdreceiptsController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{

		$server = new Server('outlook.office365.com');

		// $connection is instance of \Ddeboer\Imap\Connection
		$connection = $server->authenticate('patryk@gs.construction', 'Data1992');

		$mailbox = $connection->getMailbox('INBOX/Home Depot');

		$search = new SearchExpression();
		$search->addCondition(new Unseen());
			$messages = $mailbox->getMessages($search);
			
			foreach ($messages as $message)
			{
				$strip = str_replace(' ', '', strip_tags($message->getBodyHtml()));				
				$value = strpos($strip, 'TOTAL$');

				//Check if its a return or a purchase
				if ($value == false)
				{
					$thing = 'TOTAL-$';
					$num = 7;
				} else 
					{
						$thing = 'TOTAL$';
						$num = 6;
					}	
					//TOTAL $__
				$first = strpos($strip, $thing);
				$space = strpos($strip, 'X', $first) - $first - $num;
				// $value = substr($strip, $first+5, 1);
				//Check if its a return or a purchase
				if ($value == false)
				{
					$amount = '-' . substr($strip, $first+$num, $space);
				} else 
					{
						$amount = substr($strip, $first+$num, $space);
					}	


					//FIND PO/JOPBNAME...attach expense to project..if not porject is 0 and user is promped to select a project.
				
				$po = strpos($strip, 'JOBNAME:');
				if(is_bool($po))
					{
						$project = '0';
					} else
						{
							$spc = strpos($strip, 'PRO', $po) - $po - 14;
							$pro = substr($strip, $po+8, $spc);		
							$project_id = Project::where('id', $pro)->first();
						}
					//check if PROJECT NAME/ PO/JOBNAME from receipt exists in database, if not, project is 0
					


					if (is_null($project_id))
					{
						$project = '0';
						} else
							{
								$project = $project_id->id;
							}	


				Expense::insert(['amount_paid' => $amount, 'employee_id' => '5', 'paid_on' => date('Y-m-d'), 'Project_id' => $project, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'reimbursment' => 2, 'office' => 2]);


				$attachments = $message->getAttachments();

				foreach ($attachments as $attachment) {
					$file = $attachment->getDecodedContent();
					$name = time() . 'expense.pdf';
					// $file->move('docs/expenses', $name);
					file_put_contents(
					    'docs/expenses/' . $name,
					    $attachment->getDecodedContent()
					);
                   
					// $file = $request->file('file');
					
					$url = Expense::latest()->first();
					$url->receipt_url = $name;
					$url->save();
				}
				

					unset($project);
					unset($project_id);
		

				?>
				<br>
				<?php 


			}
				
	}

}

	