<?php
namespace Longman\TelegramBot\Commands\SystemCommands;

use Longman\TelegramBot\Commands\SystemCommand;
use Longman\TelegramBot\Request;
use Longman\TelegramBot\Entities\ServerResponse;
use App\Setting;
use App;
use Config;
use App\Telegram\CommandTrait;

class AddscanschannelCommand extends SystemCommand {
		protected $name = 'addscanschannel';
		protected $usage = '/addscanschannel';

		public function execute() : ServerResponse
		{
				$admin = Config::get('phptelegrambot.admins')[0];

				$message = $this->getMessage();
				$chatId = $message->getChat()->getId();

				if(!$this->isAdmin()) return Request::sendMessage(['chat_id' => $chatId, 'text' => "This command can only be used by admins."]);

				Setting::where('name', 'tg_scans_channel')->update(['value' => $chatId]);

				$data = [
					'chat_id' => $chatId,
					'text'	=> "This channel has been set to receive scan requests.",
				];

				return Request::sendMessage($data);
		}

		private function isAdmin()
		{
				$admin = Config::get('phptelegrambot.admins')[0];
				$message = $this->getMessage();
				$chatId = $message->getChat()->getId();

				$userId  = $message->from['id'];

				if($admin == $userId) return true;

				return false;
		}
}
