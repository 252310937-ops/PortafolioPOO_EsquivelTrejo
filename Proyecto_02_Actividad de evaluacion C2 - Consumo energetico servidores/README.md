# Consumo Energético Servidores - Monitor Energético

## 1. Nombre del proyecto
**Monitor Energético: Cálculo de Consumo en Servidores mediante Integración Numérica**

---

## 2. Objetivo del proyecto
El objetivo de este proyecto es desarrollar una aplicación web interactiva en PHP aplicando los conceptos fundamentales de la **Programación Orientada a Objetos (POO)**, la gestión de espacios de nombres (**Namespaces**) y el manejo de excepciones. La aplicación calcula el consumo energético total de un servidor mediante el método numérico de la regla del trapecio, procesando una función continua de potencia a lo largo del tiempo.

---

## 3. Problema que resuelve
En los centros de datos (Data Centers), el consumo de energía fluctúa constantemente según la carga de trabajo de los servidores, haciendo que medir el gasto total sea una tarea compleja si solo se toman lecturas aisladas. 

Este proyecto resuelve la necesidad de **estimar con alta precisión la energía total consumida (en Joules y Kilovatios-hora, kWh)** a partir de una función matemática de potencia transcurrida entre dos puntos de tiempo. El sistema permite:
* Prevenir errores de cálculo validando que los rangos de tiempo ingresados sean lógicos.
* Comparar de forma dinámica cómo la precisión del cálculo (número de intervalos $n$) influye directamente en la exactitud del resultado final.

---

## 4. Tecnologías utilizadas
* **PHP 8.x:** Lenguaje del lado del servidor para procesar la lógica matemática mediante POO.
* **HTML5 y CSS3:** Estructuración y diseño de una interfaz de usuario moderna, utilizando técnicas como fondos animados (`@keyframes`) y efectos visuales de desenfoque (`backdrop-filter`).
* **Apache / XAMPP:** Entorno de servidor local para la ejecución del proyecto.

---

## 5. Conceptos aplicados (según temario)
* **Encapsulamiento y Visibilidad:** Propiedades estrictamente privadas (`$inicio`, `$fin`, `$pasos`) y métodos ocultos (`funcionPotencia`) dentro de la clase, exponiendo únicamente la interfaz pública necesaria a través del constructor y el método de cálculo.
* **Namespaces (Espacios de Nombres):** Organización profesional del código mediante el uso de `namespace App\Calculo;`, evitando colisiones de nombres y estructurando el proyecto de forma escalable.
* **Métodos Constructores con Parámetros Opcionales:** Implementación de un constructor que inicializa el estado del objeto y asigna un valor por defecto al parámetro de precisión (`$n = 1000`).
* **Manejo de Excepciones (`Try-Catch`):** Implementación de robustez de software mediante el lanzamiento de excepciones (`throw new Exception`) si se introducen datos erróneos (por ejemplo, si el tiempo inicial es mayor o igual al final, o si la precisión es menor o igual a cero).

---

## 6. Capturas de pantalla

### Ejecución y Resultados
*Despliegue del resultado calculado y la tabla comparativa de precisión:*
<img width="704" height="622" alt="image" src="https://github.com/user-attachments/assets/51e1618f-2835-4b5d-a2f6-5f601e0b6f35" />



---

## 7. Instrucciones de ejecución
Para correr este proyecto en tu entorno local, sigue estas instrucciones:

1. **Copiar la carpeta** del proyecto completa dentro del directorio de tu servidor local (ej. `C:/xampp/htdocs/monitor-energetico/`).
2. Asegurarte de mantener la estructura interna de archivos:
   * El archivo principal `index.php` en la raíz.
   * La clase en `src/Calculo/IntegradorNumerico.php`.
   * Los estilos visuales en `css/style.css`.
3. **Iniciar el módulo Apache** desde el panel de control de XAMPP.
4. **Abrir tu navegador** e ingresar a la URL: `http://localhost/monitor-energetico/index.php`.
5. Probar el sistema ingresando un tiempo inicial, un tiempo final y dar clic en **Calcular**.

---

## 8. Reflexión personal

* **¿Qué aprendí?**
  Aprendí a integrar de forma limpia la lógica dura de programación orientada a objetos en PHP con una interfaz gráfica web dinámica en HTML/CSS. También comprendí de manera práctica cómo los *Namespaces* ayudan a mantener el código ordenado bajo estándares profesionales (similares a los que se usan en frameworks como Laravel) y cómo capturar errores usando bloques `try-catch` para que la aplicación no sufra caídas inesperadas ante datos inválidos.

* **¿Qué fue difícil?**
  Lo más desafiante fue traducir el algoritmo matemático de integración numérica (Regla del Trapecio) a un ciclo iterativo (`for`) en código limpio, asegurando que las variables acumularan los valores de la función de manera correcta paso por paso sin alterar la precisión del cálculo.

* **¿Qué mejoraría?**
  Mejoraría el sistema permitiendo que la función matemática (`funcionPotencia`) no esté "cableada" (fija) dentro del código, sino que el usuario pueda elegir diferentes tipos de curvas de potencia desde la interfaz gráfica. También implementaría validaciones del lado del cliente con JavaScript para dar feedback inmediato antes de procesar el formulario en el servidor.
