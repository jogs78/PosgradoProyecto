<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Proyecto;
use App\Models\Rubrica;
use App\Models\Evaluacion;
use App\Models\DesgloceEvaluacion;
use App\Models\Criterio;
use App\Models\Evidencia;
use App\Models\Reporte;




use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class EvaluarController extends Controller
{
    public function index($id){        
        $proyecto = Proyecto::find($id);;
        $rubica_usada = $proyecto->estudiante->semestreActual->rubrica;
        $criterios = Rubrica::find($rubica_usada)->criteriosProyecto; //Esto me sirve para traer todos los criterios de la rubrica ing.
        return view('docente.evaluar', compact('proyecto','criterios'));
    }

    public function store(Request $request){
        $usuario  = \Session::get('usuario' );
        $id_docente = $usuario->id; 
        try{
          DB::beginTransaction();
            $nueva_evaluacion = Evaluacion::create([
                'proyecto_id'=> $request->proyecto_id,
                'fecha'=> date('Y-m-d H:i:s'),
                'docente_id' =>$id_docente,
                'periodo_id'=> $request->periodo_id,
                ]  );
//                echo "agrego una nueva evaluacion";
            //por cada valor voy a guardarlo en la tabla de desgloce
            $conceptos=$request->input('concepto');
            $observaciones=$request->input('observacion');
            $valores=$request->input('valor');
            $i=0;
            $suma=0;
//           var_dump($conceptos);
//            var_dump($observaciones);
//              var_dump($valores);
            foreach($valores as $calif){
                $datos = [
                    'evaluacion_id'=>$nueva_evaluacion->id,
                    'docente_id'=>$id_docente,
                    'concepto'=>$conceptos[$i],
                    'valor'=> $calif,
                    'observacion'=>$observaciones[$i],
                ];
                echo "<hr>";
                print_r($datos);
                echo "<hr>";
                DesgloceEvaluacion::create($datos);
                $i++;
                $suma += $calif;
            }
            $promedio = $suma / $i;
            $nueva_evaluacion->calificacion = $promedio;
            $nueva_evaluacion->save();
            DB::commit();
            return redirect("/docentes")->with('message','Calificaciones asignadas al proyecto');
        } catch (\Exception $e){
            echo $e->getMessage();
            DB::rollBack();
        }
    } 

    public function promedioSemestrales($id){
        $proyecto = Proyecto::find($id);
        $nuevo = $proyecto->estudiante->nuevoPeriodo;
        $periodo = Rubrica::find($nuevo);
        return view('docente.semestral', compact('proyecto','periodo'));

    }

    public function show($id){
        $usuario  = \Session::get('usuario' );
        $proyecto = Proyecto::find($id);
        $evaluacion = Evaluacion::where('proyecto_id',$proyecto->id)->get();
        return view('docente.historico', compact('proyecto','evaluacion'));
    }
    
    public function conceptos($id){
    
        $evaluacion = Evaluacion::find($id);
        $nuevo = DesgloceEvaluacion::where('evaluacion_id',$evaluacion->id)->get();
        return view('docente.conceptos',compact('evaluacion','nuevo'));
    }

    public function verCompromisos($id){

       $evidencia = Evidencia::find($id);
       $pathToFile = storage_path('app/evidencias').'/'.$evidencia->archivo;
       return response()->download($pathToFile);
       
    }
    public function verReportes($id){

        $pdf = Reporte::find($id);
        $pathToFile = storage_path('app/evidencias').'/'.$pdf->reporte;
        return response()->download($pathToFile);
        
     }

    public function porcentaje($id){
    
        $proyecto = Proyecto::find($id);
        return view('docente.porcentaje',compact('proyecto'));
    }

    public function guardarPorcentajes(Request $request){
        
        return redirect("/docentes")->with('avance','Avance asignado');
    }

    
}
