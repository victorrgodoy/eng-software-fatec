from app.aluno import Aluno


def test_calcular_media_escolar():
    aluno = Aluno(1, "John")
    aluno.add_nota_escolar(5.0)
    aluno.add_nota_escolar(10.0)
    media = aluno.calcular_media_escolar()
    assert media == 7.5


def test_calcular_media_escolar_com_notas_vazias():
    aluno = Aluno(1, "John")
    media = aluno.calcular_media_escolar()
    assert media == 0.0