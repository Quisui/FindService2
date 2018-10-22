<?php

namespace FindService\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use FindService\Http\Requests;
use FindService\ModeloUsuario;
//use Illuminate\Support\Facade\Redirect;
use FindService\Http\Requests\UsuarioFormRequest;
use DB;

class PagesController extends Controller
{
    public function inicio(Request $request){
      if ($request) {
        $query=trim($request->get('searchText'));
        $categorias=DB::table('categoria')
        ->where('nombre','LIKE','%'.$query.'%')
        ->orderBy('idcategoria','asc')
        ->paginate(5);
        return view('inicio',["categorias"=>$categorias,"searchText"=>$query]);
      }
    }
    public function store(UsuarioFormRequest $request){
      $usuario=new ModeloUsuario;
      $usuario->nombre=$request->get('nombre');
      $usuario->Apellido=$request->get('apellido');
      $usuario->nickname=$request->get('nombre_usuario');
      $usuario->password=$request->get('contraseña');
      $usuario->correo=$request->get('correo');
      $usuario->celular=$request->get('numero_telefono');
      $usuario->fechaNacimiento=$request->get('fecha_nacimiento');
      $usuario->preferencias="0";
      $usuario->admin="0";
      $usuario->save();
      return redirect('/');
    }
    public function show($id){
      return view("show",["categoria"=>ModeloCategoria::findOrFail($id)]);
    }
    public function login(){
      return view('login');
    }
    public function singup(){
      return view('signup');
    }
    public function cat_comida(){
      return view('comida');
    }
    public function cat_salud(){
      return view('salud');
    }
}
