<?php
class config
{
  private $conn;
  function __construct()
  {
    $servername="localhost";
    $dbname="prosysteme";
    $username="root";
    $password="";
    $this->conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
  }
  function getConnection()
  {
    return $this->conn;
  }
  public function query($sql, $data=array()){
    $req=$this->conn->prepare($sql);
    $req->execute($data);
    return $req->fetchAll(PDO::FETCH_OBJ);
  }
} ?>
