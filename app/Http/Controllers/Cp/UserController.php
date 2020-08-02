<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
      return view('Backend.User.index');
    }
    public function create()
    {
        return view('Backend.User.create');
    }
    public function edit()
    {
        return view('Backend.User.edit');
    }
}
