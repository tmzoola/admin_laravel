<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseMember extends Model
{
    protected $fillable = ['name','course_id','email','user_id'];
}
