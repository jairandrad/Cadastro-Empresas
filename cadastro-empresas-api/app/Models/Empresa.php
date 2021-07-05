<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model

{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'empresas';
    protected $dates = ['deletd_at'];

    protected $fillable = [
        'cnpj',
        'razao_social',
        'nome_fantasia',
        'cep',
        'logradouro',
        'numero',
        'telefone',
        'email',
        'complemento',
        'bairro',
        'cidade',
        'estado',
        'segmento',
        'inscricao_municipal',
        'inscricao_estadual',
    ];

    public function segmentos()
    {
        return $this->belongsToMany(Segmento::class);
    }

    public function unidades()
    {
        return $this->belongsToMany(Unidade::class);
    }
}
