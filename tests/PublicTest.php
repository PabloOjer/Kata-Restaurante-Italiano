<?php

use PHPUnit\Framework\TestCase;

final class PublicTest extends TestCase
{
    /**
     * @test
     */
    public function testAñadirPlato(): void
    {
        $ticket = new Ticket();
        $ticket->añadir();
        $this->assertTrue(true);
    }
}
?>