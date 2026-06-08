<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * La tabla asociada al modelo.
     * (Laravel asume automáticamente que el plural de Category es categories,
     * pero dejarlo escrito aquí es una buena práctica).
     */
    protected $table = 'categories';

    /**
     * Atributos que se pueden asignar masivamente.
     * Esto es una medida de seguridad obligatoria de Laravel. Le dice al sistema:
     * "Está bien recibir y guardar datos en las columnas 'name' y 'description'".
     * Cualquier otra columna que intenten meter a la fuerza será ignorada.
     */
    protected $fillable = [
        'name',
        'description',
    ];
}