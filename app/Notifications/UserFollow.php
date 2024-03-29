<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserFollow extends Notification
{
    use Queueable;
    public $user;
   
    public function __construct($user)
    {
        $this->user =$user;
    }

    public function via( $notifiable)
    {
        return ['database'];
    }

   
    public function toArray( $notifiable)
    {
        return [
            'user_id' => $this->user['id'],
            'name' => $this->user['name'],
            'email' => $this->user['email'],
        ];
    }
}
