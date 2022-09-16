<?php
require_once 'RepositorioUsuario.php';
class Usuario
{
    protected $id;
    protected $nombre_usuario;
    protected $nombre;
    protected $apellido;
    protected $email;

    public function __construct($nombre_usuario, $nombre, $apellido, $email, $id = null)
    {
        $this->id = $id;
        $this->nombre_usuario = $nombre_usuario;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
    }

    public function getId() {return $this->id;}
    public function setId($id) {$this->id = $id;}
    public function getUsuario() {return $this->nombre_usuario;}
    public function getNombre() {return $this->nombre;}
    public function getApellido() {return $this->apellido;}
    public function getNombreApellido() {return "$this->nombre $this->apellido";}
    public function getEmail(){return $this->email;}
    
    public function setEmail($email, $id){
        modificar($email, $id);
        if (true){
            return $this->email = $email;
        }else{
            return "hubo un error";
        }
    }
}
