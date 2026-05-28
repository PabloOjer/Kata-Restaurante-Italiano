<?php

namespace Deg540\CleanCodeKata9;

use Deg540\CleanCodeKata9\Menu;
use Deg540\CleanCodeKata9\Rule\ImprimirComanda;

class Ticket
{
    public int $sumaPrecio = 0;
    private $comanda = [];
    private $menu;
    private $imprimirComanda;

    public function __construct()
    {
        $this->menu = new Menu();
        $this->imprimirComanda = new ImprimirComanda();
    }

    public function añadir (string $platos): string
    {
        $precio = $this->menu->getPrice($platos);
        if($precio !== null){
            $this->sumaPrecio += $precio;
            $this->comanda[] = $platos;
            return $this->imprimirComanda->imprimir($this->comanda, $this->sumaPrecio);
        }
        return "El plato seleccionado no existe en el menú";
    }

    public function eliminar (string $platos): string
    {
        $precio = $this->menu->getPrice($platos);
        if($precio !== null){
            $this->sumaPrecio -= $precio;
            unset($this->comanda[array_search($platos, $this->comanda)]);
            return $this->imprimirComanda->imprimir($this->comanda, $this->sumaPrecio);
        }
        return "El plato seleccionado no existe en el menú";
    }
}
?>