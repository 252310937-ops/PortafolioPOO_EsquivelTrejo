# Examen Contra Reloj - Sistema de Logística Base

## 1. Nombre del proyecto
**Examen Contra Reloj: Modelado de Paquetes y Sensores en POO**

---

## 2. Objetivo del proyecto
El objetivo de esta actividad es demostrar el dominio práctico de los conceptos fundamentales de la **Programación Orientada a Objetos (POO)** en PHP bajo un entorno de tiempo limitado. Se busca modelar entidades del mundo real mediante clases, definir sus estados a través de atributos tipados y simular la instanciación e interacción de objetos en un script de ejecución.

---

## 3. Problema que resuelve
En el sector logístico, el control de inventario y el monitoreo de las condiciones de envío suelen gestionarse de forma desorganizada si no se cuenta con una estructura sólida. Este proyecto resuelve la necesidad de **digitalizar, estandarizar y proteger la información básica de una operación de transporte**, permitiendo:
* Registrar las propiedades esenciales de la mercancía (peso, fragilidad y códigos de seguimiento).
* Monitorear el estado del hardware de telemetría (sensores) encargado de vigilar que los rangos de operación sean seguros para los paquetes.

---

## 4. Tecnologías utilizadas
* **PHP 8.x:** Lenguaje de programación principal, aprovechando el soporte de tipado estricto en propiedades de clase.
* **Apache / XAMPP:** Servidor local para la ejecución del entorno de pruebas.
* **Git & GitHub:** Para el control de versiones y el despliegue del portafolio.

---

## 5. Conceptos aplicados (según temario)
* **Clases y Objetos:** Creación de las plantillas abstractas (`Paquete` y `Sensor`) y posterior instanciación de objetos independientes (`$paqueteA`, `$paqueteB`) en el archivo ejecutable.
* **Atributos y Tipado de Datos Fuertes:** Declaración explícita de tipos de datos en las propiedades de las clases (`string`, `float`, `bool`, `int` y objetos nativos como `DateTime`), garantizando la integridad de la información.
* **Encapsulamiento (Visibilidad de miembros):** * Uso de modificadores `public` para permitir el acceso directo a datos generales de logística.
  * Uso del modificador `private` (en la propiedad `$costoInterno` de la clase `Paquete`) para restringir el acceso externo y proteger datos sensibles del negocio.

---

## 6. Capturas de pantalla

### Ejecución y Resultados
*Salida del servidor local al procesar los objetos:*

<img width="338" height="162" alt="image" src="https://github.com/user-attachments/assets/3400d6f5-6dc9-46c8-bc42-32d15fde7772" />

---

## 7. Instrucciones de ejecución
Para correr este proyecto de forma local, sigue estos pasos:

1. **Copiar la carpeta** completa del proyecto dentro del directorio de despliegue de tu servidor local (ej. `C:/xampp/htdocs/examen-contra-reloj/`).
2. **Iniciar el servidor Apache** desde el Panel de Control de XAMPP.
3. **Abrir el navegador web** de tu preferencia.
4. **Ingresar a la URL** del proyecto: `http://localhost/examen-contra-reloj/index.php`.
5. Verficar que aparezca el mensaje de confirmación en pantalla.

---

## 8. Reflexión personal

* **¿Qué aprendí?**
  Aprendí a estructurar de manera rápida y eficiente clases en PHP utilizando tipado estricto. También reforcé la importancia de organizar el código dividiendo las responsabilidades en archivos separados (`Paquete.php`, `sensor.php`) y cómo unificarlos mediante directivas de inclusión (`require_once`).

* **¿Qué fue difícil?**
  Lo más retador fue trabajar bajo la presión del tiempo ("Contra Reloj"), lo cual exige mucha precisión mental para evitar errores sintácticos al instanciar objetos o invocar propiedades en PHP, especialmente al recordar la sintaxis del operador flecha (`->`).

* **¿Qué mejoraría?**
  Para una versión más robusta, implementaría un **método constructor (`__construct`)** en ambas clases para inicializar los atributos de manera limpia en una sola línea. Asimismo, desarrollaría métodos *Getters* y *Setters* para manipular la propiedad privada `$costoInterno`, aplicando así las mejores prácticas del encapsulamiento.
