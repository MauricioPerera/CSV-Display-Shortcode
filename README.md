# CSV Display Shortcode

## Descripción

Este plugin permite a los usuarios mostrar datos de un archivo CSV en una tabla HTML utilizando un shortcode. Los usuarios pueden especificar la URL del archivo CSV, las columnas que desean mostrar y los nombres de visualización para esas columnas. 

## Instalación

1. Descarga el archivo zip del plugin.
2. Ve a la sección de plugins de tu panel de WordPress.
3. Haz clic en "Añadir nuevo" y luego en "Subir plugin".
4. Selecciona el archivo zip del plugin y haz clic en "Instalar ahora".
5. Una vez instalado, haz clic en "Activar plugin".

## Uso

Para usar este plugin, simplemente añade el shortcode `csv_display` en cualquier post o página, con los siguientes atributos:

- `url`: La URL del archivo CSV que quieres mostrar.
- `columns`: Las columnas que quieres mostrar, separadas por comas.
- `display_names`: Los nombres que quieres que se muestren para las columnas, separados por comas.

Por ejemplo:

\`\`\`
[csv_display url="http://example.com/myfile.csv" columns="column1,column2,column3" display_names="Column 1,Column 2,Column 3"]
\`\`\`

Esto mostrará una tabla con los datos de las columnas `column1`, `column2` y `column3` del archivo CSV en `http://example.com/myfile.csv`, y los encabezados de las columnas serán "Column 1", "Column 2" y "Column 3", respectivamente.

## Características

- Exporta pedidos de WooCommerce a un archivo CSV.
- Permite seleccionar un rango de fechas para los pedidos a exportar.
- Permite descargar o eliminar los archivos CSV generados.
- Muestra los datos del CSV en una tabla HTML en cualquier post o página usando un shortcode.
- Permite seleccionar qué columnas mostrar y cómo nombrarlas.

## Soporte

Si tienes alguna pregunta o problema con el plugin, por favor [contacta conmigo](https://www.linkedin.com/in/mauricioperera/).

## Donaciones

Si encuentras útil este plugin y quieres apoyar mi trabajo, puedes [comprarme un café](https://www.buymeacoffee.com/rckflr).
