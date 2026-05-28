<?php

namespace Deg540\CleanCodeKata9\Rule;

class ExistePlato
{
    private $platos = ["pizza" => 10, "pasta" => 8, "ensalada" => 5];

    public function existePlato(string $dish): bool
    {
        return isset($this->platos[$dish]);
    }
}