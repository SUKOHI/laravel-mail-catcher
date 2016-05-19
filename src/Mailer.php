<?php namespace Sukohi\MailCatcher;

use Illuminate\Mail\Mailer as IlluminateMailer;

class Mailer extends IlluminateMailer {

	// Override

	/**
	 * Send a Swift Message instance.
	 *
	 * @param  \Swift_Message  $message
	 * @return void
	 */
	protected function sendSwiftMessage($message)
	{
		if(config()->has('mail.mail_catcher')) {

			$message->setTo(config('mail.mail_catcher'));

		}

		parent::sendSwiftMessage($message);
	}

}