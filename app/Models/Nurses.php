<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nurses extends Model
{

    use HasFactory;
    protected $table='nursess';
    protected $fillable=[
        'id',
        'name',
        'duty',
        'status',
    ];
}
