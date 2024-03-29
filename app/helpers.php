<?php
if (! function_exists('current_type')) {
    function current_type()
    {
        $usuario  = \Session::get('usuario' );
        if (is_null($usuario)) return "";
        if(is_array($usuario)){
            return "Informatico";  
        }else{
            $clase = get_class($usuario);
            switch ($clase) {
                case 'App\Models\Estudiante':
                    return "Estudiante";
                    break;
                case 'App\Models\Docente':
                    return "Docente";
                    break;
               case 'App\Models\Pe':
                    return "Coordiandor";
                    break;
            }
        }
        return "SIN TIPO";
    }
}
if (! function_exists('current_name')) {
    function current_name()
    {
        $usuario  = \Session::get('usuario' );
        if (is_null($usuario)) return "";
        if(is_array($usuario)){
            return "informatico";  
        }else{
            $clase = get_class($usuario);
            $usuario = $usuario->fresh(); 

            switch ($clase) {
                case 'App\Models\Estudiante':
                    return  "Estudiante : " . $usuario->pe->nombre . ":" . $usuario->nombre ;
                    break;
                case 'App\Models\Docente':
                    return "Docente : " . $usuario->nombre ;
                    break;
               case 'App\Models\Pe':
                    return "Coordiandor : " . $usuario->nombre . ":" . $usuario->coordiandor ;
                    break;
            }
        }
        return "SIN NOMBRE";
    }
}
if (! function_exists('current_id')) {
    function current_id()
    {
        $usuario  = \Session::get('usuario' );
        if (is_null($usuario)) return null;
        if(is_array($usuario)){
            return 0;  
        }else{
            $usuario = $usuario->fresh(); 
            return $usuario->id;
        }
        return null;
    }
}