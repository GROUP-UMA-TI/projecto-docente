<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;


class Util
{
     public static function getEstado($estado)
    {
        return $estado == 1 ? 'Activo' : 'Inactivo';
    }

    public static function getGenero($genero)
    {
        return $genero == 'F' ? 'Femenino' : 'Masculino';
    }
    
    

}
