<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{

    protected $table = 'users';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'firstname',
        'lastname',
        'student_number',
        'role',
        'date_of_birth',
        'name',
        'address',
        'email',
        'password',
        'login_limit',
        'klas',
        'login_time'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed'
    ];

    public function tickets() {
        return $this->hasMany(Ticket::class);
    }

}
