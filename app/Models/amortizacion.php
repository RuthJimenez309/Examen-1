<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class amortizacion extends Model
{
    use HasFactory;

    private $idPrestamo;
    private $periodo;
    private $capital;
    private $interes;
    private $saldo;

    public function __construct($idPrestamo, $periodo, $capital, $interes, $saldo)
    {
        $this->idPrestamo = $idPrestamo;
        $this->periodo = $periodo;
        $this->capital = $capital;
        $this->interes = $interes;
        $this->saldo = $saldo;
    }
}
