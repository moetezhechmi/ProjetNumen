<?PHP
require_once ('PHPMailer/PHPMailerAutoload.php');
class User{
	private $id;
	private $nom;
	private $prenom;
	private $date_naissance;
	private $sexe;
	private $code_postal;
	private $ville;
	private $num_tel;
	private $email;
	private $password;

	function __construct($id,$nom,$prenom,$date_naissance,$sexe,$code_postal,$ville, $num_tel,$email,$password){
		$this->id=$id;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->date_naissance=$date_naissance;
		$this->$sexe=$sexe;
	    $this->$code_postal=$code_postal;
		$this->$ville=$ville;
		$this->$num_tel=$num_tel;
		$this->$email=$email;
		$this->$password=$password;

	}
	
	function getId(){
		return $this->id;
	}
	function getNom(){
   		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getDate_naissance(){
			return $this->date_naissance;
	}
	function getSexe(){
		return $this->sexe;
	}
	function getCode_postal(){
		return $this->code_postal;
	}
	function getVille(){
		return $this->ville;
	}
	function getNum_tel(){
		return $this->num_tel;
	}
	function getEmail(){
		return $this->email;
	}
	function getPassword(){
		return $this->password;
	}




	function setId($id){
		$this->id=$id;
		
	}
	function setNom($nom){
   		$this->nom=$nom;
		
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
		
	}
	function setDate_naissance($date_naissance){
			$this->date_naissance=$date_naissance;
		
	}
	function setSexe($sexe){
		$this->$sexe=$sexe;
	   
	}
	function setCode_postal($code_postal){
		 $this->$code_postal=$code_postal;
		
	}
	function setVille($ville){
		$this->$ville=$ville;
		
	}
	function setNum_tel($num_tel){
		$this->$num_tel=$num_tel;
		
	}
	function setEmail($email){
		$this->$email=$email;
		
	}
	function setPassword($password){
		$this->$password=$password;
	}
	
}

?>