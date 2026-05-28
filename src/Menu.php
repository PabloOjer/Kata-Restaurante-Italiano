<?php

namespace Deg540\CleanCodeKata9;

use Deg540\CleanCodeKata9\Menu;
use Deg540\CleanCodeKata9\Interface;

class Menu
{ 
    private $platos = array();
    
    public function __construct()
    {
    }

    public function getPrice(string $dish): ?float
    {
        return null;
    }
}
?>