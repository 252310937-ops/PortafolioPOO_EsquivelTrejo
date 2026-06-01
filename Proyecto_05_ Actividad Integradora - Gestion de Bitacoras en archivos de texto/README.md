# Gestión de Bitácoras en Archivos de Texto

## 1. Nombre del proyecto
**Sistema Web de Gestión, Persistencia y Sanitización de Bitácoras de Actividades**

---

## 2. Objetivo del proyecto
El objetivo de este proyecto es implementar una aplicación web monolítica en PHP que demuestre el dominio en el control de flujos de datos y la **persistencia en sistemas de archivos locales (`I/O`)**. La aplicación permite capturar registros de eventos mediante un formulario, procesar y validar las entradas bajo reglas estrictas de seguridad (sanitización), persistirlas en un archivo plano (`.txt`) y renderizar el histórico acumulado en tiempo real.

---

## 3. Problema que resuelve
En entornos de administración o desarrollo de software, auditar quién hace qué y en qué momento suele requerir bases de datos relacionales complejas, lo que resulta ineficiente para registros rápidos o de contingencia. 

Este proyecto resuelve la necesidad de un **mecanismo ligero y portátil de auditoría interna** mediante:
* El almacenamiento persistente no volátil de actividades sin dependencias de sistemas gestores de bases de datos (RDBMS).
* La protección del servidor contra ataques de inyección de código (XSS) al procesar textos introducidos por usuarios externos.
* El acceso inmediato a los reportes acumulados de forma secuencial y legible tanto para humanos como para scripts de lectura.

---

## 4. Tecnologías utilizadas
* **PHP 8.x:** Procesamiento lógico de solicitudes HTTP POST, validación de variables, persistencia y lectura nativa de ficheros planos.
* **HTML5 y CSS Interno:** Estructuración de la interfaz interactiva y diseño del formulario con estados visuales semánticos para aciertos y errores.
* **File System (bitacora.txt):** Base de datos plana para el almacenamiento persistente de los registros.

---

## 5. Conceptos aplicados (según temario)
* **Manipulación de Archivos de Texto (Persistencia Plana):** Empleo de la función `file_put_contents()` con la bandera `FILE_APPEND` para añadir nuevos bloques de texto al final del archivo sin sobreescribir el contenido previo, y `file_get_contents()` acoplado a `file_exists()` para la lectura segura del histórico.
* **Sanitización y Seguridad de Datos:** Aplicación de `htmlspecialchars()` para neutralizar caracteres especiales de HTML/JavaScript, previniendo vulnerabilidades Cross-Site Scripting (XSS), junto con `trim()` para limpiar espacios en blanco innecesarios.
* **Validación de Datos en el Servidor:** Implementación de la condicional lógica `empty()` para garantizar que ninguna actividad sea registrada si carece de parámetros obligatorios (descripción, responsable o fecha).
* **Renderización Condicional Dinámica:** Uso de bloques contenedores `<pre>` para respetar los saltos de línea (`\n`) nativos del archivo plano al momento de imprimir el historial en pantalla.

---

## 6. Capturas de pantalla

### Despliegue de Registros y Éxito

<img width="526" height="511" alt="image" src="https://github.com/user-attachments/assets/4e444683-b04e-413f-8bc1-707be9bd6dd9" />


---

## 7. Instrucciones de ejecución
Para correr este proyecto localmente, sigue estos pasos:

1. **Copiar la carpeta** completa del proyecto en el directorio raíz de tu servidor local (ej. `C:/xampp/htdocs/gestion-bitacoras/`).
2. Asegúrate de que el archivo principal `index.php` se encuentre en la raíz de dicha ubicación.
3. **Iniciar el servicio de Apache** desde el Panel de Control de XAMPP.
4. **Abrir tu navegador de preferencia** e ingresar a la dirección web: `http://localhost/gestion-bitacoras/index.php`.
5. Llena el formulario con los datos correspondientes y haz clic en **Guardar Actividad**.
6. *(Opcional)* Verifica la creación automática del archivo `bitacora.txt` dentro de la carpeta del proyecto en tu explorador de archivos.

---

## 8. Reflexión personal

* **¿Qué aprendí?**
  Aprendí a implementar persistencia de datos ligera y directa en el disco duro del servidor utilizando PHP sin requerir de SQL o bases de datos complejas. Comprendí el rol fundamental de funciones como `htmlspecialchars()` para mitigar brechas de seguridad cuando se procesan entradas de texto que se van a renderizar de vuelta en el navegador.

* **¿Qué fue difícil?**
  Lo más desafiante fue estructurar de manera óptima la cadena de texto (`$registro`) con secuencias de escape de salto de línea (`\n`) y delimitadores visuales. Era crítico asegurar que cada inserción mantuviera un formato estandarizado para evitar que el bloque `<pre>` rompiera el diseño visual o encimara las actividades registradas.

* **¿Qué mejoraría?**
  Para robustecer la aplicación, añadiría una funcionalidad de paginación o un filtro de búsquedas por fecha o por responsable para no saturar la pantalla cuando el archivo `bitacora.txt` crezca considerablemente. Adicionalmente, implementaría una directiva de seguridad en Apache (`.htaccess`) para denegar el acceso web directo al archivo `.txt` y evitar filtraciones de información sensible.
