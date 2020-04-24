<?php namespace App\Libraries\Models;
/**
 * Created By: Sugeng
 * Date: 23/04/20
 * Time: 12.37
 */
class Regency extends \Illuminate\Database\Eloquent\Model
{
    protected $table = "kabupaten";

    public function search($term, $addon)
    {
        return $this->where(
            'name', 'LIKE', \DB::raw("'%$term%'")
        )->where('propinsi_id', $addon)
                    ->get(
                        [\DB::raw("CONCAT('(', id, ') ', name) as text"), "id"]
                    );
    }
}
