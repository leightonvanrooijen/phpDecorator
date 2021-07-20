<?php
require_once 'NotificationInterface.php';
require_once 'Notification.php';

class NotificationDecorator implements NotificationInterface
{
    private NotificationInterface $notification;

    public function __construct(NotificationInterface $notification)
    {
        $this->notification = $notification;
    }

    public function notify(string $msg): string
    {
        return $this->notification->notify($msg);
    }
}
