<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function Profile(User $user)
    {

        return view('/Profile/Profile', compact('user'));

    }

    public function ChangePassword()
    {

        return view('/Profile/ChangePassword');
    }

    public function UpdateProfile(User $user, Request $request)
    {
        $user->update([
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
        ]);
        session()->flash('alert', 'اطلاعات شما با موفقیت بروزرسانی شد');
        return redirect()->back();
    }
}
