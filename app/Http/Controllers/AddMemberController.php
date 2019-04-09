<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AddMemberController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            'FName' => ['required', 'string'],
            'LName' => ['required', 'string'],
            'Phone' => ['required', 'string', 'min:11', 'max:11'],
            'TelHome' => ['required', 'string', 'min:11', 'max:11'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'FName' => $request['FName'],
            'LName' => $request['LName'],
            'Sex' => $request['Sex'],
            'TelHome' => $request['TelHome'],
            'Phone' => $request['Phone'],
            'NameCompany' => $request['NameCompany'],
            'State' => $request['State'],
            'City' => $request['City'],
            'PostalAdderss' => $request['PostalAdderss'],
            'UserName' => $request['UserName'],
            'PostalCode' => $request['PostalCode'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),


        ]);
        return redirect()->back();

    }
}
