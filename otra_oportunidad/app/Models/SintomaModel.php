<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SintomaModel extends Model
{
    protected $table= 'sintoma';
    public $timestamps =false;
    public $fillable = ['sintoma','id_paciente'];
}
