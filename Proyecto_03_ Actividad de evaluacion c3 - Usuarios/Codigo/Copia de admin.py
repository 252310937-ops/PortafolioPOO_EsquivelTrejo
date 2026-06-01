# Importamos la clase Usuario
from usuario import Usuario

# Clase Admin que hereda de Usuario
class Admin(Usuario):

    # Constructor
    def __init__(self, nombre, email, nivel_acceso):

        # Usamos super() para reutilizar el constructor
        super().__init__(nombre, email)

        self.nivel_acceso = nivel_acceso

    # Sobrescribimos el método acceso_sistema
    def acceso_sistema(self):
        print(f"Administrador con acceso nivel {self.nivel_acceso}")