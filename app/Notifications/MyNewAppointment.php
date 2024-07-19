<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MyNewAppointment extends Notification
{
    use Queueable;
    public $data;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('You have sent a '.$this->data['title'].' '.$this->data['type'].' call appointment')
                    ->action('Goto Appointment', url('/schedule-appointments'))
                    ->line('Thank you!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'sender_id' => $this->data['sender_id'],
            'name' => $this->data['name'],
            'message' => $this->data['title'].' '.$this->data['type'].' call appointment',
            'sender' => $this->data['title'].' appointment',
            'type' =>  'new-appointment',
            'ispopped' =>  0,
            'link' => 'view-appointment/'.$this->data['appointment_id']
        ];
    }
}
