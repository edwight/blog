<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Note;
class UserController extends Controller
{
    public function index(){

        Note::create([
            'title' => 'Titulo de la nota',
            'content' => 'Contenido de la nueva nota'
        ]);
        
    }
}
