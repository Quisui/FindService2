<?php

namespace FindService;

use Illuminate\Database\Eloquent\Model;

class ModeloUsuario extends Model
{
    protected $table='usuario';
    protected $primaryKey="idusuario";
    public $timestamps=false;

    //atributos que van a cambiar en la tabla de la BD
    protected $filable =[
      'nombre',
      'apellido',
      'nickname',
      'password',
      'correo',
      'celular',
      'preferencias',
      'admin',
      'fechaNacimiento'
    ];

    //para campos que no queremos que cambien en la tabla de la BD
    protected $guarded=[

    ];

}
