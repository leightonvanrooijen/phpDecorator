<?php
require_once 'NotificationDecorator.php';

class TextNotification extends NotificationDecorator
{
    public function __construct(NotificationInterface $notification)
    {
        parent::__construct($notification);
    }

    public function notify(string $msg): string
    {
        // $calling original method
        $base =  parent::notify($msg);
        // Decorated adding functionality
        return 'Text: ' . $base;
    }
}
