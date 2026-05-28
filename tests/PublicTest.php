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
        $result = $ticket->añadir("pizza");
        $this->assertTrue($result);
    }

    /**
     * @test
     */
    public function testPrecioAñadirPlato() : void {

        $ticket = new Ticket();
        $ticket->añadir("pizza");
        $this->assertEquals(10, $ticket->sumaPrecio);
    }

    /**
     * @test
     */
    public function testAñadirPlatoNoExistente(): void
    {
        $ticket = new Ticket();
        $result = $ticket->añadir("hamburguesa");
        $this->assertEquals("El plato seleccionado no existe en el menú",$result);
    }
    /**
     * @test
     */
    public function testAñadirVariosPlatos(): void
    {
        $ticket = new Ticket();
        $ticket->añadir("pizza");
        $ticket->añadir("pasta");
        $this->assertEquals(18, $ticket->sumaPrecio);
    }   
}
?>
