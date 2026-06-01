# Clase base Usuario

class Usuario:

    # Constructor de la clase
    def __init__(self, nombre, email):

        # Validación básica del email
        if "@" not in email:
            raise ValueError("El email no es válido")

        self.nombre = nombre
        self.email = email

    # Método para mostrar datos del usuario
    def mostrar_datos(self):
        print(f"Nombre: {self.nombre}")
        print(f"Email: {self.email}")

    # Método general de acceso al sistema
    def acceso_sistema(self):
        print("Acceso básico al sistema")

    # Método saludar
    def saludar(self):
        print(f"Hola, bienvenido {self.nombre}")