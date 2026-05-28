<?php

namespace Deg540\CleanCodeKata9;

use Deg540\CleanCodeKata9\Menu;

class Ticket
{ 
    private int $sumaPrecio = 0;
    private $menu;
    
    public function __construct()
    {
        $this->menu = new Menu();

    }

    public function añadir (string $platos): bool
    {
        return($this->menu->getPrice($platos) == null);
    }
}
?>