# Plugin: pabcar-utilidades

## Descripción
Plugin de funcionalidades a medida desarrollado para la Práctica 4 de IAW. Contiene la lógica del sitio independiente del tema.

## Funcionalidades
- Añade caja de contacto al final de las entradas individuales (`the_content`).
- Genera el código corto `[anio]` para el año actual (`add_shortcode`).
- Oculta la versión de WordPress en la cabecera HTML (`wp_head`) y feeds RSS (`the_generator`).
- Personaliza la pantalla de acceso `wp-login.php` (logotipo, enlace y aviso).

## Requisitos y Dependencias
- WordPress 6.x o superior.
- PHP 8.2 o superior.

## Instalación
1. Colocar la carpeta dentro de `wp-content/plugins/`.
2. Activar el plugin desde **Plugins > Plugins instalados**.

