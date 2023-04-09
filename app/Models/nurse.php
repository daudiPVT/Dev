<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nurse extends Model
{
    use HasFactory;
    protected $table='nurses';
    protected $fillable=[
        'id',
        'name',
        'duty',
        'status',
    ];
}
