<?php namespace App\Libraries\Listeners;

use App\Libraries\Events\Registered;
use App\Libraries\Models\Registrant;
use App\Libraries\Models\RegistrationNumber;
use App\Libraries\Models\SpcNumber;

/**
 * Created By: Sugeng
 * Date: 26/04/20
 * Time: 09.15
 */
class DeactiveRegistrationNumber
{
    public function __construct()
    {

    }

    public function handle(Registered $event)
    {
        $registrant = (new Registrant())->where('noreg', $event->registration_number)->first();

        $this->deactiveRegistrationNumber($registrant->noreg);
        $this->deactiveSpcNumber($registrant->nospc);
    }

    private function deactiveRegistrationNumber($registration_number)
    {
        (new RegistrationNumber())->where("noreg", $registration_number)->update([
            "aktif" => 1
        ]);
    }

    private function deactiveSpcNumber($spc_number)
    {
        (new SpcNumber())->where('nospc', $spc_number)->update([
            "aktif" => 1
        ]);
    }
}
