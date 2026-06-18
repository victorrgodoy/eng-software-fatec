class Livro:
    def __init__(self, id: int, titulo: str, disponivel: bool = True):
        self.__id = id
        self.__titulo = titulo
        self.__disponivel = disponivel

    def get_id(self) -> int:
        return self.__id

    def get_titulo(self) -> str:
        return self.__titulo

    def is_disponivel(self) -> bool:
        return self.__disponivel