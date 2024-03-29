<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Notifications\PengajuanSampahNotification;

class PengajuanSampahNotification extends Notification
{
    use Queueable;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        $user = $notifiable; // Assuming the notifiable is the user object
    
        return [
            'message' => $this->nama . ' Mengajukan pengambilan sampah',
        ];
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
