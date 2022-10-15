<?php
namespace Longman\TelegramBot\Commands\SystemCommands;

use Longman\TelegramBot\Commands\SystemCommand;
use Longman\TelegramBot\Request;
use Longman\TelegramBot\Entities\ServerResponse;
use App;
use Log;

class StartCommand extends SystemCommand {
	protected $name = 'start';
	protected $usage = '/start';

	public function execute() : ServerResponse
	{
		$message = $this->getMessage();

		$chat_id = $message->getChat()->getId();
		$text	= 'Hi! Welcome to my bot!';

		$data = [
				'chat_id' => $chat_id,
				'text'	=> $text,
		];

		return Request::sendMessage($data);
	}
}
