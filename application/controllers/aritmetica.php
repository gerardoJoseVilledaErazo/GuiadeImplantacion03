<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Aritmetica extends CI_Controller
{
    public function view($page = "home")
    {
        if (!file_exists("application/views/pagina/" . $page . ".php")) {
            show_404();
        }
        $data["titulo"] = "GUÍA 3";
        $this->load->view("plantilla/header", $data);
        $this->load->view("pagina/" . $page, $data);
        $this->load->view("plantilla/footer", $data);
    }

    public function sumar()
    {
        $data = array(
            "titulo" => "GUÍA 03",
            "resp" => "Error",
        );
        if ($_POST) {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $valor = $num1 + $num2;
            $data = array(
                "titulo" => "GUÍA 03",
                "resp" => $valor,
            );
        }
        $this->load->view("plantilla/header", $data);
        $this->load->view("plantilla/respuesta", $data);
        $this->load->view("plantilla/footer", $data);
    }
    
    public function restar()
    {
        $data = array(
            "titulo" => "GUÍA 03",
            "resp" => "Error",
        );
        if ($_POST) {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $valor = $num1 - $num2;
            $data = array(
                "titulo" => "GUÍA 03",
                "resp" => $valor,
            );
        }
        $this->load->view("plantilla/header", $data);
        $this->load->view("plantilla/respuesta", $data);
        $this->load->view("plantilla/footer", $data);
    }

    public function multiplicar()
    {
        $data = array(
            "titulo" => "GUÍA 03",
            "resp" => "Error",
        );
        if ($_POST) {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $num3 = $_POST["num3"];
            $num4 = $_POST["num4"];
            $num5 = $_POST["num5"];
            $valor = $num1 * $num2 * $num3 * $num4 * $num5;
            $data = array(
                "titulo" => "GUÍA 03",
                "resp" => $valor,
            );
        }
        $this->load->view("plantilla/header", $data);
        $this->load->view("plantilla/respuesta", $data);
        $this->load->view("plantilla/footer", $data);
    }

    public function dividir()
    {
        $data = array(
            "titulo" => "GUÍA 03",
            "resp" => "Error",
        );
        if ($_POST) {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $num3 = $_POST["num3"];
            $valor = ($num1 / $num2) / $num3;
            $data = array(
                "titulo" => "GUÍA 03",
                "resp" => $valor,
            );
        }
        $this->load->view("plantilla/header", $data);
        $this->load->view("plantilla/respuesta", $data);
        $this->load->view("plantilla/footer", $data);
    }
}