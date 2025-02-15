<?php

namespace App\Models;
use App\Models\Logs;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Model implements JWTSubject {
    
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'profile_img',
        'role_id',
        'municipality_id',
        'province_id', 
        'email',
        'password',
        'position',
        'designation',
        'cellphone_num'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function notifications() {
        return $this->hasMany('App\Models\Notification');
    }

    public function newNotification() {
        $notification = new Notification;
        $notification->user()->associate($this);
        return $notification;
    }

    public function getJWTIdentifier() {
        return $this->getKey();
    }

    public function getJWTCustomClaims() {
        return [];
    }
}
