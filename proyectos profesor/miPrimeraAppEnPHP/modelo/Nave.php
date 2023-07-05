<?php

require_once 'funciones.php';

class Nave{

    //atributos

    private $id;
    private $nombre;
    private $matricula;
    private $anio;
    private $tipo;
    private $descripcion;
    private $foto;


    //contructor

    /**
     * @param $nombre
     * @param $matricula
     * @param $anio
     * @param $tipo
     * @param $descripcion
     * @param $foto
     */
    public function __construct($nombre="", $matricula="", $anio="", $tipo="", $descripcion="", $file=""){
        $this->nombre = $nombre;
        $this->matricula = $matricula;
        $this->anio = $anio;
        $this->tipo = $tipo;
        $this->descripcion = $descripcion;
        $this->foto = $this->guardarFoto($file);
    }

    public function guardarFoto($file) {
        $nombreArchivo = subirFoto($file, "imgSubidas", 3000000);
        $nombreArchivo = cortarCadenaFinal($nombreArchivo, ".");
        return $nombreArchivo;
    }
    



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        if($nombre == ""){

        }else {
            $this->nombre = $nombre;
        }
    }

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    /**
     * @return mixed
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * @param mixed $anio
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param mixed $foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    //metodos


    public function imprimirEnTabla(){


        $html = "<table border=1>";

                $html .= "<tr><td>".$this->nombre."</td><td>".$this->matricula."</td><td>".$this->anio."</td></tr>";

        $html .= "</table>";

        return $html;

    }


    /* validaciones
    - Servidor
        httpacces
        php.ini
    - cliente (seg==0)
        html (input -> required, min max... )
        JS (validacion educada)

    -servidor
        -> controlador
        -> modelo
        -> Base de datos



    */



}