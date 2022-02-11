
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['task'] = "Task/index";
$route['task/create'] = "Task/create";
$route['task/edit'] = "Task/edit/$1";
$route['task/store'] = "Task/store";
$route['task/show'] = "Task/show/$1";
$route['task/update/(:any)'] = "Task/update/$1";
$route['task/delete'] = "Task/delete";
$route['add'] = "Opening/add";
$route['thank'] = "Task/thank";
