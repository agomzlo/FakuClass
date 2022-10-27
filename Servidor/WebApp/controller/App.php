<?php
class App{
    private $name;
    private $module;
    private $teacher;
    private $student;

    public function __construct($name = "Aplicación PHP"){
        echo "Construyendo la app <hr>";
        $this->name = $name;
        $this->module = "Desarrollo Web en Entorno Servidor";
        $this->teacher = "Eduardo Santiago";
        $this->student = "Fulano De Tal";
    }

    public function run(){
        $method = $_GET['method'] ?? 'index';
        $this->$method();
    }

    public function index(){
        echo "Estamos en el index<br>";
        include('views/index.php');
    }

    public function login(){
        echo "Estamos en login <br>";
        include('views/form.php');
    }

}
