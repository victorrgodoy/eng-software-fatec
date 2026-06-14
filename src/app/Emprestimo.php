<?php

namespace App;
use App\Usuario;
use App\Livro;

class Emprestimo
{
    private  int $id;
    private Usuario $usuario;
    private Livro $livro;

    public function __construct(int $id, Usuario $usuario, Livro $livro)
    {
        $this->id = $id;
        $this->usuario = $usuario;
        $this->livro = $livro;
    }

    public function getId(): int
    {
        return $this->id;
    }
    
    public function getUsuario(): Usuario
    {
        return $this->usuario;
    }

    public function getLivro(): Livro
    {
        return $this->livro;
    }

}