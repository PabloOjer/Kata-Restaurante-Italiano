<?php

namespace Deg540\CleanCodeKata9\Rule;

class ImprimirComanda
{
    private $respuesta = "";
    public function imprimir(array $comanda, float $sumaPrecio): string
    {
        foreach ($comanda as $plato) {
            $respuesta .= $plato . " x" . count(array_keys($comanda, $plato)) . " | Total: " . number_format($sumaPrecio, 2)."\n";
        }
        return $respuesta;
    }
}