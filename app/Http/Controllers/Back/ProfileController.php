<?php

namespace App\Http\Controllers\Back;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{

    public function editProfile()
    {
        $user = auth()->user();

        return view('cms.profile.edit', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        flash('Profile updated.', 'success');

        return redirect()->action('Back\ProfileController@editProfile');
    }

    public function editPassword()
    {
        return view('cms.password.edit');
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|confirmed'
        ]);

        $user = User::find(auth()->id());

        if(!password_verify($request->old_password, $user->password)) {
            return redirect()->back()->withErrors('Old password is incorrect.');
        }

        $user->password = bcrypt($request->password);
        $user->save();

        flash('Password updated.', 'success');

        return redirect()->action('Back\ProfileController@editPassword');
    }

}
