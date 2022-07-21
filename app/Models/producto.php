<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'idVendedor', 'nombre', 'Precio', 'stock', 'tag', 'descripcion','imagen'
    ];

    public $timestamps = false;
}
