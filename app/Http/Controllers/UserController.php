<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function index()
    {
        $users = User::paginate(10);

        return view('admin.users.view', compact('users'));
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            if (auth()->user()->avatar) {
                Storage::delete('/public/images/'.auth()->user()->avatar);
            }
            $request->image->storeAs('images', $filename, 'public');
            auth()->user()->update(['avatar' => $filename]);

            return redirect()->route('home')->with('success', 'Image uploaded...');
        }
        
        return redirect()->route('home')->with('error', 'Image not uploaded!');
    }

    public function getAssignRole($user_id)
    {
        $user = User::whereId($user_id)->first();

        return view('admin.users.assign', compact('user'));
    }

    public function getRemoveRole($user_id)
    {
        $user = User::whereId($user_id)->first();

        return view('admin.users.remove', compact('user'));
    }

    public function assignRole(Request $request, $user_id)
    {
        $this->validate($request, [
            'role' => 'required',
        ]);

        $user = User::whereId($user_id)->first();

        $role_name = $request->input('role');

        $role = Role::whereName($role_name)->first();

        if (!$user->hasRole($role_name)) {

            $user->assignRole($role);

        } else {

            return redirect()->back()->with('error', "Sorry, this role is already assigned to the user!");

        }
        return redirect('users')->with('success', 'The role has been successfully assigned...');
    }

    public function removeRole(Request $request, $user_id)
    {
        $this->validate($request, [
            'role' => 'required',
        ]);

        $user = User::whereId($user_id)->first();

        $role_name = $request->input('role');

        $role = Role::whereName($role_name)->first();

        if ($user->hasRole($role_name)) {

            $user->removeRole($role);

        } else {

            return redirect()->back()->with('error', "Sorry, this user does not have that role assigned to them!");

        }
        
        return redirect('users')->with('success', 'The role has been successfully removed...');
    }

    public function searchUser(Request $request)
    {
        $this->validate($request, [
            'search' => 'required|min:1',
        ],
        [
            'search.required' => 'You need to search a user.',
        ]);

        $query = $request->input('search');

        $users = User::where('name', 'LIKE', '%' . $query . '%')
            ->orwhere('email', 'LIKE', '%' . $query . '%')
            ->paginate(10);

        return view('admin.users.view', compact('users'));
    }
}
