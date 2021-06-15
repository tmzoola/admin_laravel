<?php

namespace App\Http\Controllers;

use App\CourseMember;
use App\Models\AssignmentUpload;
use App\Models\CourseName;
use App\Models\StudentAssignment;
use Illuminate\Http\Request;

class CourseMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = CourseName::all();

        return view('users.courses',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $course_id = (integer)$id;
        return view('pages.course_member.create',compact('course_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new CourseMember();
        $student = new StudentAssignment();



        $data->name = $request->name;
        $data->course_id = (integer)$request->id;
        $data->user_id = auth()->user()->id;
        $data->email = auth()->user()->email;

        if (auth()->user()->account_id == 2){
            $student->name = $request->name;
            $student->user_id = auth()->user()->id;
            $student->save();
        }

        $data->save();
        return url('/courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $members = CourseMember::where('course_id',(integer)$id)->get();
        $count = count($members);
        return view('users.show',compact('members', 'count'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $assignment = AssignmentUpload::where('video_id',(integer)$id)->first();
       return view('pages.assignment.task',compact('assignment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $id)
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
