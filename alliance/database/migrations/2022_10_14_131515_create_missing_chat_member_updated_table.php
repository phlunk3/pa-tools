<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*
 *
 *
CREATE TABLE IF NOT EXISTS `chat_member_updated` (
  `id` BIGINT UNSIGNED AUTO_INCREMENT COMMENT 'Unique identifier for this entry',
  `chat_id` BIGINT NOT NULL COMMENT 'Chat the user belongs to',
  `user_id` BIGINT NOT NULL COMMENT 'Performer of the action, which resulted in the change',
  `date` TIMESTAMP NOT NULL COMMENT 'Date the change was done in Unix time',
  `old_chat_member` TEXT NOT NULL COMMENT 'Previous information about the chat member',
  `new_chat_member` TEXT NOT NULL COMMENT 'New information about the chat member',
  `invite_link` TEXT NULL COMMENT 'Chat invite link, which was used by the user to join the chat; for joining by invite link events only',
  `created_at` timestamp NULL DEFAULT NULL COMMENT 'Entry date creation',

  PRIMARY KEY (`id`),
  FOREIGN KEY (`chat_id`) REFERENCES `chat` (`id`),
  FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

 *
 */

class CreateMissingChatMemberUpdatedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_member_updated', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('chat_id');
	    $table->integer('user_id');
	    $table->timestamp('date');
	    $table->string('old_chat_member');
	    $table->string('new_chat_member');
	    $table->string('invite_link')->nullable();
	    $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::dropIfExists('chat_member_updated');
    }
}
