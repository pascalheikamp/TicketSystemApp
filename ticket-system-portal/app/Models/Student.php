<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use function Webmozart\Assert\Tests\StaticAnalysis\length;

class Student extends Model
{
    use HasFactory, SoftDeletes, HasUuids;
    protected $table = 'students';
    protected $primaryKey = 'student_id';
    public $incrementing = true;
    public $timestamps = true;

    public function tickets() {
        return $this->hasMany(Ticket::class);
    }
    public function user() {
        return $this->hasOne(User::class);
    }
}


