<?php namespace App\Http\Controllers;

use App\Client;
use App\Expense;
use App\Http\Requests;
use App\Http\Requests\ClientRequest;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use Request;

use Ddeboer\Imap\Server;
use Ddeboer\Imap\SearchExpression;
use Ddeboer\Imap\Search\Flag\Unseen;

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
				var_dump(str_replace(' ', '', $message->getBodyText()));
			

			}
				
		die();
		
	}

}




