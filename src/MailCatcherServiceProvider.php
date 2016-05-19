<?php namespace Sukohi\MailCatcher;

use Illuminate\Mail\MailServiceProvider;

class MailCatcherServiceProvider extends MailServiceProvider {

	// Override

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		if(config()->has('mail.mail_catcher')) {

			$this->app->singleton('mailer', function ($app) {

				$this->registerSwiftMailer();
				$mail_catcher = new \Sukohi\MailCatcher\Mailer(
					$app['view'], $app['swift.mailer'], $app['events']
				);
				return $mail_catcher;

			});

		} else {

			parent::register();

		}
	}

}