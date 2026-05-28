<?php

namespace Deg540\CleanCodeKata9;

class Ticket
{ 
    private int $sumaPrecio = 0;
    private $platos = array();
    
    public function __construct()
    {
    }

    public function añadir (string $platos, int $precio): bool
    {
        return true;
    }
}
?>