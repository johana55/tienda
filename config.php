
<?php
/**
 * Archivo de configuracion global
 */
// instanciamos la clase singleton
$config = Config::singleton();

// parametros de configuracion para el mvc
$config->set('controllers', 'controllers/');
$config->set('views', 'views/');
$config->set('models', 'models/');

$config->set('dbhost', 'localhost');
$config->set('dbname', 'sistema');
$config->set('dbuser', 'root');
$config->set('dbport','3306');
$config->set('dbpass', '123');
$config->set('url','http://localhost/tienda/');
$config->set('imagenruta','imagenes/producto/');
