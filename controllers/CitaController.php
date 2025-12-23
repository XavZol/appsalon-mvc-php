<?php

namespace Controllers;

use MVC\Router;


class CitaController
{
    public static function index(Router $router){
        // (Opcional) Verifica que la sesión esté iniciada

        isAuth();

        $router->render('cita/index', [
            'nombre' => $_SESSION['nombre'],  // <--- ESTA LÍNEA ES INDISPENSABLE
            'id' => $_SESSION['id'] ?? null
        ]);
    }
}