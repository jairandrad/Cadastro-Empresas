<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Segmento extends Model
{
    use HasFactory;

    protected $fillable = ['tipo'];

    public function empresas()
    {
        return $this->belongsToMany(Empresa::class);
    }
}
