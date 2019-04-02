<?php
class produit{
  private $_codeProd;
  private $_marque;
  private $_couleur;
  private $_typee;
  private $_dateC;

  public function __construct($codeProd,$marque,$couleur,$typee,$dateC)
  {

    $this->_codeProd=$codeProd;
    $this->_marque=$marque;
    $this->_couleur=$couleur;
    $this->_typee=$typee;
    $this->_dateC=$dateC;

  }

  public function getcodeprod()
  {
    return $this->_codeProd;
  }
   public function getmarque()
  {
    return $this->_marque;
  }
   public function getcouleur()
  {
    return $this->_couleur;
  }
   public function gettypee()
  {
    return $this->_typee;
  }
   public function getdateC()
  {
    return $this->_dateC;
  }

  public function ajouter($e,$conn)
  {
    $sql="INSERT INTO produit(codeProd,marque,couleur,typee,dateC)
    values('".$e->getcodeprod()."','".$e->getmarque()."','".$e->getcouleur()."','".$e->gettypee()."','".$e->getdateC()."')";
    $conn->query($sql);
  }
  public function afficher($conn)
  {
    $sql="SELECT * FROM produit";
    $resultat=$conn->query($sql);
    return $resultat->fetchAll();
  }
  public function supprimer($id,$conn)
  {
    $sql="DELETE FROM  produit WHERE codeProd=".$id;
    $conn->exec($sql);
  }
  public function rechercher($codeProd,$conn){
  $sql="SELECT * FROM produit WHERE codeProd=".$codeProd;
  $resultat=$conn->query($sql);
  return $resultat->fetchALL();
}
 public function modifier($id,$conn)
  {
      $sql = 'UPDATE produit SET marque="'.$id->getmarque().'", couleur="'.$id->getcouleur().'",typee="'.$id->gettypee().'",dateC="'.$id->getdateC().'" WHERE codeProd="'.$id->getcodeprod().'"';
      $conn->exec($sql);
  }

}
 ?>
