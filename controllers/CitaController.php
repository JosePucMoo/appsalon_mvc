<?php

namespace Controllers;
use MVC\Router;

class CitaController {
    public static function index(Router $router) {

        isAuth();

        $router->render("cita/index", [
            'id' => $_SESSION['id'],
            'nombre' => $_SESSION['nombre']
        ]);
    }  
}
