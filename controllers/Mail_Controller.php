<?php

require_once 'vendor/autoload.php';
require_once 'auth/Auth.php';
require "vendor/phpmailer/phpmailer/src/Exception.php";
require "vendor/phpmailer/phpmailer/src/PHPMailer.php";
require "vendor/phpmailer/phpmailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;

//use PHPMailer\PHPMailer;

class Mail_Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
        $this->view->resultadoLogin = "";
    }

    //base+login
    public function render()
    {
        //$alumnos = $this->model->get();
        $this->view->alumnos = "cargado";
        $this->view->render('mail/index');
    }

    public function enviar()
    {
        //$alumnos = $this->model->get();
        //$this->view->alumnos = "cargado";
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];

        $oMail = new PHPMailer();
        $oMail->isSMTP();
        $oMail->Host = "smtp.gmail.com";
        $oMail->Port = 587;
        $oMail->SMTPSecure = "tls";
        $oMail->SMTPAuth = true;
        $oMail->Username = constant('USER_MAIL');
        $oMail->Password = constant('PWD_MAIL');
        $oMail->setFrom(constant('USER_MAIL'), "programcionphp3bj");
        $oMail->addAddress($correo, "Pedro");
        $oMail->Subject = "Hola pepe el que pica";
        $oMail->msgHTML($mensaje);

        if (!$oMail->send()) {
            echo $oMail->ErrorInfo;
        }
        $this->view->render('mail/enviar');

    }

}
