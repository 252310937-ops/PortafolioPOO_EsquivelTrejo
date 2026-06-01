# Arreglos Unidimensionales - Registro de Productos

## 1. Nombre del proyecto
**Sistema Modular de Registro y Análisis Estadístico de Inventario de Productos**

---

## 2. Objetivo del proyecto
El objetivo de este proyecto es implementar una aplicación web en PHP que demuestre el dominio en el uso y manipulación de **Arreglos Unidimensionales** y el paso de datos entre scripts a través del método HTTP POST. Se busca recolectar información estructurada mediante arreglos nativos en un formulario web, procesarla con funciones estadísticas y renderizar dinámicamente los resultados en una vista independiente.

---

## 3. Problema que resuelve
En sistemas básicos de facturación o gestión comercial, la captura de múltiples ítems de forma individual puede saturar el manejo de variables si no se emplean estructuras de datos correctas. 

Este proyecto resuelve la centralización del procesamiento de datos en lote mediante:
* La captura agrupada de múltiples registros utilizando una misma variable indexada (`producto[]` y `precio[]`).
* La automatización de cálculos de control comercial sin recurrir a una base de datos pesada, tales como sumatorias totales, cálculo de promedios de precios y la identificación algorítmica de valores críticos en el inventario (el producto con mayor y menor costo).

---

## 4. Tecnologías utilizadas
* **PHP 8.x:** Lenguaje del lado del servidor utilizado para la captura de datos por formularios, procesamiento lógico y renderizado de tablas.
* **HTML5 y CSS Estructural:** Creación del formulario de registro y de la interfaz de presentación de tablas de inventario.
* **Apache / XAMPP:** Servidor local para ejecutar e interpretar el código PHP.

---

## 5. Conceptos aplicados (según temario)
* **Arreglos Unidimensionales Dinámicos:** Declaración e inserción de datos en arreglos a través del atributo `name="variable[]"` en un formulario HTML, permitiendo que PHP reciba listas indexadas.
* **Funciones Nativas para Arreglos:** Implementación de herramientas de optimización nativas de PHP como `array_sum()` para la acumulación rápida del total de ventas, `max()` y `min()` para encontrar extremos numéricos, y `array_search()` para mapear las posiciones de los valores e identificar a qué producto corresponden.
* **Modularidad y Separación de Responsabilidades:** Estructuración limpia del software dividiendo el flujo en tres partes esenciales: Entrada (`index.php`), Controlador lógico (`procesar.php`) y Vista de salida (`resultados.php`) mediante la directiva de inclusión `include()`.

---

## 6. Capturas de pantalla

### Ejecución y Tabla de Resultados
<img width="502" height="267" alt="image" src="https://github.com/user-attachments/assets/19cbc2a6-d8d0-4550-a14d-28ae034f1bea" />


---

## 7. Instrucciones de ejecución
Para ejecutar este proyecto en tu entorno local, sigue estos pasos:

1. **Copiar la carpeta** completa del proyecto dentro del directorio de despliegue de tu servidor (ej. `C:/xampp/htdocs/arreglos-unidimensionales/`).
2. Asegurar que los tres archivos se mantengan en la raíz de dicha carpeta:
   * `index.php` (Formulario de inicio)
   * `procesar.php` (Lógica de control)
   * `resultados.php` (Plantilla de presentación)
3. **Iniciar el módulo Apache** desde tu panel de control XAMPP.
4. **Abrir tu navegador web** e ingresar a la URL: `http://localhost/arreglos-unidimensionales/index.php`.
5. Rellenar los campos obligatorios de los productos y presionar **Procesar Inventario**.

---

## 8. Reflexión personal

* **¿Qué aprendí?**
  Aprendí a manejar colecciones de datos enviadas desde formularios HTML estructurándolas como arreglos indexados en PHP. También comprendí el potencial que tienen las funciones integradas como `array_sum()` y `array_search()` para realizar analítica de datos simple de forma rápida sin escribir bucles iterativos complejos.

* **¿Qué fue difícil?**
  Lo más retador fue sincronizar correctamente los índices entre los dos arreglos diferentes (`$productos` y `$precios`). Al buscar el precio máximo o mínimo, la función devuelve el valor numérico, por lo que tuve que idear cómo recuperar el índice de esa posición para extraer de forma exacta el nombre del producto correspondiente en el otro arreglo.

* **¿Qué mejoraría?**
  Para mejorar el proyecto, cambiaría la interfaz fija de 5 productos por un diseño dinámico utilizando JavaScript que permita al usuario agregar o remover filas en el formulario según sus necesidades. Además, implementaría Programación Orientada a Objetos creando una clase `Producto` y una clase `Inventario` para encapsular las operaciones matemáticas y no dejar el código estructurado de manera puramente lineal.
