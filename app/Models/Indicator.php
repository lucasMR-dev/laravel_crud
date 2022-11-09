<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Indicator
 *
 * @property $id
 * @property $nombreIndicador
 * @property $codigoIndicador
 * @property $unidadMedidaIndicador
 * @property $valorIndicador
 * @property $fechaIndicador
 * @property $tiempoIndicador
 * @property $origenIndicador
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Indicator extends Model
{
    
    static $rules = [
		'nombreIndicador' => 'required',
		'codigoIndicador' => 'required',
		'unidadMedidaIndicador' => 'required',
		'valorIndicador' => 'required',
		'fechaIndicador' => 'required',
		'origenIndicador' => 'required',
    ];

    protected $perPage = 50;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreIndicador','codigoIndicador','unidadMedidaIndicador','valorIndicador','fechaIndicador','tiempoIndicador','origenIndicador'];



}
