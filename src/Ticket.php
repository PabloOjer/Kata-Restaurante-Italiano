<?php

namespace Deg540\CleanCodeKata9;

use Deg540\CleanCodeKata9\Menu;

class Ticket
{
    public int $sumaPrecio = 0;
    private $menu;
    
    public function __construct()
    {
        $this->menu = new Menu();

    }

    public function añadir (string $platos): bool
    {
        $precio = $this->menu->getPrice($platos);
        if($precio !== null){
            $this->sumaPrecio += $precio;
            return true;
        }
        return "El plato seleccionado no existe en el menú";
    }
}
?>