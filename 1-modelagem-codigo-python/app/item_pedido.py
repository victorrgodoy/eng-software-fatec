from app.produto import Produto


class ItemPedido:
    def __init__(self, id: int, produto: Produto, quantidade: int):
        self.__id = id
        self.__produto = produto
        self.__quantidade = quantidade

    def get_id(self) -> int:
        return self.__id

    def get_produto(self) -> Produto:
        return self.__produto

    def get_quantidade(self) -> int:
        return self.__quantidade

    def calcular_subtotal(self) -> float:
        return self.__produto.get_preco() * self.__quantidade