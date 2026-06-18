class Aluno:
    def __init__(self, id: int, nome: str):
        self.__id = id
        self.__nome = nome
        self.__notas_escolares: list[float] = []

    def get_id(self) -> int:
        return self.__id

    def get_nome(self) -> str:
        return self.__nome

    def get_notas_escolares(self) -> list[float]:
        return self.__notas_escolares

    def add_nota_escolar(self, nota: float) -> None:
        self.__notas_escolares.append(nota)

    def calcular_media_escolar(self) -> float:
        if not self.__notas_escolares:
            return 0.0
        return sum(self.__notas_escolares) / len(self.__notas_escolares)