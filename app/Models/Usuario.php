<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //use HasFactory;
    protected $table="usuarios";
    protected $primaryKey="id";
    protected $fillable = [
        'username', 'nombre', 'documento', 'password', 'user_type'
    ];

    public $timestamps = false;
}