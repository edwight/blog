<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){

        $users = User::all();
        return view('usuarios.index', compact('users'));
    }
      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id){
        $user = User::find($id);
        return view('usuarios.show', compact('user'));
    }
    public function edit($id){

        $user = User::find($id);
        return view('usuarios.edit', compact('user'));
    }
}
