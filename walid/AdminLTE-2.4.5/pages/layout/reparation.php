<?PHP
class Reparation{
	private $numero_rep;
	private $id_client;
	private $id_produit;
	private $nb_panne;
	private $progres;
	private $prix;
	private $responsable;
	private $delai;
	function __construct($numero_rep,$id_client,$id_produit,$nb_panne,$progres,$prix,$responsable,$delai){
		$this->numero_rep=$numero_rep;
		$this->id_client=$id_client;
		$this->id_produit=$id_produit;
		$this->nb_panne=$nb_panne;
		$this->progres=$progres;
		$this->prix=$prix;
		$this->responsable=$responsable;
		$this->delai=$delai;
	}
	function getNumero_rep(){
		return $this->numero_rep;
	}
	function getId_client(){
		return $this->id_client;
	}
	
	function getId_produit(){
		return $this->id_produit;
	}
	function getNb_panne(){
		return $this->nb_panne;
	}
	function getProgres(){
		return $this->progres;
	}
	function getPrix(){
		return $this->prix;
	}
	function getResponsable(){
		return $this->responsable;
	}
	function getDelai(){
		return $this->delai;
	}
		function setNumero_rep($numero_rep){
		$this->numero_rep=$numero_rep;
	}
		function setId_client($id_client){
		$this->id_client=$id_client;
	}
	function setId_produit($id_produit){
		$this->id_produit=$id_produit;
	}
	function setNb_panne($nb_panne){
		$this->nb_panne=$nb_panne;
	}
    function setProgres($progres){
		$this->progres=$progres;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	function setResponsable($responsable){
		$this->responsable=$responsable;
	}
	function setDelai($delai){
		$this->delai=$delai;
	}
}

?>