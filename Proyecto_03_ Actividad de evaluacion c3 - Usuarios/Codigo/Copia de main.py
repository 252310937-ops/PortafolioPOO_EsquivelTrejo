# Importamos las clases
from admin import Admin
from cliente import Cliente
from invitado import Invitado

# Lista para almacenar usuarios
usuarios = []

# Creamos objetos
admin1 = Admin("Pedro", "pedro@gmail.com", "Total")
cliente1 = Cliente("Cecilia", "cecilia@gmail.com", 150)
invitado1 = Invitado("Angel", "angel@gmail.com")

# Agregamos los usuarios a la lista
usuarios.append(admin1)
usuarios.append(cliente1)
usuarios.append(invitado1)

# Menú interactivo
while True:

    print("\n===== SISTEMA DE USUARIOS =====")
    print("1. Mostrar usuarios")
    print("2. Saludar usuarios")
    print("3. Ver nivel de acceso")
    print("4. Salir")

    opcion = input("Selecciona una opción: ")

    # Mostrar información de usuarios
    if opcion == "1":

        print("\n--- LISTA DE USUARIOS ---")

        # Polimorfismo recorriendo lista
        for usuario in usuarios:

            usuario.mostrar_datos()
            usuario.acceso_sistema()
            print("------------------------")

    # Saludar usuarios
    elif opcion == "2":

        print("\n--- SALUDOS ---")

        for usuario in usuarios:
            usuario.saludar()

    # Nueva función para ver niveles de acceso
    elif opcion == "3":

        print("\n--- NIVELES DE ACCESO ---")

        for usuario in usuarios:

            print(f"\nUsuario: {usuario.nombre}")

            # Verificamos el tipo de usuario
            if isinstance(usuario, Admin):
                print("Nivel de acceso: Administrador Total")

            elif isinstance(usuario, Cliente):
                print("Nivel de acceso: Cliente Registrado")

            elif isinstance(usuario, Invitado):
                print("Nivel de acceso: Acceso Limitado")

    # Salir del sistema
    elif opcion == "4":

        print("Programa finalizado")
        break

    else:
        print("Opción no válida")