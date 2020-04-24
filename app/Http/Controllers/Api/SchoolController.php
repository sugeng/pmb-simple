<?php namespace App\Http\Controllers\Api;

use App\Libraries\Models\School;
use Illuminate\Http\Request;

/**
 * Created By: Sugeng
 * Date: 23/04/20
 * Time: 14.16
 */
class SchoolController extends \App\Http\Controllers\Controller
{
    public function search(Request $request, School $school)
    {
        return response()->json(
            [ "results" => $school->search(
                $request->get('term'), $request->get('province_id'), $request->get('regency_id')
            ) ]
        );
    }
}
