<?php

namespace FindService;

use Illuminate\Database\Eloquent\Model;

class ModeloCategoria extends Model
{
    protected $table='categoria';
    protected $primaryKey='idcategoria';
    public $timestamps=false;

    protected $fillable=[
      'nombre'
    ];

    protected $guarded=[
      
    ];
}
