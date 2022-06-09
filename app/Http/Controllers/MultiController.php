<?php

namespace App\Http\Controllers;
use App\Post;
use App\CustemerModel;

use Illuminate\Http\Request;

class MultiController extends Controller
{
    function index() {
        $users = CustemerModel::get();
        $posts = Post::get();
        return view('index', compact('users','posts'));
    }
}
