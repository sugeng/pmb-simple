<?php namespace App\Http\Controllers;

use App\Libraries\Models\Registrant;
use Illuminate\Http\Request;

/**
 * Created By: Sugeng
 * Date: 09/05/20
 * Time: 09.32
 */
class GraduatedController extends Controller
{
    public function show(Request $request, Registrant $registrant)
    {
        $registrant_data = $registrant->where('noreg', $request->get('registration_number'))->first();

        if ($registrant_data->sttes == '' or empty($registrant_data->sttes)) {
            return view('graduate.partials.not_set')->with(['registrant' => $registrant_data]);
        }

        if ($registrant_data->sttes == '' or empty($registrant_data->sttes)) {
            return view('graduate.partials.not_set')->with(['registrant' => $registrant_data]);
        }

        return view('graduate.partials.graduate_in')->with(['registrant' => $registrant_data]);
    }

    public function check(Request $request, Registrant $registrant)
    {
        $registrant_data = $registrant->where('noreg', $request->get('registration_number'))->first();


        if (is_null($registrant_data))
            return response()->json([
                'result' => 'error',
                'title'  => 'Tidak Ditemukan',
                'message' => "Nomor registrasi {$request->get('registration_number')} tidak ditemukan."
            ]);

        if ($registrant_data->tgtes->year < 0)
            return response()->json([
                'result' => 'error',
                'title'  => 'Tanggal Ujian Tidak Valid',
                'message' => 'Tanggal Ujian Anda tidak valid'
            ]);

        if ($registrant_data->tgtes->format('Y-m-d') >= date('Y-m-d'))
            return response()->json([
                'result' => 'error',
                'title'  => 'Belum Melakukan Ujian',
                'message' => 'Anda belum melakukan Ujian Saringan Masuk'
            ]);

        if ($registrant_data->sttes == '')
            return response()->json([
                'result' => 'error',
                'title'  => 'Pendataan Kelulusan Belum Dilakukan',
                'message' => 'Maaf, status kelulusan belum didatakan. Silakan coba lagi beberapa waktu lagi.'
            ]);
    }
}
