<?php namespace App\Http\Controllers\Api;
use App\Libraries\Models\Exam;
use Illuminate\Http\Request;

/**
 * Created By: Sugeng
 * Date: 26/04/20
 * Time: 20.02
 */
class ExamController extends \App\Http\Controllers\Controller
{
    public function search(Request $request, Exam $exam)
    {
        return response()->json(
            [
                "results" => $exam->search(
                    $request->get('registration_period'),
                    $request->get('departement_code')
                )
            ]
        );
    }
}
