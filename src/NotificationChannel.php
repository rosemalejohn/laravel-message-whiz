<?php

namespace Rosemalejohn\MessageWhiz;

use App\Facades\MessageWhiz;
use Illuminate\Notifications\Notification;

class MessageWhizChannel
{
    /**
     * Send the given notification.
     *
     * @param  mixed  $notifiable
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
        $message = $notification->toSms($notifiable);

        if (is_null($message)) {
            return;
        }

        $message = array_merge([
            'sender' => config('app.name'),
            $message
        ]);

        MessageWhiz::broadcast()->sendTinySingleMessageBroadcast($message);
    }
}
