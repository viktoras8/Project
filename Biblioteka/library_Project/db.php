<?php
class db{
protected $connection;

function setconnection(){
    try{
        $this->connection=new PDO("mysql:host=localhost; dbname=library_management","root","");
    }catch(PDOException $e){
        echo "Error";
    }
}

}
