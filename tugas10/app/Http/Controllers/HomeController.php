<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $users = [
            ['name' => 'John Doe', 'age' => 30],
            ['name' => 'Jane Smith', 'age' => 25],
            ['name' => 'Alice Johnson', 'age' => 28]
        ];
        $pengguna = [];

        return view('home.index', compact('users', 'pengguna'));
    }
}
