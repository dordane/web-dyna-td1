<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
  'Controller' => 'Ubiquity\\controllers\\Controller',
  'URequest' => 'Ubiquity\\utils\\http\\URequest',
  'UCookie' => 'Ubiquity\\utils\\http\\UCookie',
  'UResponse' => 'Ubiquity\\utils\\http\\UResponse',
  'DAO' => 'Ubiquity\\orm\\DAO',
  'Inscription' => 'models\\Inscription',
),
  '#traitMethodOverrides' => array (
  'controllers\\InscriptionController' => 
  array (
  ),
),
  'controllers\\InscriptionController::index' => array(
    array('#name' => 'get', '#type' => 'Ubiquity\\annotations\\router\\GetAnnotation', "_default","name"=>"Home")
  ),
  'controllers\\InscriptionController::doinscription' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "do/inscription")
  ),
  'controllers\\InscriptionController::inscription' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "inscription")
  ),
  'controllers\\InscriptionController::inscriptions' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "inscriptions")
  ),
);

