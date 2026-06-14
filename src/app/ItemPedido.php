<?php

namespace App;

use App\Produto;

class ItemPedido
{
    private int $id;
    private Produto $produto;
    private int $quantidade;

    public function __construct(int $id, Produto $produto, int $quantidade)
    {
        $this->id = $id;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getProduto(): Produto
    {
        return $this->produto;
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    public function calcularSubtotal(): float
    {
        return $this->produto->getPreco() * $this->quantidade;
    }
}