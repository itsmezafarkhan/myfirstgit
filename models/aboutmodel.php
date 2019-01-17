<?php 

class aboutmodel extends model
{
	protected $_info;
	protected $_about;

	public function getinfo()
	{
      $this->_info = $info;
	}
     
     public function aboutt()
	{
      $this->_about = $about;
	}

    public function error()
    {
    	return 'error found';
    }
}
?>