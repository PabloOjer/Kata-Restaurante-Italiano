<?php

namespace Deg540\CleanCodeKata9;

use Deg540\CleanCodeKata9\Menu;

class Ticket
{ 
    private int $sumaPrecio = 0;
    
    public function __construct()
    {
        private $menu = new Menu();

    }

    public function añadir (string $platos): bool
    {
        return($this->menu->getPrice($platos));
    }
}
?>