<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return view('Backend.Settings.index');
    }
    public function update(Request $req)
    {
        // update data setting from database
    }
}
