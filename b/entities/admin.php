<?PHP

class Admin{
	private $id;
	private $username;
	private $email;
	private $password;
	
	
	function __construct($email,$password){
		//$this->id=$id;
		//$this->username=$username;
		$this->email=$email;
		$this->password=$password;
	
	}
	function getId(){
		return $this->id;
	}
	function getUsername(){
		return $this->username;
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
	function setUsername($username){
		$this->username=$username;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setPassword($password){
		$this->password=$password;
	}

	public function Logedin($instance,$email,$password)
	{
		$req="select * from admin where email='$email' && password='$password'";
		$rep=$instance->query($req);
		return $rep->fetchAll();
	}


}

?>