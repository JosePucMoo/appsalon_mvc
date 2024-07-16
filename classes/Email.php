<?php

namespace Classes;
use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $token;

    public function __construct($nombre, $email, $token) {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }   

    public function enviarConfirmacion() {
        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = $_ENV['email.default.hostname'];
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = $_ENV['email.default.port'];
        $phpmailer->Username = $_ENV['email.default.username'];
        $phpmailer->Password = $_ENV['email.default.password'];

        $phpmailer->setFrom('cuentas@appsalon.com');
        $phpmailer->addAddress('cuentas@appsalon.com', 'Appsalon.com');
        $phpmailer->Subject = 'Confirma tu cuenta';

        $phpmailer->isHTML(true);
        $phpmailer->CharSet = "UTF-8";

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has creado tu cuenta en App salon, solo debes confirmarla presionando el siguiente enlace</p>";
        $contenido .= "<p>Presiona aquí: <a href='" . $_ENV['app.baseURL'] ."/confirmar-cuenta?token=". $this->token ."'>Confirmar cuenta</a></p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
        $contenido .= "</html>";

        $phpmailer->Body = $contenido;

        $phpmailer->send();
    }

    public function enviarInstrucciones() {
        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = $_ENV['email.default.hostname'];
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = $_ENV['email.default.port'];
        $phpmailer->Username = $_ENV['email.default.username'];
        $phpmailer->Password = $_ENV['email.default.password'];

        $phpmailer->setFrom('cuentas@appsalon.com');
        $phpmailer->addAddress('cuentas@appsalon.com', 'Appsalon.com');
        $phpmailer->Subject = 'Restablece tu password';

        $phpmailer->isHTML(true);
        $phpmailer->CharSet = "UTF-8";

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has solicitado restablecer tu password, sigue el siguiente enlace para hacerlo</p>";
        $contenido .= "<p>Presiona aquí: <a href='" . $_ENV['app.baseURL'] ."/recuperar?token=". $this->token ."'>Restablecer password</a></p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
        $contenido .= "</html>";

        $phpmailer->Body = $contenido;

        $phpmailer->send();
    }
}