<?php namespace App\Libraries\Models;
/**
 * Created By: Sugeng
 * Date: 23/04/20
 * Time: 13.45
 */
class School extends \Illuminate\Database\Eloquent\Model
{
    protected $table = "sekolah";

    public function search($term, $propinsi_id=null, $kabupaten_id=null)
    {
        return $this->where('kode_propinsi', $propinsi_id)
                    ->where('kode_kabupaten', $kabupaten_id)
                    ->where( function ($query) use ($term)
                    {
                        $query->where('nama_sekolah', 'LIKE', \DB::raw("'%$term%'"))
                              ->orWhere('npsn', 'LIKE', \DB::raw("'%$term%'"));
                    })
                    ->select(\DB::raw('npsn as id'), \DB::raw('nama_sekolah as text'), 'alamat')
                    ->get();
    }
}
