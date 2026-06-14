<?php

namespace App;

class Aluno
{
    private int $id;
    private string $nome;

    /** @var float[] */
    private array $notasEscolares = [];

    public function __construct(int $id, string $nome)
    {
        $this->id = $id;
        $this->nome = $nome;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    /** @return float[] */
    public function getNotasEscolares(): array
    {
        return $this->notasEscolares;
    }

    public function addNotaEscolar(float $nota): void
    {
        $this->notasEscolares[] = $nota;
    }

    public function calcularMediaEscolar(): float
    {
        $notas = $this->getNotasEscolares();
        if (count($notas) === 0) {
            return 0.0;
        }
        $soma = array_sum($notas);
        return $soma / count($notas);
    }

}