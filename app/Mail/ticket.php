<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ticket extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $qr_code_data;
    public function __construct($user)
    {
        $last = explode(' ',$user['name']);
        $user['last_name'] = last($last);
        $user['first_name'] = explode(' ',$user['name'])[0];
        $this->user = $user;
    }

    public function build()
    {
        return $this->subject('Attendance Invitation')
        ->attachData(QrCode::size(300)->format('png')->encoding('UTF-8')->generate('
                Name :'.$this->user['name'].'
                Mobile :'.$this->user['mobile'].'
                Email :'.$this->user['email'].'
                '), 'Ticket.png',[])
->view('emails.ticket');
    }
}
