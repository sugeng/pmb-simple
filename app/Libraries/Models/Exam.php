<?php namespace App\Libraries\Models;
/**
 * Created By: Sugeng
 * Date: 24/04/20
 * Time: 11.12
 */
class Exam extends \Illuminate\Database\Eloquent\Model
{
    protected $table = "tbuji";

    protected $dates = [
        "tgtes"
    ];

    public function search($registrasion_period, $departement_code)
    {
        $today_date = date("Y-m-d");
        $exams = $this->where("tgtes", ">=", $today_date)
                      ->where('thusm', $registrasion_period)
                      ->whereRaw("INSTR(kdjur, {$departement_code}) > 0")
                      ->orderBy("tgtes")
                      ->get();

        $result = [];
        if ($exams) {
            foreach ($exams as $exam) {
                $result[] = [
                    "id" => $exam->tgtes->format('Y-m-d'),
                    "text" => "Gelombang {$exam->kdgel} Tanggal {$exam->tgtes->format('d F Y')}"
                ];
            }
        }

        return $result;
    }
}
