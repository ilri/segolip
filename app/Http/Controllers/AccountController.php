<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $user = User::whereId('id', Auth::user()->id);
        return view('account.view.index', compact('user'));
    }

    public function edit()
    {
        return view('account.edit.update');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');

        User::whereId($id)->update([
            'name' => $name,
            'email' => $email,
        ]);

        return redirect()->route('useraccount')->with('success', 'Account successfully updated...');
    }

    public function changePassword()
    {
        return view('account.password.update');
    }

    public function postChangePassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|string|min:6|confirmed',
        ]);

        if (Hash::check($request->input('current-password'), Auth::user()->password)) {
            User::whereId(Auth::User()->id)->update([
                'password' => Hash::make($request->input('password')),
            ]);

            return redirect()->route('useraccount')->with('success', 'Password successfully updated...');
        } else {
            return redirect()->back()->with('error', 'Current password incorrect!');
        }
    }
}
