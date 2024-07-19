<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewAppointment extends Notification
{
    use Queueable;
    public $data, $user_role;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        if(auth()->user()->roles->pluck('name') == 'patient'){
            $this->user_role = 'counselor';
        }else{
            $this->user_role = 'patient';
        }
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
        // 
                    ->line('You have been invited for a new '.$this->data['type'].' call appointment with '.$this->data['name'].' Click on this link to join video call '.$this->data['link'])
                    ->action('Open Video Call Appointment', url("/therapy-session-appointment/". auth()->user()->id."/". $this->data['appointment_id']."/receiver/".$this->user_role."/".$this->data['link']))
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
            'message' => 'You have been invited to a new '.$this->data['type'].' call appointment with '.$this->data['name'],
            'sender' => $this->data['name'],
            'type' =>  'new-appointment',
            'ispopped' =>  0,
            'link' => "/therapy-session-appointment/". auth()->user()->id."/". $this->data['appointment_id']."/receiver/".$this->user_role."/".$this->data['link']
        ];
    }
}
