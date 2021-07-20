<?php
require_once 'Notification.php';
require_once 'TextNotification.php';

$notification = new Notification();
echo '<h1>' .  $notification->notify('This is a message!') . '</h1>';
$textNotification = new TextNotification($notification);
echo '<h1>' . $textNotification->notify('This is a decorated message!') . '</h1>';
