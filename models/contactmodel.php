<?php  

class ContactModel extends Model
{
  private $_name;
  private $_email;
  private $_password;
  private $_suggestion;

  public function _setName($name)
  {
  	$this->_name = $name;
  }

  public function _setEmail($email)
  {
  	$this->_email = $email;
  }

  public function _setpassword($password)
  {
  	$this->_password = $password;
  }
 
  public function _setSuggestion($suggestion)
  {
  	$this->_suggestion = $suggestion;
  }

  public function contact()
  {
  	$data = array($this->_name, $this->_email, $this->_password, $this->_suggestion);
  	$sql = "INSERT INTO contact (name,email,password,suggestion) VALUES(?,?,?,?)";
  	 $this->_setSql($sql);
  	 $user = $this->insert($data);
     if($user)
     {
     	return $user;
     }
     else
     {
     	return false;
     }

  }
}
?>