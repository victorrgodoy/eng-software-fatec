from __future__ import annotations
from typing import TYPE_CHECKING

if TYPE_CHECKING:
    from emprestimo import Emprestimo


class Usuario:
    def __init__(self, id: int, nome: str):
        self.__id = id
        self.__nome = nome
        self.__emprestimos: list[Emprestimo] = []

    def get_id(self) -> int:
        return self.__id

    def get_nome(self) -> str:
        return self.__nome

    def get_emprestimos(self) -> list[Emprestimo]:
        return self.__emprestimos

    def add_emprestimo(self, emprestimo: Emprestimo) -> None:
        self.__emprestimos.append(emprestimo)