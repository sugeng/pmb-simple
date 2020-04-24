<?php namespace App\Libraries\Events;

use App\Libraries\Models\Registrant;
use Illuminate\Queue\SerializesModels;

class Registered
{
    use SerializesModels;

    public $registration_number;

    public function __construct($registration_number)
    {
        $this->registration_number = $registration_number;
    }
}
