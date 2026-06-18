<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Pedido;
use App\ItemPedido;
use App\Produto;
use Exception;

class PedidoTest extends TestCase
{
    /** @test */
    public function test_deve_calcular_valor_total_com_base_nos_itens()
    {
        $camisaAzul = new Produto(1, "Camisa Azul", 50.0);
        $camisaVermelha = new Produto(2, "Camisa Vermelha", 60.0);

        $item1 = new ItemPedido(1, $camisaAzul, 2);     
        $item2 = new ItemPedido(2, $camisaVermelha, 1);  

        $pedido = new Pedido(123, [$item1, $item2]);

        $this->assertEquals(160.0, $pedido->getValorTotal());
    }

    /** @test */
    public function test_nao_deve_permitir_pagar_um_pedido_sem_itens()
    {
        $pedido = new Pedido(123, []);

        $this->expectException(Exception::class);
        $pedido->pagar();
    }
}