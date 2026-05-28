<?php

namespace Deg540\CleanCodeKata9\Rules;

class ExistePlato implements Rule
{
    public function existePlato(string $dish): bool
    {
        return isset($this->platos[$dish]);
    }
}