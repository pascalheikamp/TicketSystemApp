<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class User extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'user_id';
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
