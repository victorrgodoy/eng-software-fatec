from app.usuario import Usuario
from app.livro import Livro

class Emprestimo:
    def __init__(self, id: int, usuario: Usuario, livro: Livro):
        self.__id = id
        self.__usuario = usuario
        self.__livro = livro

    def get_id(self) -> int:
        return self.__id

    def get_usuario(self) -> Usuario:
        return self.__usuario

    def get_livro(self) -> Livro:
        return self.__livro