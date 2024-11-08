<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    protected $casts = [
        'date' => 'date',
    ];

    public function treatment() {
        return $this->belongsTo(Treatment::class);
    }
}
