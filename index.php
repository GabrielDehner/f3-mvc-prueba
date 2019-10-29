<?php

require 'vendor/autoload.php';

/**
 * Cargar Fat-Free Framework
 */
$f3 = Base::instance();

/**
 * Establecer configuraciones de archivos
 */
$f3->config('settings/config.ini');
$f3->config('settings/routes.ini');
//$f3->route('GET /ajax_edit/@id [ajax]','HomeController->ajax_edit');
//$f3->map('/ajax_edit','HomeController');

$f3->run();