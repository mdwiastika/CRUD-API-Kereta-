<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function line()
    {
        return $this->belongsTo(Line::class, 'line_id', 'id');
    }
}
