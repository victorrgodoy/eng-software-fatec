<?php

namespace App;

class Usuario
{
    private int $id;
    private string $nome;

    /** @var Emprestimo[] */
    private array $emprestimos = [];

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

    /** @return Emprestimo[] */
    public function getEmprestimos(): array
    {
        return $this->emprestimos;
    }

    public function addEmprestimo(Emprestimo $emprestimo): void
    {
        $this->emprestimos[] = $emprestimo;
    }
}