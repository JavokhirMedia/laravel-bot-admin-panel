<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Send Email Notification
    |--------------------------------------------------------------------------
    |
    | This value is used to verify if a notification email should be sent,
    | if you set this value as true you should set a valid email.
    |
    */

    'send_email_notification' => env('CONTACT_FORM_SEND_EMAIL_NOTIFICATION', false),

    /*
    |--------------------------------------------------------------------------
    | Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of the person who will receive the notification.
    |
    */

    'name' => env('CONTACT_FORM_NAME', 'Contact Form'),

    /*
    |--------------------------------------------------------------------------
    | Email
    |--------------------------------------------------------------------------
    |
    | This value is the email of the person who will receive the notification.
    |
    */

    'email' => env('CONTACT_FORM_EMAIL', 'raxmonberganov@gmail.com')
];
