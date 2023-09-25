<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';
    protected $primaryKey = 'ticket_id';
    public $incrementing = true;
    public $timestamps = true;

    public function user() {
        return $this->belongsTo(User::class);

    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
