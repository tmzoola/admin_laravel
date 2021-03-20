<?php

namespace App;

use App\Models\AccountRoles;
use App\Models\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','account_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    public function hasAnyRoles($roles){
        if ($this->roles()->whereIn('name',$roles )->first()){
            return true;
        }else{
            return false;
        }
    }

    public function hasRole($role){
        if ($this->roles()->where('name',$role)->first()){
            return true;
        }else{
            return false;
        }
    }

    public function account_roles(){
        return $this->belongsTo(AccountRoles::class);
    }

    public function hasAccountRole($role){
        if ($this->account_roles()->where('account_types',$role)->first()){
            return true;
        }else{
            return false;
        }
    }
}
