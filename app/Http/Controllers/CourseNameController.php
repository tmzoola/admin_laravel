<?php

namespace App\Http\Controllers;

use App\CourseMember;
use App\Models\CourseName;
use App\Models\Document;
use Illuminate\Http\Request;

class CourseNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.course_name.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new CourseName();
        $data->name = $request->name;
        $data->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(isset(auth()->user()->id)){
            $member = CourseMember::where('user_id',auth()->user()->id)->first();
            if (isset($member)){
                $course_id = $member->course_id;
                $file = CourseName::select('name','id')->where('id',(integer)$id)->first();
                $data = Document::where('course_name_id', (integer)$id)->get();
                return view('pages.courses.course_in',compact('data','file','course_id'));
            }
            $file = CourseName::select('name','id')->where('id',(integer)$id)->first();
            $data = Document::where('course_name_id', (integer)$id)->get();
            return view('pages.courses.course_in',compact('data','file'));
        }

        $file = CourseName::select('name','id')->where('id',(integer)$id)->first();
        $data = Document::where('course_name_id', (integer)$id)->get();
        return view('pages.courses.course_in',compact('data','file'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
