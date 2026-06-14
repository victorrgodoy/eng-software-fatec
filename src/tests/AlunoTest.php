<?php 

namespace Tests;

use PhpUnit\Framework\TestCase;
use App\Aluno;

class AlunoTest extends TestCase
{
    
    /** @test */
    public function test_calcular_media_escolar()
    {
        $aluno = new Aluno(1, "John ");
        $aluno->addNotaEscolar(5.0);
        $aluno->addNotaEscolar(10.0);

        $media = $aluno->calcularMediaEscolar();

        $this->assertEquals(7.5, $media);
    }

    /** @test */
    public function test_calcular_media_escolar_com_notas_vazias()
    {
        $aluno = new Aluno(1, "John ");
        $media = $aluno->calcularMediaEscolar();
        $this->assertEquals(0.0, $media);
    }
}
