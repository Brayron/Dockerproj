<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiantes2
 *
 * @property $id
 * @property $Nombre
 * @property $email
 * @property $matricula
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudiantes2 extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'email' => 'required',
		'matricula' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','email','matricula'];



}
