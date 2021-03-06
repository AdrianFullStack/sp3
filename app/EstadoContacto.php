<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoContacto extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "EST_CONTACTO";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ID_EST_CONT";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;
}
