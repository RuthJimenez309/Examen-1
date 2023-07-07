<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{ 
    use HasFactory;

    private $id;
    private $cuota;
    private $monto;
    private $tasaInteres;
    private $plazo;

    public function __construct($id, $cuota, $monto, $tasaInteres, $plazo)
    {
        $this->id = $id;
        $this->cuota = $cuota;
        $this->monto = $monto;
        $this->tasaInteres = $tasaInteres;
        $this->plazo = $plazo;
    }



}
