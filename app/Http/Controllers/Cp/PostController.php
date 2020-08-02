<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('Backend.Post.index');
    }

    public function create()
    {
        return view('Backend.Post.create');
    }
}
