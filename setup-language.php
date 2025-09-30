<?php
// setup-language.php - Script para instalar idioma
if (file_exists('es_AR.phar')) {
    echo "Instalando idioma español...\n";
    system('php es_AR.phar --install');
    echo "Idioma instalado correctamente.\n";
} else {
    echo "Error: Archivo es_AR.phar no encontrado.\n";
}
?>