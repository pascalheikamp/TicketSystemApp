<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progression extends Model
{
    use HasFactory;
    public $incrementing = true;
    public $timestamps = true;

    public function tickets() {
        return $this->hasMany(Ticket::class);
    }
}
