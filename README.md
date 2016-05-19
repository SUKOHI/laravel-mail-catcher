# laravel-mail-catcher
A Laravel package to forcedly change sending email address when email testing.  
(This is for Laravel 4.2. [For Laravel 5](https://github.com/SUKOHI/laravel-mail-catcher))

# Installation

Execute composer command.

    composer require sukohi/mail-catcher:1.*

Replace the service provider in app.php

`'Illuminate\Mail\MailServiceProvider'` to `'Sukohi\MailCatcher\MailCatcherServiceProvider'`

Also alias

`'Mail' => 'Illuminate\Support\Facades\Mail'` to `'Mail' => 'Sukohi\MailCatcher\Facades\Mail'`

# Usage

You can use \Mail::send() as well as before.  
However if `app/config/mail.php` has `mail_catcher` value like the below, sending email address will change forcedly.

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
