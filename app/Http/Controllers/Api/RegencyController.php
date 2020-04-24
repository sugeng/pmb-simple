<?php namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Libraries\Models\Regency;
use Illuminate\Http\Request;

/**
 * Created By: Sugeng
 * Date: 23/04/20
 * Time: 14.06
 */
class RegencyController extends Controller
{
    public function search(Request $request, Regency $regency)
    {
        return response()->json(
            [ "results" => $regency->search($request->get('term'), $request->get('province_id')) ]
        );
    }
}
