<?php namespace App\Libraries\Models;
/**
 * Created By: Sugeng
 * Date: 23/04/20
 * Time: 12.34
 */
class Province extends \Illuminate\Database\Eloquent\Model
{
    protected $table = "propinsi";

    public function search($term)
    {
        return $this->where(
            'name', 'LIKE', \DB::raw("'%$term%'")
        )->get(
            [\DB::raw("CONCAT('(', id, ') ', name) as text"), "id"]
        );
    }
}
