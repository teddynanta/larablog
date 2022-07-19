<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
        return view('home', [
            'posts' => $user->posts->load('user', 'category'),
            'active' => 'authors',
            'title' => 'Post by : ' . $user->name
        ]);
    }

    public function index(){
        return view('authors', [
            'active' => 'authors',
            'title' => 'Authors',
            'contents' => User::all()
        ]);
    }
}
