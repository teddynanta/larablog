<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
        return view('author', [
            'title' => $user->name,
            'posts' => $user->posts,
            'name' => $user->name
        ]);
    }
}
