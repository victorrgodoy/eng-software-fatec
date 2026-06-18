<?php

namespace App;
use Exception;


enum StatusPedido: string
{
    case PENDENTE = 'PENDENTE';
    case PAGO = 'PAGO';
    case ENVIADO = 'ENVIADO';
}

class Pedido
{
    private int $id;
    private StatusPedido $status;
    
    /** @var ItemPedido[]*/
    private array $itens;

    public function __construct(int $id, array $itens)
    {
        $this->id = $id;
        $this->itens = $itens;
        $this->status = StatusPedido::PENDENTE;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getStatus(): StatusPedido
    {
        return $this->status;
    }

    public function getItens(): array
    {
        return $this->itens;
    }

    public function getValorTotal(): float
    {
        $total = 0;
        foreach ($this->itens as $item) {
            $total += $item->calcularSubtotal();
        }
        return $total;
    }

    public function pagar(): void
    {
        if ($this->status !== StatusPedido::PENDENTE) {
            throw new Exception('Um pedido só pode ser pago se estiver PENDENTE.');
        }
        if(empty($this->itens)) {
            throw new Exception('Um pedido deve conter pelo menos um item para ser pago.');
        }
        $this->status = StatusPedido::PAGO;
    }

    public function enviar(): void
    {
        if ($this->status !== StatusPedido::PAGO) {
            throw new Exception('Um pedido só pode ser enviado se estiver PAGO.');
        }
        $this->status = StatusPedido::ENVIADO;
    }
}