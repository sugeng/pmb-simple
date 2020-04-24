<?php namespace App\Http\Controllers\Api;
use App\Libraries\Models\Province;
use Illuminate\Http\Request;

/**
 * Created By: Sugeng
 * Date: 23/04/20
 * Time: 12.33
 */
class ProvinceController extends \App\Http\Controllers\Controller
{
    public function search(Request $request, Province $province)
    {
        return response()->json(
            [
                "results" => $province->search($request->get('term'))
            ]
        );
    }
}
