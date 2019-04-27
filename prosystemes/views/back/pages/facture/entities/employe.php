<?PHP
class facture{
	private $idF;
	private $idC;
	private $prix;
	function __construct($idF,$idC,$prix){
		$this->idF=$idF;
		$this->idC=$idC;
		$this->prix=$prix;
	}
	function getIdF(){
		return $this->idF;
	}
	function getIdC(){
		return $this->idC;
	}
	function getPrix(){
		return $this->prix;
	}
	function setIdF($idF){
		$this->idF=$idF;
	}
	function setIdC($idC){
		$this->idC=$idC;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
}

?>