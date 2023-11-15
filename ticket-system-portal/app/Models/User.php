<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use HasFactory;

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
