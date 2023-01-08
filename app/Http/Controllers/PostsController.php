<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index() {
        return view('index', [
            'posts' => Post::all()
        ]);
    }
    public function user() {
        return view('show', [
            'user' => User::all()
        ]);
    }
}
