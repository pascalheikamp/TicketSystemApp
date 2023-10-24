<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'title',
        'category_id',
        'description',
        'priority',
        'user_id',
        'remove_date',
        'status'
    ];

    public function user() {
        return $this->belongsTo(User::class);

    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
