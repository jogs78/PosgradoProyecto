<?php

namespace App\Policies;

use App\Models\Rubrica;
use App\Models\Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;

class RubricaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return mixed
     */
    public function viewAny(Usuario $usuario)
    {
        //
    }

    public function listar(Usuario $usuario, Rubrica $rubrica)
    {
        if($usuario->rol=='Coordinador') return true;
        else return false;
    }

    public function create(Usuario $usuario)
    {
        return $usuario->rol == 'Coordinador';
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Rubrica  $rubrica
     * @return mixed
     */
    public function view(Usuario $usuario, Rubrica $rubrica)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return mixed
     */
    

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Rubrica  $rubrica
     * @return mixed
     */
    public function update(Usuario $usuario, Rubrica $rubrica)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Rubrica  $rubrica
     * @return mixed
     */
    public function delete(Usuario $usuario, Rubrica $rubrica)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Rubrica  $rubrica
     * @return mixed
     */
    public function restore(Usuario $usuario, Rubrica $rubrica)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Rubrica  $rubrica
     * @return mixed
     */
    public function forceDelete(Usuario $usuario, Rubrica $rubrica)
    {
        //
    }
}