<?php namespace App\Libraries\Listeners;

use App\Libraries\Events\Registered;
use App\Libraries\Models\Registrant;
use App\Mail\NotificationForRegistration;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param Registered $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $registrant = (new Registrant())->with('departement')->where('noreg', $event->registration_number)->first();

        \Mail::to($registrant->email)->send(new NotificationForRegistration($registrant));
    }
}
