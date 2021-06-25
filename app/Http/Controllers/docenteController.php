<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Docente;
use App\Models\Pe;
use App\Models\Adscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class docenteController extends Controller
{ 
    public function index()
    {
         //$docentes = docente::all();
       // $docentes = \Session::get('nombre');
        //$estudiantes = estudiante::all();
        //$estudiantes = \Session::get('nombre');
        //$proyectos = proyecto::all();
        //$proyecto = \Session::get('id');

        /* $estudiantes = \DB::table('estudiantes')
        ->select('estudiantes.*')
        ->orderBy('id','DESC')
        ->get();
 
        $proyecto = \DB::table('proyectos')
        ->select('proyectos.*')
        ->orderBy('id','DESC')
        ->get(); */
        //return view('docente.index')->with('docentes',$docentes);
        //$estudiantes = Estudiante::orderBy('id','DESC')->get();                  

        $estudiantes = \Session::get('estudiante');

        return view('docente.index',compact('docentes',$docentes));
    }

    public function tablaDodente(){

    }
    
    public function create(){

        /* $pe = \Session::get('usuario');
        return view('coordinador.generacion.create')->with('pe',$pe);
 */
        
    }
    
    public function store(Request $request) 
    {
       /*  generacion::create(request()->all());
        return redirect('/generaciones');
        
 */
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {/* 
        $generacion = Generacion::find($id);
        return view('coordinador.generacion.edit')->with('generacion',$generacion);  */
    }

    /**
     * Update the specified resource in storage. 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       /*  $generacion = $request->all();
        $registro = Generacion::find($id);
        $registro->fill($generacion);
        $registro->save();
        return redirect("/generaciones"); */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* try{
            Generacion::destroy($id);
            return redirect('generaciones');//detalle: que avise que si borro
            alert("Se borró correctamente");
        } catch (\Throwable $th) {
            return redirect('generaciones');//detalle: que avise que no pudo borrar
            alert("No se pudo borrar");

        } */
    }
}
    




