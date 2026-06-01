# Importamos Usuario
from usuario import Usuario

# Clase Cliente
class Cliente(Usuario):

    # Constructor
    def __init__(self, nombre, email, puntos):

        # Reutilizamos constructor padre
        super().__init__(nombre, email)

        self.puntos = puntos

    # Sobrescribimos acceso_sistema
    def acceso_sistema(self):
        print(f"Cliente con {self.puntos} puntos acumulados")