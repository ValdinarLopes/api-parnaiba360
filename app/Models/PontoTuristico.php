<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PontoTuristico extends Model
{
    /** @use HasFactory<\Database\Factories\PontoTuristicoFactory> */
    use HasFactory;

    protected $fillable = ['nome', 'descricao', 'latitude', 'longitude', 'imagem'];
}
