<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;

class TableroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inicio(){
        $usuario  = \Session::get('usuario' );
        if (is_null($usuario)) redirect(route('welcome'));
        if(is_array($usuario)){
            return  redirect(route('programas.index'));  
        }else{
            $usuario = $usuario->fresh();
            $clase = get_class($usuario);
            switch ($clase) {
                case 'App\Models\Estudiante':
                    return $this->estudiante();
                    break;
                case 'App\Models\Docente':
                    return $this->docente();
//                    return  redirect('/docentest');
                    break;
               case 'App\Models\Pe':
                    return view('coordinador.index')->with('pe',$usuario);
                    break;
            }
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function estudiante()
    {        

        $estudiante  = \Session::get('usuario' );
        $estudiante = $estudiante->fresh(); 

        if (is_null($estudiante->periodo_id))
            return redirect()->back()->withInput()->with('message','Este estudiante no tiene periodo asignado');

        $estado = $estudiante->periodo->estado;

        switch ($estado) {
            case 'Inicio':
                $proyecto = $estudiante->proyecto;
                //$proyecto = Proyecto::where('estudiante_id', $estudiante->id)->get();
                if (is_null($estudiante->proyecto)){
                    //$hacer = ["Registrar"];
                    return redirect( route('proyectos.create'))->with('message','Estudiante sin proyecto registrado') ;
                }  
                //si no tiene evaluaciones ni comite puede editar
                if($proyecto->evaluaciones-> count()==0 && is_null($proyecto->comite) )
                    return redirect( route('proyectos.edit',$proyecto->id ))->with('message','Este proyecto puede editarse puesto que aún no tiene comite tutorial') ;
                //se lo muestro
                return redirect( route('proyectos.show',$proyecto->id ))->with('message','Este proyecto no puede editarse puesto que tiene un comite tutorial') ;
                break;
            case 'Comprometerse':
                return redirect( route('proyectos.comprometerse' ))->with('message','Es momento de decidir como alcanzar el objetivo') ;
                break;
            case 'Seguimiento':
                return redirect( route('proyectos.show',$estudiante->proyecto->id ))->with('message','Este proyecto no puede editarse puesto que el periodo esta en "SEGUIMINETO"') ;
                break;
            case 'Reportar':
                return redirect( route('proyectos.reportar'))->with('message','Es hora de subir las evidencias de los compromisos logrados') ;
                break;
            case 'Evaluacion':
                return redirect( route('proyectos.show',$estudiante->proyecto->id ))->with('message','Este proyecto no puede editarse puesto que el periodo esta en "EVALUACION"') ;
                break;
            case 'Concluido':
                return redirect( route('proyectos.show',$estudiante->proyecto->id ))->with('message','Este proyecto no puede editarse puesto que el periodo esta "CONCLUIDO"') ;
                break;                
            default:
                return redirect(route('welcome'))->with('message','El periodo no ha sido inicializado.');
                break;
        }
    }

    public function docente()
    {        

        $docente  = \Session::get('usuario' );
        $docente = $docente->fresh(); 
        $proyectos = $docente->proyectos();
        return view('docente.index', compact('proyectos'));
    }    
}

