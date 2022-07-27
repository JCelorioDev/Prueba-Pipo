<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SintomaModel;
use PDF;
use Illuminate\Support\Facades\DB;

class Reporte extends Component
{
    public $nomSintoma;

    public function render()
    {
        return view('livewire.reporte');
    }

    public function Sintoma($nomSintoma)
    {
        $s=DB::table('sintoma')
        ->join('paciente','sintoma.id_paciente','=','paciente.id')
        ->select('paciente.*','sintoma.sintoma as nomsinto')
        -> where( 'sintoma.sintoma', $nomSintoma )->get();
        return PDF::loadView('livewire.sintoma', compact('s'))
        ->stream('archivo.pdf');
    } 

    public function MostrarDatosFiltradosPorPaciente(){
        $mdfp=DB::table('paciente')
        ->join('medico','paciente.id_medico','=','medico.id')
        ->join('sintoma','sintoma.id','=','sintoma.id')
        ->select('paciente.*','medico.nombre as nom_m','medico.apellido as ape_m','sintoma.sintoma as nomsinto')
        ->get();
         return PDF::loadView('livewire.medico', compact('mdfp'))
        ->stream('archivo.pdf');
    }
}
