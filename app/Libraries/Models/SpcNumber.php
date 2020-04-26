<?php namespace App\Libraries\Models;
/**
 * Created By: Sugeng
 * Date: 23/04/20
 * Time: 13.05
 */
class SpcNumber extends \Illuminate\Database\Eloquent\Model
{
    protected $table = "tbspc";

    public $timestamps = false;

    public static function spcNumber($registration_year, $departement_code)
    {
        $result = static::where("tahun", $registration_year)
                     ->where("kdfak", $departement_code)
                     ->where("spcol", "Y")
                     ->where("aktif", "0")
                     ->orderBy("nospc")
                     ->first(['nospc']);

        return $result['nospc'];
    }
}
