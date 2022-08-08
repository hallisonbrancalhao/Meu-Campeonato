<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nome', 'idCampeonato', 'GP', 'GS', 'pontos', 'created_at'];
}
