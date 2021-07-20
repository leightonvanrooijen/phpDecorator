<?php

interface NotificationInterface
{
    public function notify(string $msg): string;
}
