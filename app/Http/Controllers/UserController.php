<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // GET
    public function index()
    {
        return redirect()->route('users.index.card');
    }
    public function card(){
        return view('pages.User.index.card');
    }
    // public function settings(){
    //     return view('pages.User.index.settings');
    // }
    // public function orders(){
    //     return view('pages.User.index.orders');
    // }

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
        $user = User::create($userData);
        session(['user' => $user]);
        $routeName = request('redirect');
        if($routeName == null){
            $routeName = 'users.index';
        }
        return redirect()->route($routeName);
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
