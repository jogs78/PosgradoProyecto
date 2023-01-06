<?php

namespace App\Imports;

use App\Models\Estudiante;
use App\Models\Pe;
use App\Models\Periodo;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EstudianteImport implements ToModel, WithHeadingRow
{
    use Importable;
    private $pe;
    private $periodo;
    public function __construct(int $periodo_id)
    {
        $this->pe = Pe::pluck('id','nombre');
        $this->periodo = $periodo_id;
        
    }
    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Estudiante([
            'nombre'     => $row['estudiantes'],
            'correo'    => $row['correo'], 
            'password' => Hash::make($row['password']),
            'pe_id' => $this->pe[$row['programa_educativo']],
            'periodo_id' => $this->periodo
        ]);
    }
}
