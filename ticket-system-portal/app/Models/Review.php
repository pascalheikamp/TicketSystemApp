<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'reviewed_by',
        'ticket_id',
        'solution'
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
