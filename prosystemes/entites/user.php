<?PHP
class Employe{
	private $id;
	private $username;
	private $email;
	private $password;
	
	function __construct($id,$username,$email,$password){
		$this->id=$id;
		$this->username=$username;
		$this->email=$email;
		$this->password=$password;

	}
	
	function getId(){
		return $this->id;
	}
	function getUser_name(){
		return $this->username;
	}
	function getEmail(){
		return $this->email;
	}
	function getPassword(){
		return $this->password;
	}


	function setUser_name($username){
		$this->username=$username;
	}
	function setEmail($email){
		$this->email;
	}
	function setPassword($password){
		$this->password=$password;
	}
	
	
}

?>