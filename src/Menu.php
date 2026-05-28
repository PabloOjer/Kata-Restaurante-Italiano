<?php

namespace Deg540\CleanCodeKata9;

use Deg540\CleanCodeKata9\Rule\ExistePlato;

class Menu
{    
    public function __construct()
    {
    }

    public function getPrice(string $dish): ?float
    {
        $existePlato = new ExistePlato();
        if ($existePlato->existePlato($dish)) {
            return $this->platos[$dish];
        }

        return null;
    }
}
?>