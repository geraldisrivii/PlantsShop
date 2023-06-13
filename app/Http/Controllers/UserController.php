<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('pages.User.create');
    }
    public function store(StoreRequest $request)
    {
        $requestData = $request->validated();
        $userData = [
            'login' => $requestData['login'],
            'password' => $requestData['password'],
            'role_id' => '1',
        ];
        User::create($userData);
        session(['user' => $userData]);
        return redirect()->route('users.index');
    }
    public function loginView()
    {
        return view('pages.User.login');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
