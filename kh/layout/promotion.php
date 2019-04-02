<?PHP
class Promotion{
	private $id_produit;
	private $pourcentage;
	private $date_debut;
	private $date_fin;
	function __construct($id_produit,$pourcentage,$date_debut,$date_fin){
		$this->id_produit=$id_produit;
		$this->pourcentage=$pourcentage;
		$this->date_debut=$date_debut;
		$this->date_fin=$date_fin;
	}
	function getId_produit(){
		return $this->id_produit;
	}
	function getpourcentage(){
		return $this->pourcentage;
	}
	function getDate_debut(){
		return $this->date_debut;
	}
	function getDate_fin(){
		return $this->date_fin;
	}
	function setId_produit($id_produit){
		$this->id_produit=$id_produit;
	}
	function setpourcentage($pourcentage){
		$this->pourcentage=$pourcentage;
	}
	function setDate_debut($date_debut){
		$this->date_debut=$date_debut;
	}
	function setDate_fin($date_fin){
		$this->date_fin=$date_fin;
	}
}

?>