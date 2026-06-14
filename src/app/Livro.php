<?php

namespace App;

class Livro
{
    private int $id;
    private string $titulo;
    private bool $disponivel;

    public function __construct(int $id, string $titulo, bool $disponivel = true)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->disponivel = $disponivel;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function isDisponivel(): bool
    {
        return $this->disponivel;
    }
}