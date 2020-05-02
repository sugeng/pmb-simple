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
        "tgtes", "tgawl", "tgakh"
    ];

    public function search($registrasion_period, $departement_code)
    {
        $today_date = date("Y-m-d");

        $exams = $this->whereRaw("'{$today_date}' BETWEEN tgawl AND tgakh")
                      ->where('thusm', $registrasion_period)
                      ->whereRaw("INSTR(kdjur, {$departement_code}) > 0")
                      ->orderBy("tgtes")
                      ->get();

        $result = [];
        if ($exams) {
            foreach ($exams as $exam) {
                $waktu = waktuUjian($exam->jmtes);

                $result[] = [
                    "id" => $exam->tgtes->format('Y-m-d'),
                    "text" => "Gelombang {$exam->kdgel} Tanggal {$exam->tgtes->format('d F Y')} WAKTU {$waktu}"
                ];
            }
        }

        return $result;
    }
}
