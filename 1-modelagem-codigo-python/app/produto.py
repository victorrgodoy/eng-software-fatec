class Produto:
    def __init__(self, id: int, nome: str, preco: float):
        self.__id = id
        self.__nome = nome
        self.__preco = preco

    def get_id(self) -> int:
        return self.__id

    def get_nome(self) -> str:
        return self.__nome

    def get_preco(self) -> float:
        return self.__preco