<?php namespace App\Http\Controllers;

use App\Libraries\Models\Departement;
use App\Libraries\Models\Registrant;
use App\Libraries\Models\RegistrationPeriod;
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
        if ($request->get('email') && $request->get('kdju1') && $request->get('stpid'))
            return view("registration.index")->with(['data' => $request->all()])->with($this->getInitData($request));

        return redirect('/');
    }

    public function check(Request $request)
    {
        $exist = Registrant::where('tgtes', $request->get("date"))->where('email', $request->get('email'))->first();

        if ($exist) {
            return response()->json([
                'result' => 'error',
                'message' => "Anda telah terdaftar pada Tanggal CBT Online tersebut."
            ]);
        }

        return response()->json([
            'result' => 'success',
        ]);
    }

    protected function getInitData(Request $request)
    {
        $departement         = Departement::where("kdjur", $request->get('kdju1'))->first();
        $registration_period = RegistrationPeriod::periodActive();
        $registrant          = Registrant::where('email', $request->get('email'))->first();
        $quizes              = \DB::table("pmb_answer_quiz")->where('active', "1")->where('question_id', '1')->get();

        return [
            'departement'         => $departement,
            'registration_period' => $registration_period,
            'registrant'          => $registrant,
            'quizes'              => $quizes
        ];
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

        $registrant = (new \App\Libraries\Registration\Registration(
            new \App\Libraries\Models\Registrant(),
            $request->all()
        ))->store();

        return view("registration.confirmation_page")->with(["registrant" => $registrant]);
    }

    public function registered(Request $request, Registrant $registrant)
    {
        if ($request->get('kdju1') == "")
            return response()->json([
                "result"  => "error",
                "title"   => "Program Studi Tidak diisi.",
                "message" => "Anda harus memilih salah satu program studi."
            ]);

        if ($request->get('stpid') == "")
            return response()->json([
                "result"  => "error",
                "title"   => "Status belum diisi.",
                "message" => "Anda harus memilih status masuk."
            ]);

        if ($request->get('email') == "")
            return response()->json([
                "result"  => "error",
                "title"   => "Email belum diisi.",
                "message" => "Anda harus mengisi email."
            ]);

//        $registrant = $registrant->where('email', $request->get('email'))->first();
//
//        if ($registrant) {
//
//
////            return response()->json([
////                "result"  => "error",
////                "title"   => "Email Anda sudah terdaftar",
////                "message" => "Email Anda {$request->get("email")} sudah terdaftar atas nama {$registrant->nmmhs}"
////            ]);
//        }

        return response()->json([
            "result" => "success"
        ]);
    }
}
