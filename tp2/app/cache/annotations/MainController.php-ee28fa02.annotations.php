<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
  'AbstractWsController' => 'ws\\controllers\\AbstractWsController',
),
  '#traitMethodOverrides' => array (
  'controllers\\MainController' => 
  array (
  ),
),
  'controllers\\MainController::index' => array(
    array('#name' => 'get', '#type' => 'Ubiquity\\annotations\\router\\GetAnnotation', "_default","name"=>"Home")
  ),
  'controllers\\MainController::contactForm' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "MainController/contact","methods"=>["get"],"name"=>"Contact")
  ),
  'controllers\\MainController::partnersList' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "MainController/partnerslist","methods"=>["get"],"name"=>"Partners")
  ),
  'controllers\\MainController::partnerDetails' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "MainController/partner/{name}","methods"=>["get"])
  ),
  'controllers\\MainController::sendMessage' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "MainController/sendMessage","methods"=>["post"])
  ),
);

