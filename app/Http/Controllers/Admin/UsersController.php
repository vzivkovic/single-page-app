<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{

    public function show()
    {
        $user = User::first();
        if (! $user) {
            return redirect()->route('home');
        }

        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $this->validate(request(), [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'max:20'
        ]);

        $input = $this->chackPass($request->all(), $user);

        $user->update($input);

        return redirect()->route('users.show');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->home();
    }

    /**
     * @param $input
     * @param $user
     * @return mixed
     */
    public function chackPass($input, $user)
    {
        if ($input['password'] == null)
        {
            $input['password'] = $user->password;
        }else{
            $input['password'] = bcrypt($input['password']);
        }
        return $input;
    }
}
