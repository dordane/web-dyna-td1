<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
  'DAO' => 'Ubiquity\\orm\\DAO',
  'Organization' => 'models\\Organization',
),
  '#traitMethodOverrides' => array (
  'controllers\\Organizations' => 
  array (
  ),
),
  'controllers\\Organizations' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "organizations")
  ),
  'controllers\\Organizations::index' => array(
    array('#name' => 'get', '#type' => 'Ubiquity\\annotations\\router\\GetAnnotation', "name"=>"orgas-index")
  ),
  'controllers\\Organizations::display' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "Organizations/2")
  ),
);

