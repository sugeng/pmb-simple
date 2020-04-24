<?php
/**
 * Created By: Sugeng
 * Date: 24/04/20
 * Time: 11.48
 **/


 /**
 * @param $tanggal
 * @return string
 */
function monthName($tanggal)
{
    $bulan = [
        '01' => "Januari",
        '02' => "Februari",
        '03' => "Maret",
        '04' => "April",
        '05' => "Mei",
        '06' => "Juni",
        '07' => "Juli",
        '08' => "Agustus",
        '09' => "September",
        '10' => "Oktober",
        '11' => "November",
        '12' => "Desember"
    ];

    $t = explode('-', $tanggal);

    return $t[2] . ' ' . $bulan[$t[1]] . ' ' . $t[0];
}

function NamaTahunPMB($tahun) {
    $tahun1= $tahun+1;
    return "{$tahun}/{$tahun1}";
}

function jurusan($jurusan)
{
    $key = explode(',', $jurusan);
    $nmjur = '';
    $i=1;
    foreach ($key as $kdjur) {
        if ($i > 3) { $nmjur .= "<br />"; $i = 1; }
        $nmjur .= \App\Libraries\Models\Departement::where('kdjur', trim($kdjur))->first()->nmjur . ', ';
        $i++;
    }

    return $nmjur;
}
