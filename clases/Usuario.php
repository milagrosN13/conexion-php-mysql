<?php

class Usuario
{
    protected $id;
    protected $nombre_usuario;
    protected $nombre;
    protected $apellido;

    public function __construct($nombre_usuario, $nombre, $apellido, $id = null)
    {
        $this->id = $id;
        $this->nombre_usuario = $nombre_usuario;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getId() {return $this->id;}
    public function setId($id) {$this->id = $id;}
    public function getUsuario() {return $this->nombre_usuario;}
    public function getNombre() {return $this->nombre;}
    public function getApellido() {return $this->apellido;}
    public function getNombreApellido() {return "$this->nombre $this->apellido";}
}
