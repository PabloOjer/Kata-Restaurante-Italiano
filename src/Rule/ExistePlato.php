<?php

namespace Deg540\CleanCodeKata9\Rule;

class ExistePlato
{
    private $platos = ["pizza" => 10, "pasta" => 8, "ensalada" => 5];
    
    public function existePlato(string $dish): bool
    {
        foreach ($this->platos as $plato => $precio) {
            if ($plato === $dish) {
                return true;
            }
        }
        return false;
    }
}