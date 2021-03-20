<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class AccountRoles extends Model
{
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
