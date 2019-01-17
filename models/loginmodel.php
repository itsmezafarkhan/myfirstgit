 <?php
class LoginModel extends Model
{
	private $_email;
	private $_password;

	public function _setEmail($email){
		$this->_email = $email;
	}
	public function _setPassword($password){
		$this->_password = $password;
	}

	public function login()
	{		
		$data = array($this->_email, $this->_password);
		$sql = "SELECT * FROM user WHERE email = ? and password = ?";

		
		$this->_setSql($sql);
		$userData = $this->getRow($data);
		if (empty($userData))
		{
			return false;
		}
		else
		{				
			return $userData;
		}
		
	}
}