# PAUTAS COLABORATIVAS

## Pre - requisitos

- Poder usar github en entorno
- Tener preparada la base de datos

## Flujo de trabajo de desarrollo

1. Haz un fork del repositorio

    1. Accede a Github
    2. Busca el repositorio al que quieres contribuir
    3. En la esquina superior derecha de la página del repositorio, encontrarás un botón que dice Fork. Haz click en él
    4. Ahora tienes una copia del repositorio original en tu cuenta, ubicada en una URL similar a esta:

    > https://github.com/tu-usuario/nombre-del-repo
    
2. Clona tu fork

    1. En la página de tu fork, haz clic en el botón Code y copia la URL (HTTPS, SSH o GitHub CLI)
    2. Ve al directorio donde deseas clonar el repositorio
    3. Ejecuta el comando git clone

    > git clone https://github.com/tu-usuario/nombre-del-repo.git

    4. Accede al directorio clonado

    > cd nombre-del-repo

3. Crea una rama para tu cambio

    > git checkout -b mi-nueva-funcionalidad

4. Haz tus cambios y commitéalos

    > git commit -m "Descripción breve del cambio"

5. Sube tu rama al repositorio remoto

    > git push origin mi-nueva-funcionalidad

6. Crea un pull request desde tu fork

    1. Ve a la página de tu fork en GitHub. La URL será algo como:

        > https://github.com/tu-usuario/nombre-del-repo
    
    2. Haz clic en "Compare & pull request"
        - Si acabas de subir tus cambios, en la página de tu fork debería aparecer un botón "Compare & pull request"
        - Si no ves el botón:
            - Ve a la pestaña Pull Requests de tu fork.
            - Haz clic en "New pull request".
    
    3. Configura las ramas:

        - Base repository: Repositorio original (donde quieres contribuir)
        - Base branch: La rama principal del repositorio original (a menudo llamada main o master).
        - Head repository: Tu fork
        - Compare branch: La rama de tu fork donde hiciste los cambios

    4. Escribe un título y una descripción para el Pull Request

        - Título: Breve y descriptivo
        - Descripción: Explica qué cambios hiciste, por qué son necesarios y cómo afectan al proyecto
    
    5. Crea el Pull Request
        - Haz clic en el botón "Create pull request"