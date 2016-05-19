# laravel-mail-catcher
A Laravel package to forcedly change sending email address when email testing.  
(This is for Laravel 5+. [For Laravel 4.2](https://github.com/SUKOHI/laravel-mail-catcher/tree/1.0))

# Installation

Execute composer command.

    composer require sukohi/mail-catcher:2.*

Replace the service provider in app.php

`Illuminate\Mail\MailServiceProvider::class` to `Sukohi\MailCatcher\MailCatcherServiceProvider::class`

Also alias

`'Mail' => Illuminate\Support\Facades\Mail::class` to `'Mail' => Sukohi\MailCatcher\Facades\Mailer::class`

# Usage

You can use \Mail::send() as well as before.  
However if `config/mail.php` has `mail_catcher` value like the below, sending email address will change forcedly.

    return array(
    
        // Others
    
        'mail_catcher' => client@example.com
    
    );
    
or you can set multiple email addresses.
    
    return array(
    
        // Others
    
        'mail_catcher' => [
            'client@example.com',
            'client2@example.com',
        ]
    
    );
    
# License

This package is licensed under the MIT License.

Copyright 2016 Sukohi Kuhoh
