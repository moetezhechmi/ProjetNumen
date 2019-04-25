<?php
include "configa.php";
class stock{
private $_quantite;
private $_unite;
private $_description;
private $_codeprod;

  public function __construct($quantite,$unite,$description,$codeprod)
  {

    $this->_quantite=$quantite;
    $this->_unite=$unite;
    $this->_description=$description;
    $this->_codeprod=$codeprod;

  }
  
  public function getquantite()
  {
    return $this->_quantite;
  }
    public function getunite()
  {
    return $this->_unite;
  }
    public function getdescription()
  {
    return $this->_description;
  }
    public function getcodeprod()
  {
    return $this->_codeprod;
  }

  public function ajouter($e,$conn)
  {
    $sql="INSERT INTO stock(quantite,unite,description,codeprod)
    values('".$e->getquantite()."','".$e->getunite()."','".$e->getdescription()."','".$e->getcodeprod()."')";
    $conn->query($sql);
  }
  public function afficher($conn)
  {
    $sql="SELECT * FROM stock";
    $resultat=$conn->query($sql);
    return $resultat->fetchAll();
  }
  public function supprimer($id,$conn)
  {
    $sql="DELETE FROM  stock WHERE quantite=".$id;
    $conn->exec($sql);
  }
  public function modifier($id,$conn)
  {
      $sql = 'UPDATE stock SET quantite="'.$id->getquantite().'",unite="'.$id->getunite().'",description="'.$id->getdescription().'" WHERE codeprod="'.$id->getcodeprod().'"';
      $conn->exec($sql);
  }

     function afficherDESC()
     {
    $sql="select * from stock ORDER BY quantite DESC";
    $c = configa::getConnexion();
    return ($c->query($sql));
    
     }

   function afficherASC()
   {
    $sql="select * from stock ORDER BY quantite ASC";
    $c = configa::getConnexion();
    return ($c->query($sql));
    }

  public function rechercher($e,$conn){
  $sql="SELECT * FROM stock WHERE quantite=".$e;
  $resultat=$conn->query($sql);
  return $resultat->fetchALL();
}

    
}
 ?>
