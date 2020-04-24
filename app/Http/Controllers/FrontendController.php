<?php namespace App\Http\Controllers;
use App\Libraries\Models\Exam;
use App\Libraries\Models\RegistrationPeriod;

/**
 * Created By: Sugeng
 * Date: 24/04/20
 * Time: 11.11
 */
class FrontendController extends Controller
{
    public function index(RegistrationPeriod $period, Exam $exam)
    {
        $registration_period = $period::periodActive();
        $exams = $exam->where("thusm", $registration_period->thusm)->orderBy('kdgel')->get();

        return view("frontend.layouts.app")->with(
          [
              "registration_period" => $registration_period,
              "exams" => $exams
          ]
        );
    }
}
