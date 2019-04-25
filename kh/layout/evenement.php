<?PHP
class Evenement{
	private $nom;
	private $description;
	private $date_debut;
	private $date_fin;
	private $ouverture;
	function __construct($nom,$description,$date_debut,$date_fin,$ouverture){
		$this->nom=$nom;
		$this->description=$description;
		$this->date_debut=$date_debut;
		$this->date_fin=$date_fin;
		$this->ouverture=$ouverture;
	}
	function getNom(){
		return $this->nom;
	}
	function getdescription(){
		return $this->description;
	}
	function getDate_debut(){
		return $this->date_debut;
	}
	function getDate_fin(){
		return $this->date_fin;
	}
	function getouverture(){
		return $this->ouverture;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setdescription($description){
		$this->description=$description;
	}
	function setDate_debut($date_debut){
		$this->date_debut=$date_debut;
	}
	function setDate_fin($date_fin){
		$this->date_fin=$date_fin;
	}
	function setouverture($ouverture){
		$this->ouverture=$ouverture;
	}
}

?>