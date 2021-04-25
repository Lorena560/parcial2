<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 *
 * @property $id
 * @property $nombre
 * @property $tamanio
 * @property $cant_pag
 * @property $pecio
 * @property $fecha_public
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'tamanio' => 'required',
		'cant_pag' => 'required',
		'pecio' => 'required',
		'fecha_public' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','tamanio','cant_pag','pecio','fecha_public'];



}
