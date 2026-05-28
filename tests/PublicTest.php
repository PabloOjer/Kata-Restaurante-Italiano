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
        $this->assertEquals("pizza x1 | Total: 10.00", $result);
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
    /**
     * @test
     */
    public function testAñadirVariosPlatosIguales(): void
    {
        $ticket = new Ticket();
        $ticket->añadir("pizza");
        $ticket->añadir("pizza");
        $this->assertEquals(20, $ticket->sumaPrecio);
    }

    /**
    * @test
    */
    public function testEliminarPlato(): void
    {
        $ticket = new Ticket();
        $ticket->añadir("pizza");
        $ticket->añadir("pasta");
        $ticket->eliminar("pizza");
        $this->assertEquals("pasta x1 | Total: 8.00", $result);
    }
}
?>
