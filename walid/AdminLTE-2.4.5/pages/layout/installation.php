<?PHP
class Installation{
	private $numero_inst;
	private $id_client;
	private $nombre_produit;
	private $progres;
	private $prix;
	private $date_debut;
	private $delai;
	function __construct($numero_inst,$id_client,$nombre_produit,$progres,$prix,$date_debut,$delai){
		$this->numero_inst=$numero_inst;
		$this->id_client=$id_client;
		$this->nombre_produit=$nombre_produit;
		$this->progres=$progres;
		$this->prix=$prix;
		$this->date_debut=$date_debut;
		$this->delai=$delai;
	}
	function getNumero_inst(){
		return $this->numero_inst;
	}
	function getId_client(){
		return $this->id_client;
	}
	
	function getNombre_produit(){
		return $this->nombre_produit;
	}
	function getProgres(){
		return $this->progres;
	}
	function getPrix(){
		return $this->prix;
	}
	function getDate_debut(){
		return $this->date_debut;
	}
	function getDelai(){
		return $this->delai;
	}
		function setNumero_inst($numero_inst){
		$this->numero_inst=$numero_inst;
	}
		function setId_client($id_client){
		$this->id_client=$id_client;
	}
	function setNombre_produit($nombre_produit){
		$this->nombre_produit=$nombre_produit;
	}
    function setProgres($progres){
		$this->progres=$progres;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	function setDate_debut($date_debut){
		$this->date_debut=$date_debut;
	}
	function setDelai($delai){
		$this->delai=$delai;
	}
}

?>