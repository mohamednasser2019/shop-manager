<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class welcomeMail extends Mailable
{
    use Queueable, SerializesModels;

public $data;
   
    public function __construct($userName)
    {
       $this->data=$userName;

    }

    
    public function build()
    {
        return $this->markdown('Mail.Messages.welcomeMail')->with('userName',$this->data);
    }
}
