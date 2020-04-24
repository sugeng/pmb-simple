<?php namespace App\Libraries\Models;
/**
 * Created By: Sugeng
 * Date: 24/04/20
 * Time: 11.11
 */
class RegistrationPeriod extends \Illuminate\Database\Eloquent\Model
{
    protected $table = "tbusm";

    public static function periodActive()
    {
        return static::where('aktif', "1")->first();
    }
}
