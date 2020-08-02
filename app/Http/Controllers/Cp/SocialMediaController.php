<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function index()
    {
        return view('Backend.Social_Media.index');
    }
    public function create()
    {
        return view('Backend.Social_Media.create');
    }

    public function message()
    {
        return view('Backend.Message.index');
    }
}
