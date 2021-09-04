<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Docente;
use App\Models\Pe;
use App\Models\Comite;
use App\Models\Proyecto;
use App\Models\Adscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; 

class coordinadorController extends Controller
{
    public function index()
    {
        $usuario = \Session::get('usuario');
       //echo "entra coordinador: $usuario->nombre con coordinador $usuario->coordinador  ";
       return view('coordinador.index')->with('pe',$usuario);
        //return view('coordinador.index');//->with('add',$add);
    }

    public function agregarUsuarios(){
        $coordinador = \Session::get('usuario');

        //$estudiantes = Estudiante::where('pes_id',$coordinador->id)->get();

        $estudiantes =  DB::table('estudiantes')->select('nombre','id', DB::raw("'Estudiante' as nivel") )->where('pes_id',$coordinador->id);
        // "SELECT nombre FROM estudiantes where pes_id = 5"
        
        
        $usuarios =  DB::table('docentes')
        ->select('nombre','id', DB::raw("'Docente' as nivel") )
        ->whereIn('id', DB::table('adscripciones')->select('docentes_id')->where('pes_id',$coordinador->id) )
        ->union($estudiantes)
        ->get();
        // "SELECT nombre FROM docentes where id in (select docentes_id where pes_id = 5 )"
        // 
/*
 "SELECT nombre FROM estudiantes where pes_id = 5"
 UNION
 "SELECT nombre FROM docentes where id in (select docentes_id where pes_id = 5 )"

*/



        return view('coordinador.add',compact('usuarios'));
    }

    public function create()
    {
            return view('coordinador.create');
        
    }

    

    public function store(Request $request)
    {
        $pe = \Session::get('usuario');
        $estudiante = request()->except(['_token','nivel']);
        $docente = request()->except('_token');
        //dd($docente);
        $adscripcion = $request->all();

        if($request->input('nivel')=="Estudiante"){
            //echo "agregar estudiante";
            $estudiante['pes_id'] = $pe->id;
            Estudiante::insert($estudiante);

        }elseif($request->input('nivel')=="Docente"){
            
            //Docente::insert($docente);
            $nuevo = new docente();
            $nuevo->fill($docente);
            $nuevo->password = bcrypt($request->password);
            $nuevo->save();

            //modificar la adscripcion  a $pe->id del $nuevo->id
            $add = new Adscripcion();
            $add->pes_id = $pe->id;
            $add->docentes_id = $nuevo->id; 
            $add->save();

        }
        return redirect("/usuarios");

    }

   
    public function show($id)
    {
        
    }

    
    public function editarLista($tipo, $id)
    {

        if ($tipo == "Estudiante"){
            $estudiante= Estudiante::find($id);
            return view('coordinador.edit-estudiante')->with('estudiante',$estudiante);  
        }else{
            $docente= Docente::find($id);
            return view('coordinador.edit-docente')->with('docente',$docente);    
        }

    }

    public function actualizarLista(Request $request, $tipo, $id)
    {
        
        if ($tipo == "Estudiante"){
        
            $estudiante = request()->except('_token');
            
            $registro = Estudiante::find($id);

            $registro->fill($estudiante);
            $registro->save();


        }else{
            $docente = request()->except('_token');
            $registro = Docente::find($id);
            $registro->fill($docente);
            $registro->save();
    

        }

        return redirect("/usuarios"); //debe informar que paso

    }
    public function actualizarComite(Request $request, $id){
        //no esta validando que si se pueda agregar el comite, y no valida si ya tiene no agrege otro
    
        $comite = new Comite;
        $comite->fill($request->all());
        $comite->save();
        $proyecto = Proyecto::find($id);
        $proyecto->comite = $comite->id;
        $proyecto->save();
        return redirect("/asignaciones");

        $docente  = \Session::get('usuario' );
        $proyecto = Comite::where('asesor', $docente->id)->get();
        if($proyecto->count() == 'asesor')
        echo "Este proyecto ya tiene asesor y revisores asignados";
        return redirect("/asignaciones");
        
        

    }
    
    public function destroy($id)
    {
        try{
            Estudiante::destroy($id);
            return redirect('add');
        } catch (\Throwable $th) {
            return redirect('add');
        }

        try{
            Docente::destroy($id);
            return redirect('add');
            echo 'Usuario borrado correctamente';
        } catch (\Throwable $th) {
            return redirect('add');
            echo 'El usuario no se pudo borrar, verifiue de nuevo';
        }
    }

    public function password($tipo, $id){
        if ($tipo == "Estudiante"){
            $estudiante= Estudiante::find($id);
            return view('coordinador.password-estudiante')->with('estudiante',$estudiante);  
        }else{
            $docente= Docente::find($id);
            return view('coordinador.password-docente')->with('docente',$docente);    
        }

    }

    public function guardarPassword(Request $request, $tipo, $id){

        $rules = [
            'password' => 'required',
        ];
        
        $messages = [
            'password.required' => 'El campo es requerido',
        ];


        if ($tipo == "Estudiante"){       
             $estudiante= Estudiante::find($id);
             $estudiante->password = Hash::make($request->password);
             $estudiante->save();
             return redirect("/usuarios")->with('mensaje','Contraseña cambiada correctaente');
        }else{
            $docente= Docente::find($id);
            $docente->password = Hash::make($request->password);
            $docente->save();
            return redirect("/usuarios")->with('mensaje','Contraseña cambiada correctamente');
        }

    
        }
   
}