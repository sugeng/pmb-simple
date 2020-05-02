<?php namespace App\Http\Controllers;
use App\Libraries\Models\Departement;
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

        $exams = $this->examDates($registration_period, $exam);

        return view("frontend.layouts.app")->with(
          [
              "registration_period" => $registration_period,
              "exams" => $exams
          ]
        );
    }

    protected function examDates($registration_period, Exam $exam)
    {
        $sekarang = date("Y-m-d");

        $departemens = (new Departement)->whereNotIn('kdjur', ['16'])->orderBy('kdjur')->get();

        $exam_by_departement = [];
        foreach ($departemens as $departemen) {
            $exam_dates = $exam->where("thusm", $registration_period->thusm)
                              ->where('tgawl', ">=", $sekarang)
                              ->whereRaw("INSTR(kdjur, '{$departemen->kdjur}') > 0")
                              ->orderBy('kdgel')
                              ->get();

            if ($exam_dates) {
                foreach ($exam_dates as $exam_date) {
                    $exam_by_departement[$departemen->nmjur][] = $exam_date;
                }
            }
        }

        return $exam_by_departement;
    }
}
