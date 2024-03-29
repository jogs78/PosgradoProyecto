<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GeneracionController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\RubricaController;
use App\Http\Controllers\CriterioController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\CompromisoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EvaluarController;
use App\Http\Controllers\TableroController;
use App\Http\Controllers\AdquiridoController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AdscripcionController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::post('entrada', [EntradaController::class, 'validar'])->name('entrada.validar');
Route::get('logout', [EntradaController::class, 'logout'])->name('entrada.salida');;
Route::get('info', [InfoController::class, 'index'])->name('info');
Route::get('manuales', [UserController::class, 'manual'])->name('manuales'); //no funciona esta ruta

Route::get('inicio', [TableroController::class ,'inicio'])->name('inicio');


///INFORMATICO
//no tiene inicio puesto que es lo unico que hace, pero falta otras opciones que seran mas modulos
Route::get('programas/estadisticos/{programa}',[PeController::class,'estadisticos'])->name('programas.estadisticos');
Route::resource('programas', PeController::class);


/// COORDINADOR
    //Route::get('coordinadores', [TableroController::class ,'coordinadores'])->name('coordinadores');
//Adscripciones
//Route::resource('adscripciones', AdscripcionController::class);
Route::get('adscripciones', [AdscripcionController::class, 'index'])->name('adscripciones.index');
Route::post('adscripciones/{id}', [AdscripcionController::class, 'store'])->name('adscripciones.store');

    //Docentes
Route::resource('docentes', DocenteController::class);
//Rubricas
Route::resource('rubricas', RubricaController::class);
//-Criterios
Route::get('criterios/create/{rubrica_id}', [CriterioController::class, 'create'])->name('criterios.create');
Route::get('criterios/{rubrica_id}', [CriterioController::class, 'index'])->name('criterios.index');
Route::resource('criterios', CriterioController::class)->except(['index','create']);

//Generaciones
Route::get('generaciones/estadisticos/{generacion}',[GeneracionController::class,'estadisticos'])->name('generaciones.estadisticos');
Route::get('estadisticos_generacion/{generacion}',[GeneracionController::class,'estadisticos_generacion'])->name('estadisticos_generacion');
Route::resource('generaciones', GeneracionController::class);
//-Periodos
Route::get('periodos/cambiar-comite/{id_proyecto}', [PeriodoController::class, 'cambiarComite'])->name('periodos.cambiarGet');
Route::put('periodos/cambiar-comite/{id_proyecto}', [PeriodoController::class, 'cambiarComitePut'])->name('periodos.cambiarPut');
Route::get('periodos/create/{geneacion}', [PeriodoController::class, 'create'])->name('periodos.create');
Route::get('periodos/{periodo}/proyectos', [PeriodoController::class, 'proyectos'])->name('periodos.proyectos');
Route::get('periodos/{geneacion}', [PeriodoController::class, 'index'])->name('periodos.index');
Route::get('periodos/estadisticos/{periodo}', [PeriodoController::class, 'estadisticos'])->name('periodos.estadisticos');
//aqui falta inscribir estudiantes...
Route::get('periodos/reinscripcion/{periodo}', [PeriodoController::class, 'reinscripcion'])->name('periodos.reinscripcion');
Route::get('periodos/inscripcion/{periodo}', [PeriodoController::class, 'inscripcionCambio'])->name('periodos.inscripcionCambio');
Route::post('periodos/inscripcion/{periodo}', [PeriodoController::class, 'inscripcionCambioPost'])->name('periodos.inscripcionCambioPost');
Route::get('periodos/batch/{periodo}', [PeriodoController::class, 'vista_batch'])->name('periodos.vista_batch');
Route::post('periodos/batch/{periodo}', [PeriodoController::class, 'importarExcel'])->name('periodos.importarExcel');
Route::get('periodos/formato/{periodo}', [PeriodoController::class, 'exportarFormatoExcel'])->name('periodos.exportarFormatoExcel');
Route::get('periodos/excel/{periodo}', [PeriodoController::class, 'exportarExcel'])->name('periodos.exportarExcel');
Route::patch('/periodos/reinscripcion/{periodo?}', [PeriodoController::class, 'EstudiantePatch'])->name('periodos.EstudiantePatch');

//Route::get('periodos/estudianteReinscripcion/{periodo}', [PeriodoController::class, 'estudianteReinscripcion'])->name('periodos.estudianteReinscripcion');
Route::resource('periodos', PeriodoController::class)->except(['index','create']);;

//Compromisos
Route::resource('compromisos', CompromisoController::class);

//proyectos(asignar comite)

Route::get('proyectos/listar', [ProyectoController::class, 'listarProyectos'])->name('proyectos.sincomite');
Route::get('proyectos/asignar-comite/{id_proyecto}', [ProyectoController::class, 'asignarComite'])->name('proyectos.asignarGet');
Route::put('proyectos/asignar-comite/{id_proyecto}', [ProyectoController::class, 'asignarComitePut'])->name('proyectos.asignarPut');
//una cosa es asignar y otra es cambiar, tengo que hacer las rutas y copiar y pegar el blade




/// Estudiante
//Route::get('inicio', [TableroController::class ,'inicio'])->name('inicio');


//Route::resource('estudiantes', EstudianteController::class);

//Route::resource('proyectos', ProyectoController::class)->except(['index',destroy']) ;

Route::get('proyectos/registrar', [ProyectoController::class,'create'])->name('proyectos.create');
Route::post('proyectos/registrar', [ProyectoController::class,'store'])->name('proyectos.store');
Route::get('proyectos/{proyecto}/edit', [ProyectoController::class,'edit'])->name('proyectos.edit');
Route::put('proyectos/{proyecto}', [ProyectoController::class,'update'])->name('proyectos.update');
Route::get('proyectos/{proyecto}', [ProyectoController::class,'show'])->name('proyectos.show');


Route::get('proyectos/comprometerse', [ProyectoController::class,'comprometerse'])->name('proyectos.comprometerse');

Route::put('compromiso-adquirido', [AdquiridoController::class,'compromisoAdquirido'])->name('compromisos.adquirir');
Route::put('actividad-agendada', [ActividadController::class,'agendar'])->name('actividades.agendar');
Route::delete('eliminar-compromiso/{compromiso}', [AdquiridoController::class,'destroy'])->name('compromisos.eliminar');
Route::delete('eliminar-actividad/{actividad}', [ActividadController::class,'destroy'])->name('actividades.eliminar');


Route::get('proyectos/reportar', [ProyectoController::class,'reportar'])->name('proyectos.reportar');
Route::post('proyectos/reportar', [AdquiridoController::class,'guardarReporte'])->name('proyectos.guardarReporte');

Route::get('mostrar-calificacionesEs/{id}', [EstudianteController::class,'show']);

///Docente 


//Docente Evaluaciones
Route::get('proyectos/evaluar/{proyecto}', [EvaluarController::class, 'create'])->name('proyectos.evaluar');
Route::post('guardar-calificaciones', [EvaluarController::class, 'store'])->name('proyectos.calificaiones');

Route::get('proyectos/historico/{proyecto}', [EvaluarController::class, 'show'/*'show' */])->name('proyectos.historico');

Route::get('proyectos/avance/{proyecto}', [EvaluarController::class, 'porcentaje'])->name('proyectos.avance');
Route::put('proyectos/avance/{proyecto}', [EvaluarController::class, 'guardarAvance'])->name('proyectos.guardarAvance');
