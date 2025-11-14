<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    // libera o salvamento automático desses campos
    protected $fillable = [
        'marca',
        'modelo',
        'cor',
        'ano',
        'quilometragem',
        'valor',
        'descricao',
        'foto1',
        'foto2',
        'foto3',
        'foto4',
        'foto5',
    ];
}