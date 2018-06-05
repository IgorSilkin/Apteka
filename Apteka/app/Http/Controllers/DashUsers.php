<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class DashUsers extends Controller
{
    public function index()
    {
        $users = User::orderby('id', 'asc')->paginate(10);
        return view('admin-panel.pages.users.index')->withUsers($users);
    }

    public function create()
    {
        return view('admin-panel.pages.users.create');
    }

    public function store(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        if($request->is_admin == 'on'){
            $user->is_admin = true;
        }

        $user->save();

        $request->session()->flash('success', 'Пользователь успешно добавлен в базу данных!');


        return redirect()->route('users.show', $user->id);
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('admin-panel.pages.users.show')->withUser($user);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin-panel.pages.users.edit')->withUser($user);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        if($request->is_admin == 'on'){
            $user->is_admin = true;
        }
        else{
            $user->is_admin = false;
        }
        $user->save();

        $request->session()->flash('success', 'Информация о пользователе успешно отредактирована!');

        return redirect()->route('users.show', $user->id);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if ($user != null) {
            $user->delete();
            return redirect()->route('users.index');
        }
        return view('admin-panel.pages.index');
    }
}
