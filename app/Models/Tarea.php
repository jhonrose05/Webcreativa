<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tarea
 *
 * @property $id
 * @property $idUsuario
 * @property $nombre
 * @property $Fecha_Inicio
 * @property $Fecha_Fin
 * @property $Estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tarea extends Model
{
    
    static $rules = [
		'idUsuario' => 'required',
		'nombre' => 'required',
		'Fecha_Inicio' => 'required',
		'Fecha_Fin' => 'required',
		'Estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idUsuario','nombre','Fecha_Inicio','Fecha_Fin','Estado'];



}
