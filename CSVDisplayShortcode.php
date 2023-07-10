<?php
/*
Plugin Name: CSV Display Shortcode
Plugin URI: https://rckflr.party/
Description: Este plugin permite a los usuarios mostrar datos de un archivo CSV en una tabla HTML utilizando un shortcode. Los usuarios pueden especificar la URL del archivo CSV, las columnas que desean mostrar y los nombres de visualización para esas columnas.
Version: 1.0
Author: Mauricio Perera
Author URI: https://www.linkedin.com/in/mauricioperera/
Donate link: https://www.buymeacoffee.com/rckflr
*/

function csv_display_shortcode($atts) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'columns' => '',
            'display_names' => '',
        ), 
        $atts,
        'csv_display'
    );

    $csv_data = file_get_contents($atts['url']);
    $lines = str_getcsv($csv_data, "\n");
    $columns = array_map('trim', explode(',', $atts['columns']));
    $display_names = array_map('trim', explode(',', $atts['display_names']));

    $output = "<div id='csv-display-container' class='csv-display-container' style='overflow-x: auto;'>\n";
    $output .= "<table id='csv-display-table' class='csv-display-table'>\n";

    $header = str_getcsv(array_shift($lines));
    $output .= "<tr class='csv-display-header-row'>";
    foreach ($header as $index => $cell) {
        if (in_array($cell, $columns)) {
            if (isset($display_names[$index])) {
                $display_name = $display_names[$index];
            } else {
                $display_name = $cell;
            }
            $output .= "<th class='csv-display-header-cell'>" . htmlspecialchars($display_name) . "</th>";
        }
    }
    $output .= "</tr>\n";

    foreach ($lines as $line) {
        $row = str_getcsv($line);
        $output .= "<tr class='csv-display-data-row'>";
        foreach ($row as $index => $cell) {
            if (isset($header[$index]) && in_array($header[$index], $columns)) {
                $output .= "<td class='csv-display-data-cell'>" . htmlspecialchars($cell) . "</td>";
            }
        }
        $output .= "</tr>\n";
    }

    $output .= "</table>\n";
    $output .= "</div>";

    return $output;
}

add_shortcode('csv_display', 'csv_display_shortcode');
?>
