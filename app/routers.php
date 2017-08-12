<?php

$router->get('/home', 'HomeController@index');
$router->post('/tareas', 'HomeController@tareas');