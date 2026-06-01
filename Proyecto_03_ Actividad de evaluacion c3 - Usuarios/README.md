# Gestión de Usuarios - Sistema de Autenticación Base

## 1. Nombre del proyecto
**Sistema de Gestión y Control de Accesos de Usuarios en Python**

---

## 2. Objetivo del proyecto
El objetivo de este proyecto es implementar un sistema de administración de credenciales mediante el uso de **Herencia y Polimorfismo** en Python. Se busca modelar una jerarquía de clases donde subtipos específicos de usuarios compartan un comportamiento base pero ejecuten acciones particulares según su rol en el sistema a través de un menú interactivo por consola.

---

## 3. Problema que resuelve
En cualquier plataforma de software moderna, la gestión de roles y permisos es crucial para la seguridad. Mantener códigos separados para cada tipo de usuario genera duplicidad y dificulta el mantenimiento. 

Este proyecto resuelve la necesidad de **centralizar y estandarizar el control de cuentas** mediante:
* La reutilización de lógica común (nombre y correo electrónico) en una sola clase padre.
* La prevención de errores de registro mediante validaciones automáticas de datos en tiempo de ejecución (como verificar el formato del email).
* El procesamiento genérico de múltiples tipos de cuentas (Administradores, Clientes e Invitados) dentro de un mismo contenedor de datos.

---

## 4. Tecnologías utilizadas
* **Python 3.x:** Lenguaje de programación interpretado, utilizando su sintaxis limpia para la implementación de POO y tipado dinámico.
* **Consola / Terminal de comandos:** Entorno de ejecución interactivo para el usuario.
* **Git & GitHub:** Herramientas para el control de versiones del portafolio.

---

## 5. Conceptos aplicados (según temario)
* **Herencia (Clase Base y Clases Derivadas):** Creación de una clase padre `Usuario` de la cual heredan sus propiedades y métodos las clases hijas `Admin`, `Cliente` e `Invitado` utilizando la función `super().__init__()` para una correcta inicialización de atributos comunes.
* **Polimorfismo (Sobrescritura de Métodos):** Implementación del método `acceso_sistema()` en todas las clases. Aunque se invoca exactamente el mismo método dentro de un ciclo `for`, cada objeto responde de forma distinta según su tipo (ej. el administrador muestra su nivel de acceso y el cliente sus puntos acumulados).
* **Validación en Constructores (Encapsulamiento Lógico):** Uso de estructuras de control dentro del constructor `__init__` para lanzar excepciones de valor (`raise ValueError`) si los datos de entrada no cumplen con las reglas del negocio (como la presencia del carácter `@` en el email).
* **Inspección de Tipos en Tiempo de Ejecución:** Empleo de la función nativa `isinstance()` para verificar dinámicamente la clase a la que pertenece un objeto y determinar flujos lógicos en consecuencia dentro del menú interactivo.

---

## 6. Capturas de pantalla

### Ejecución de Opciones y Polimorfismo
<img width="545" height="457" alt="image" src="https://github.com/user-attachments/assets/8513e422-b353-44ec-a980-f7ccfbe84552" />

---

## 7. Instrucciones de ejecución
Para ejecutar este sistema en tu computadora, sigue estos pasos:

1. Asegúrate de tener **Python 3** instalado en tu sistema.
2. Descarga o clona los archivos manteniendo todos en el mismo directorio:
   * `usuario.py` (Clase base)
   * `admin.py`, `cliente.py`, `invitado.py` (Clases hijas)
   * `main.py` (Archivo ejecutable del menú)
3. Abre una terminal de comandos en la ruta de la carpeta.
4. Ejecuta el script principal con el comando:
   ```bash
   python main.py
## 8. Reflexión personal

* **¿Qué aprendí?**
  Aprendí a implementar los conceptos de herencia y polimorfismo en Python de manera limpia, comprendiendo cómo la función `super()` optimiza la inicialización de atributos heredados. También reforcé cómo el polimorfismo permite tratar a una colección de objetos diferentes bajo una misma interfaz común (mediante un ciclo `for`), lo cual reduce drásticamente las líneas de código repetitivo al invocar comportamientos específicos de cada rol.

* **¿Qué fue difícil?**
  El reto principal fue organizar el código de manera modular dividiéndolo en múltiples archivos y asegurar las correctas importaciones (`from ... import ...`). Al principio, coordinar las rutas para que el intérprete de Python no generara errores de módulos no encontrados al momento de acoplar todo en el archivo de ejecución del menú requirió bastante atención a los detalles.

* **¿Qué mejoraría?**
  Para escalar este proyecto, implementaría persistencia de datos guardando los usuarios en un archivo JSON o en una base de datos local como SQLite, ya que actualmente los objetos viven solo en la memoria RAM y se borran al cerrar el programa. También agregaría una funcionalidad en el menú interactivo para registrar usuarios nuevos de forma dinámica capturando los datos por teclado, en lugar de cargarlos de forma estática en el código fuente.
