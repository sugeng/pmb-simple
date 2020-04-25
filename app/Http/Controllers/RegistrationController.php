<?php namespace App\Http\Controllers;

use App\Libraries\Models\Registrant;
use Illuminate\Http\Request;

/**
 * Created By: Sugeng
 * Date: 23/04/20
 * Time: 09.43
 */
class RegistrationController extends Controller
{
    public function index(Request $request)
    {
        return view("registration.index")->with(['data' => $request->all()]);
    }

    public function store(Request $request)
    {
//        $request->validate([
//            'nama'         => 'required',
//            'email'        => 'required|unique:msmhb',
//            'mobile_phone' => 'required',
//            'departement'  => 'required',
//            'nisn'         => 'required',
//            'school_name'  => 'required',
//        ]);

        (new \App\Libraries\Registration\Registration(
            new \App\Libraries\Models\Registrant(),
            $request->all()
        ))->store();

        return view("registration.confirmation_page");
    }

    public function registered(Request $request, Registrant $registrant)
    {
        $registrant = $registrant->where('email', $request->get('email'))->first();

        if ($registrant) {
            return response()->json([
                "result"  => "error",
                "message" => "Email Anda {$request->get("email")} sudah terdaftar atas nama {$registrant->nmmhs}"
            ]);
        }

        return response()->json([
            "result" => "success"
        ]);
    }
}
