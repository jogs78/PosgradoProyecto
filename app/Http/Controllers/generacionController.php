<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Generacion;


  

class GeneracionController extends Controller
{
    public function index(){ 
        $generaciones = \DB::table('generaciones')
        ->get();
        return view('coordinador.generacion.index',compact('generaciones',$generaciones));
    
    }

    public function create(){
        
        return view('coordinador.generacion.create');

        
    }
    
    public function store(Request $request) 
    {
        generacion::create(request()->all());
        return redirect('/generaciones');
        
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
    {
        $generacion = Generacion::find($id);
        return view('coordinador.generacion.edit')->with('generacion',$generacion); 
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
        $generacion = $request->all();
        $registro = Generacion::find($id);
        $registro->fill($generacion);
        $registro->save();
        return redirect("/generaciones");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Generacion::destroy($id);
            return redirect('generaciones');//detalle: que avise que si borro
            alert("Se borró correctamente");
        } catch (\Throwable $th) {
            return redirect('generaciones');//detalle: que avise que no pudo borrar
            alert("No se pudo borrar");

        }
    }
}
    


