<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class pagecontroller extends Controller
{
    public function laravel(){
        $notas = App\Nota::paginate(3);
        return view('welcome',compact('notas'));
    }

    public function detalle($id){

        // $nota = App\Nota::find($id);
    
        //Aquí valida si existe sino redirije al 404
        $nota = App\Nota::findOrFail($id);
    
        return view('notas/detalle', compact('nota'));
    }

    public function crear(Request $request){
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);
       
        // return $request->all();

        $notaNueva = new App\Nota;
        $notaNueva->nombre = $request->nombre;
        $notaNueva->descripcion = $request->descripcion;

        $notaNueva->save();

        return back()->with('mensaje', 'Nota agregada');
    }

    public function editar($id){
        $nota = App\Nota::findOrFail($id);
        return view('notas.editar', compact('nota'));
    }

    public function update(Request $request, $id){
        
        $notaActualizada = App\Nota::find($id);
        $notaActualizada->nombre = $request->nombre;
        $notaActualizada->descripcion = $request->descripcion;
        $notaActualizada->save();
        return back()->with('mensaje', 'Nota editada!');
    
    }

    public function eliminar($id){

        $notaEliminar = App\Nota::findOrFail($id);
        $notaEliminar->delete();
    
        return back()->with('mensaje', 'Nota Eliminada');
    }
    
    public function Principal(){
        return view('inicio');
    }
    public function Fotografias(){
        return view('fotos');
    }

    public function Nosotros($nombre = null){
        $equipo = ['Jairo', 'Matias', 'Carlos'];
    // return view('nosotros',['trabajadores'=>$equipo,'nombre'=>$nombre]);
    // se usa compact si se repite el nombre del arreglo
    return view('nosotros',compact('equipo','nombre'));

    }





    
}
