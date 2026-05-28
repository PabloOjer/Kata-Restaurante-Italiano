<?php

namespace Deg540\CleanCodeKata9;

use Deg540\CleanCodeKata9\Menu;

class Ticket
{
    public int $sumaPrecio = 0;
    private $comanda = [];
    private $menu;
    
    public function __construct()
    {
        $this->menu = new Menu();

    }

    public function añadir (string $platos): string
    {
        $precio = $this->menu->getPrice($platos);
        if($precio !== null){
            $this->sumaPrecio += $precio;
            $this->comanda[] = $platos;
            return "$platos" . " x" . count(array_keys($this->comanda, $platos)) . " | Total: " . number_format($this->sumaPrecio, 2);
        }
        return "El plato seleccionado no existe en el menú";
    }

    public function eliminar (string $platos): string
    {
        $precio = $this->menu->getPrice($platos);
        if($precio !== null){
            $this->sumaPrecio -= $precio;
            unset($this->comanda[array_search($platos, $this->comanda)]);
            return "$platos" . " x" . count(array_keys($this->comanda)) . " | Total: " . number_format($this->sumaPrecio, 2);
        }
        return "El plato seleccionado no existe en el menú";
    }
}
?>