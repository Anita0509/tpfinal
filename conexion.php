<?php

class conexion{
    #atributos que son propios del objeto
    private $servidor ="107.161.23.150";
    private $usuario ="parashantiyoga_265";
    private $pass = "Usha*3011";
    private $conexion;#objeto de tipo pdo, de la clase propia de php
    private $base = "parashantiyoga_portfolio";
   
    public function __construct(){
        try{
            $this->conexion = new PDO("mysql:host=$this->servidor;dbname=$this->base",$this->usuario,$this->pass);
            #ACTIVAMOS LOS ERRORES Y LAS EXCEPTIONES
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
            return "Falla de Conexión".$e;
        }
    }

     #creo un metodo de ejecucion a sql de insert, update, delete   
    public function ejecutar($sql){
        #Execute una consulta de sql
        $this->conexion->exec($sql);
        #esto nos da el valor de id insertado
        return $this->conexion->lastInsertId();
    }
    public function consultar($sql){ # select 
        #ejecuta la consulta y nos devuelve la info de la base
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        #retorna todos los registros de la consulta sql
        return $sentencia->fetchAll();
    }


}

?>