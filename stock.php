<?php
include "configa.php";
class stock{
 private $_quantite;
  private $_codeprod;

  public function __construct($quantite,$codeprod)
  {

    $this->_quantite=$quantite;
    $this->_codeprod=$codeprod;

  }
  
  public function getquantite()
  {
    return $this->_quantite;
  }
  public function getcodeprod()
  {
    return $this->_codeprod;
  }

  public function ajouter($e,$conn)
  {
    $sql="INSERT INTO stock(quantite,codeprod)
    values('".$e->getquantite()."','".$e->getcodeprod()."')";
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
      $sql = 'UPDATE stock SET quantite="'.$id->getquantite().'" WHERE codeprod="'.$id->getcodeprod().'"';
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
}
 ?>
