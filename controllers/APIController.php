<?php

namespace Controllers;
use Model\Cita;
use Model\CitaServicio;
use Model\Servicio;

class APIController {
    public static function index() {
        $servicios = Servicio::all();
        echo json_encode($servicios);
    }

    public static function guardar() {
        
        // Almacena la Cita y devuelve el ID
        $cita = new Cita($_POST);
        $resultado = $cita->guardar();

        $id = $resultado['id'];

        // Almacena la Cita y el Servicio

        // Almacena los Servicios con el ID de la Cita
        $idServicios = explode(",", $_POST['servicios']);
        
        for ($i = 0; $i < count($idServicios); $i++) {
            $args = [
                'citaId' => $id,
                'servicioId' => $idServicios[$i]
            ];
            $citaServicio = new CitaServicio($args);
            $citaServicio->guardar();
        }

        echo json_encode(['resultado' => $resultado]);
    }

    public static function eliminar() {
        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $idCita = $_POST['id'];
            $cita = Cita::find($idCita);
            $cita->eliminar();

            header('Location:' . $_SERVER['HTTP_REFERER']);
        }
    }

}