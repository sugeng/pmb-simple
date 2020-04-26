<?php namespace App\Libraries\Registration;

use App\Libraries\Events\Registered;
use App\Libraries\Models\Registrant;
use App\Libraries\Models\RegistrationNumber;
use App\Libraries\Models\SpcNumber;

/**
 * Created By: Sugeng
 * Date: 23/04/20
 * Time: 12.57
 */
class Registration
{
    /**
     * @var Registrant
     */
    private $registrant;
    /**
     * @var array
     */
    private $registration_data;

    public function __construct(Registrant $registrant, array $registration_data)
    {
        $this->registrant        = $registrant;
        $this->registration_data = $registration_data;

        $this->registration_data['faculty_code']        = substr($this->registration_data['departement_code'], 0, 1);
        $this->registration_data['registration_number'] = $this->getRegistrationNumber();
        $this->registration_data['spc_number']          = $this->getSpcNumber();
    }

    public function store()
    {
        $this->storeRegistrant();

        $this->uploadRaports();

        $this->uploadAvatar();

        event(new Registered($this->registration_data['registration_number']));

        return $this->registrant->with('departement')
                                ->where('noreg', $this->registration_data['registration_number'])
                                ->first();
    }

    private function getRegistrationNumber()
    {
        return RegistrationNumber::registrationNumber(
            $this->registration_data['registration_period'],
            $this->registration_data['faculty_code']
        );
    }

    private function getSpcNumber()
    {
        return SpcNumber::spcNumber(
            $this->registration_data['registration_period'],
            $this->registration_data['faculty_code']
        );
    }

    private function uploadRaports(): void
    {
        foreach ($this->registration_data['raport'] as $class => $items) {
            foreach ($items as $semester => $item) {
                (new UploadRaport(
                    $this->registration_data['registration_number']))->upload($item, "raport_{$class}_{$semester}"
                );
            }
        }
    }

    private function uploadAvatar()
    {

    }

    private function storeRegistrant()
    {
        $this->registrant->create([
            "noreg" => $this->registration_data['registration_number'],
            "thusm" => $this->registration_data['registration_period'],
            "nmmhs" => strtoupper($this->registration_data['name']),
            "tplhr" => strtoupper($this->registration_data['birth_place']),
            "tglhr" => $this->registration_data['birthday'],
            "email" => strtolower($this->registration_data['email']),
            "hpper" => $this->registration_data['mobile_phone'],
            "kdkel" => $this->registration_data['gender'],
            "nospc" => $this->registration_data['spc_number'],
            "kdju1" => $this->registration_data['departement_code'],
            "nisnn" => $this->registration_data['nisn'],
            "kdsma" => $this->registration_data['school_name'],
            "prsma" => $this->registration_data['school_province'],
            "kbsma" => $this->registration_data['school_regency'],
            "stpid" => $this->registration_data['registration_status'],
            "tgtes" => $this->registration_data['exam_cbt'],
            "useid" => "ONLINE",
            "tgent" => \DB::raw("NOW()")
        ]);
    }
}
