 <?php
class SignupModel extends Model
{
	private $_name;
	private $_email;
	private $_password;

    public function _setName($name){
		$this->_name = $name;
	}
	public function _setEmail($email){
		$this->_email = $email;
	}
	public function _setPassword($password){
		$this->_password = $password;
	}

	public function signup()
	{		
		$data = array($this->_name,$this->_email, $this->_password);
		 
        $sql = "INSERT INTO user (name, email, password) VALUES (?, ?, ?)";
         
        $this->_setSql($sql); 
		$_user = $this->insert($data);

		if($_user)
		{
			return $_user;			
		}		
		else
		{
			return false;
		}


	}

}