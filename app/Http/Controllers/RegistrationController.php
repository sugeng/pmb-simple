<?php namespace App\Http\Controllers;
use App\Http\Requests\Registration;

/**
 * Created By: Sugeng
 * Date: 23/04/20
 * Time: 09.43
 */
class RegistrationController extends Controller
{
    public function index()
    {

    }

    public function store(Registration $registration)
    {
        $validated = $registration->validated();
    }
}
