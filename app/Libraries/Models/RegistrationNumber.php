<?php namespace App\Libraries\Models;
/**
 * Created By: Sugeng
 * Date: 23/04/20
 * Time: 12.59
 */
class RegistrationNumber extends \Illuminate\Database\Eloquent\Model
{
    protected $table = "tbnva";

    public $timestamps = false;

    public static function registrationNumber($registration_year, $departement_kode)
    {
        $number = static::where('tahun', $registration_year)
                    ->where('kdfak', $departement_kode)
                    ->where('aktif', '0')
                    ->orderBy('noreg')
                    ->first(["noreg"]);

        return $number['noreg'];
    }
}
