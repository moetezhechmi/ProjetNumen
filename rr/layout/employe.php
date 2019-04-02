<?PHP
class commande{
	private $idC;
	private $idClient;
	private $idP;
	private $dateL;
	function __construct($idC,$idClient,$idP,$dateL){
		$this->idC=$idC;
		$this->idClient=$idClient;
		$this->idP=$idP;
		$this->dateL=$dateL;
	}
	function getIdC(){
		return $this->idC;
	}
	function getIdClient(){
		return $this->idClient;
	}
	function getIdP(){
		return $this->idP;
	}
	function getDateL(){
		return $this->dateL;
	}

	function setIdC($idC){
		$this->idC=$idC;
	}
	function setIdClient($idClient){
		$this->idClient=$idClient;
	}
	function setIdP($idP){
		$this->idP=$idP;
	}
	function setDateL($dateL){
		$this->dateL=$dateL;
	}
}

?>