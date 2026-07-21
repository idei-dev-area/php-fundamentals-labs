# 🚀 Taller de Fundamentos de PHP - idei-dev-area

¡Bienvenidos al proyecto práctico de fundamentos de PHP! Este repositorio servirá como entorno de simulación real para consolidar las bases del lenguaje y dominar el flujo de trabajo profesional en equipo usando Git y GitHub.

*   **Duración:** 1 Semana
*   **Audiencia:** 12 Juniors / 3 Technical Leaders (TL)

---

## 👥 Asignación de Equipos y Code Reviewers

Para asegurar un feedback rápido y de alta calidad, cada **Technical Leader** tiene asignado un grupo fijo de desarrolladores para realizar las revisiones de código (*Code Reviews*):

| 🥇 Lider Técnico (TL) | 🧑‍💻 Desarrolladores Juniors Asignados |
| :--- | :--- |
| **TL 1** | Junior 1, Junior 2, Junior 3, Junior 4 |
| **TL 2** | Junior 5, Junior 6, Junior 7, Junior 8 |
| **TL 3** | Junior 9, Junior 10, Junior 11, Junior 12 |

*(Nota: Coordinador, por favor reemplaza estos marcadores por los nombres reales de tu equipo).*

---

## 🗺️ Cronograma del Taller

*   **Día 1:** Kick-off general, clonación del repositorio y **Laboratorio 01** (Sintaxis y Estructuras de Control).
*   **Día 3:** Entrega de Lab 01 y lanzamiento del **Laboratorio 02** (Funciones y Tipado Estricto).
*   **Día 5:** Entrega de Lab 02 y lanzamiento del **Laboratorio 03** (Fundamentos de POO).
*   **Día 7:** Cierre del proyecto, retrospectiva y feedback final de los TLs.

---

## ⚙️ Flujo de Trabajo Obligatorio (Gitflow Educativo)

Para trabajar de forma organizada sin pisar el código de los demás, todos los juniors deben seguir estrictamente estos pasos en cada laboratorio:

### 1. Preparar el entorno local
Antes de empezar cualquier tarea, asegúrate de tener tu repositorio actualizado con los últimos cambios aprobados:
```bash
git checkout main
git pull
```

### 2. Crear una rama de trabajo
Nunca trabajes directamente sobre la rama `main`. Crea una rama propia usando la siguiente nomenclatura (`junior/tu-nombre-labXX`):
```bash
git checkout -b junior/juan-lab01
```

### 3. Desarrollar y subir el código
Escribe tu solución dentro del archivo correspondiente (ej. `lab01/ejercicio.php`). Cuando termines, guarda tus cambios y súbelos a GitHub:
```bash
git add lab01/ejercicio.php
git commit -m "feat: completar ejercicios del laboratorio 01"
git push origin junior/juan-lab01
```

### 4. Abrir un Pull Request (PR)
1. Ve a la interfaz web de este repositorio en GitHub.
2. Verás un botón amarillo que dice **"Compare & pull request"**, haz clic en él.
3. En la descripción del PR, escribe obligatoriamente `Closes #ID_DEL_ISSUE` (ejemplo: `Closes #1`) para vincularlo a tu tarea.
4. En el panel derecho, en la sección **Reviewers**, asigna rigurosamente a tu **Technical Leader** encargado.

---

## 🛡️ Reglas de Oro para los Juniors
*   **Código Limpio:** Respeta el estándar de formato PSR-12. Usa nombres de variables descriptivos y en español/inglés uniforme.
*   **Prohibido el Push Directo:** La rama `main` está protegida. Ningún cambio puede entrar sin la aprobación previa de un TL.
*   **Feedback Constructivo:** Si tu TL te deja comentarios de corrección en el Pull Request, realiza los ajustes en tu computadora, haz un nuevo `git commit` y `git push` en tu misma rama. El PR se actualizará automáticamente.
