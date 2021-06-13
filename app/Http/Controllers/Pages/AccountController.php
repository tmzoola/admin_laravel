<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\CourseName;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function kids_main(){
        return view('pages.profile');
    }

    public function course_content(){
        return view('pages.courses.course_content');
    }

    public function courses(){
        return view('pages.index');
    }

    public function public_courses(){
        $data = CourseName::all();
        return view('pages.courses.public_courses',compact('data'));
    }

}
