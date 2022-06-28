<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torcedor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'idcidade',
        'idtime'
    ];
}
