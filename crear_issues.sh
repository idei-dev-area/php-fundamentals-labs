#!/bin/bash

# Lista de juniors
juniors=(
    "Agüero, Micaela"
    "Brizuela, Mara"
    "Carrió, Fabricio"
    "Gaitán, Sergio"
    "Gallardo, Facundo"
    "Heredia, Rocío"
    "Lloret, Jorge"
    "Méndez, Miguel"
    "Ormeño, Emilio (as junior)"
    "Pastor, Mía"
    "Savall, Alejo"
    "Sevilla, Gustavo"
    "Varela, Martín"
    "Vivares, Baltazar"
)

echo "🚀 Iniciando creación de tareas individuales en GitHub..."

for alumno in "${juniors[@]}"; do
    echo "⚙️ Generando laboratorios para: $alumno"
    
    # Tarea Individual Lab 01
    gh issue create \
        --title "[$alumno] 🚀 Laboratorio 01: Sintaxis y Estructuras de Control" \
        --body "Desarrolla el Lab 01 en la carpeta lab01/. Recuerda usar tu rama local e incluir 'Closes' con el ID de este issue en tu Pull Request."
        
    # Tarea Individual Lab 02
    gh issue create \
        --title "[$alumno] 🚀 Laboratorio 02: Funciones y Control de Errores" \
        --body "Desarrolla el Lab 02 en la carpeta lab02/. Recuerda usar tu rama local e incluir 'Closes' con el ID de este issue en tu Pull Request."
        
    # Tarea Individual Lab 03
    gh issue create \
        --title "[$alumno] 🚀 Laboratorio 03: Introducción a la POO" \
        --body "Desarrolla el Lab 03 en la carpeta lab03/. Recuerda usar tu rama local e incluir 'Closes' con el ID de este issue en tu Pull Request."
done

echo "✅ ¡Todos los Issues individuales han sido creados en GitHub!"
