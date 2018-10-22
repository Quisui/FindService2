<?php

namespace FindService\Http\Controllers;

use Illuminate\Http\Request;

class ControllerCategoria extends Controller
{
  public function __contruct(){

  }
  public function index(Request $request){
    if ($request) {
      $query=trim($request->get('searchText'));
      $categorias=DB::table('categoria')
      ->where('nombre','LIKE','%'.$query.'%')
      ->orderBy('idcategoria','desc')
      ->paginate(3);
      return view('inicio',["categorias"=>$categorias,"searchText"=>$query]);
    }
  }
  public function show($id){
    return view("show",["categoria"=>ModeloCategoria::findOrFail($id)]);
  }
}
