<?php

namespace App\Http\Controllers;

use App\CourseMember;
use App\Models\AssignmentUpload;
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
        $group_id = (integer)$id;
        if(isset(auth()->user()->id)){
            $member = CourseMember::where('user_id',auth()->user()->id)->get();
            $attends = CourseMember::where('user_id',auth()->user()->id)->where('course_id',(integer)$id)->first();
            if (isset($member)){
                foreach ($member as $mem){
                    $course_id[] =  $mem->course_id;
                }
                $file = CourseName::select('name','id')->where('id',(integer)$id)->first();
                $data = Document::where('course_name_id', (integer)$id)->get();
                return view('pages.courses.course_in',compact('data','file','course_id','member','group_id','attends'));
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
    public function edit(Request $request)
    {
        $task = new AssignmentUpload();
        $task->title = $request->title;
        $task->content = $request->content_new;
        $task->video_id = $request->video_id;
        $task->save();
        return view('dashboard');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function update($id)
    {
        $video_id = (integer)$id;
        $task = AssignmentUpload::where('video_id',$video_id)->first();
        if (isset($task)){
            return view('users.create_task', compact('video_id','task'));
        }
        return view('users.create_task', compact('video_id'));
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

    public function videos_admin($id){

        $videos = Document::where('course_name_id',(integer)$id)->get();

        return view('users.videos_list',compact('videos'));
    }
}
