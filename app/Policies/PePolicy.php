<?php

namespace App\Policies;

use App\Models\Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;

class PePolicy
{
    use HandlesAuthorization;
    
    public function pesAutorizado(Pe $pe){
        return true; //Aun no esta terminado ing
    }
}