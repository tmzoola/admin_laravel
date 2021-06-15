<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssignmentUpload extends Model
{
    protected $fillable = ['title', 'content','video_id'];
}
