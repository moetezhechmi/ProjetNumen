<?php
class config
{
  private $conn;
  function __construct()
  {
    $servername="localhost";
    $dbname="gestionstock";
    $username="root";
    $password="";
    $this->conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
  }
  function getConnection()
  {
    return $this->conn;
  }
} ?>
