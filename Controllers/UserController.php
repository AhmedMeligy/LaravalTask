<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index(){
    $users = User::all();
    return view('users.index', ['users' => $users]);
    }
    public function create(){
        return view ('users.create');
    }
    public function store(Request $request){
        return "Store a newly created resource in storage.";
    }
    public function show(string $id){
        $user = User::findOrFail($id);
        return view('users.show', ['user' => $user]);
    }
    public function edit($id)
    {
    $user = User::findOrFail($id);
    return view('users.edit', compact('user'));
    }
    public function update(Request $request, string $id){
    }

    public function destroy(string $id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
