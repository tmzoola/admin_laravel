<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function kids_main(){
        return view('pages.profile');
    }
}
