<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producte extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'productes';
    protected $fillable = ['id', 'nom', 'descripcio', 'preu', 'estoc', 'imagen'];
}
