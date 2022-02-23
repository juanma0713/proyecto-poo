<?php
class Persona
{
    private $id;
    private $nombre;
    private $telefono;
    private $email;


    public function __construct($id, $nombre, $telefono, $email)
    {
        $this-> id = $id;
        $this-> nombre = $nombre;
        $this-> telefono = $telefono;
        $this-> email = $email;
    }


    public function setId($id){
         $this->id = $id;
    }

    public function getId(){
         return $this->id;

    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;

    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function getTelefono(){
        return $this->telefono;

    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;

    }



    //metodos

    public function guardar()
    {
        $connection = mysqli_connect('localhost', 'root', '','crud_adsi');
        $query = "INSERT INTO contactos (id,nombre,telefono,email) VALUES ('$this->id','$this->nombre','$this->telefono','$this->email')";
        $datos = mysqli_query($connection, $query);

        if($datos){
            echo "--------------------se guardo------------";
        }else {
            echo mysqli_error($connection);
        }

    }

    public function listar()
    {
        $connection = mysqli_connect('localhost', 'root', '','crud_adsi');
        $query = "SELECT * FROM contactos";
        $datos = mysqli_query($connection, $query);

        foreach($datos as $row){
            
            
                
                 echo $row['id'].'<br>'; 
                 echo $row['nombre'].'<br>'; 
                 echo $row['telefono'].'<br>'; 
                 echo $row['email'].'<br>';
                 echo "-------------------------".'<br>';

        }
                 
                
            
            
    }
}




