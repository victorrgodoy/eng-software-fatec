from enum import Enum

from app.item_pedido import ItemPedido


class StatusPedido(Enum):
    PENDENTE = 'PENDENTE'
    PAGO = 'PAGO'
    ENVIADO = 'ENVIADO'


class Pedido:
    def __init__(self, id: int, itens: list[ItemPedido]):
        self.__id = id
        self.__itens = itens
        self.__status = StatusPedido.PENDENTE

    def get_id(self) -> int:
        return self.__id

    def get_status(self) -> StatusPedido:
        return self.__status

    def get_itens(self) -> list[ItemPedido]:
        return self.__itens

    def get_valor_total(self) -> float:
        total = 0.0
        for item in self.__itens:
            total += item.calcular_subtotal()
        return total

    def pagar(self) -> None:
        if self.__status != StatusPedido.PENDENTE:
            raise Exception('Um pedido só pode ser pago se estiver PENDENTE.')
        if not self.__itens:
            raise Exception('Um pedido deve conter pelo menos um item para ser pago.')
        self.__status = StatusPedido.PAGO

    def enviar(self) -> None:
        if self.__status != StatusPedido.PAGO:
            raise Exception('Um pedido só pode ser enviado se estiver PAGO.')
        self.__status = StatusPedido.ENVIADO