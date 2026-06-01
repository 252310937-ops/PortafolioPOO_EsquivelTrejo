# Importamos Usuario
from usuario import Usuario

# Clase Invitado
class Invitado(Usuario):

    # Constructor
    def __init__(self, nombre, email):

        super().__init__(nombre, email)

    # Sobrescribimos acceso_sistema
    def acceso_sistema(self):
        print("Invitado con acceso limitado")