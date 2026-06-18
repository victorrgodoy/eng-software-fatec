import pytest

from app.produto import Produto
from app.item_pedido import ItemPedido
from app.pedido import Pedido


def test_deve_calcular_valor_total_com_base_nos_itens():
    camisa_azul = Produto(1, "Camisa Azul", 50.0)
    camisa_vermelha = Produto(2, "Camisa Vermelha", 60.0)
    item1 = ItemPedido(1, camisa_azul, 2)
    item2 = ItemPedido(2, camisa_vermelha, 1)
    pedido = Pedido(123, [item1, item2])
    assert pedido.get_valor_total() == 160.0


def test_nao_deve_permitir_pagar_um_pedido_sem_itens():
    pedido = Pedido(123, [])
    with pytest.raises(Exception):
        pedido.pagar()