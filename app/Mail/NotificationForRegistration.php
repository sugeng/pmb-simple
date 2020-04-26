<?php namespace App\Mail;

use App\Libraries\Models\Registrant;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificationForRegistration extends Mailable
{
    use Queueable, SerializesModels;

    private $registrant;

    public function __construct($registrant)
    {
        $this->registrant = $registrant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('registration.email.confirmation')->with(['registrant' => $this->registrant]);
    }
}
