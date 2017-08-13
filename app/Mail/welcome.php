<?php

namespace App\Mail;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Symfony\Component\CssSelector\Parser\Reader;

class welcome extends Mailable
{
    use Queueable, SerializesModels;

    public $new_request;//except user for public not user :protected $user;
//    public int $x = 10;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->new_request= $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('Mail');
    }
}
