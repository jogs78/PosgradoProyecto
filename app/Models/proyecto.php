<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    protected $table = 'proyectos';
    protected $fillable=['Titulo','Hipotesis','Objetivos','Reporte','ProyectosCol','comite','avance'];
    public $timestamps = false;
}