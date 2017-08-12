<?php

namespace App\Controllers;

class Controller
{
    public function view($name, $data = [])
    {
        $loader = new \Twig_Loader_Filesystem(
          __DIR__ . '/../../views'
        );

        $view = new\Twig_Environment($loader);

        echo $view->load($name . '.twig')->render($data);
    }
}