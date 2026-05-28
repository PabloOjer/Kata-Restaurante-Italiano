<?php

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\Ticket;
use PHPUnit\Framework\TestCase;

final class PublicTest extends TestCase
{
    /**
     * @test
     */
    public function testAñadirPlato(): void
    {
        $ticket = new Ticket();
        $result = $ticket->añadir("pizza", 10);
        $this->assertTrue($result);
    }
}
?>
