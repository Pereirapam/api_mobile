<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index() {
        // return User::all();
        $users = [
            '1',
            'Anthony',
            'anthony@hcodde.com.br',
            '12345678'
        ];
    }
}
