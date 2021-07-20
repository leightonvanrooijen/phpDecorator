<?php
require_once 'NotificationInterface.php';

class Notification implements NotificationInterface
{

    public function notify(string $msg): string
    {
        return $msg;
    }
}
