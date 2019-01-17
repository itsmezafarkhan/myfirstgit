<?php

class aboutcontroller extends controller
{
    public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);
		$this->_setGobj();		
	}

    public function index()
	{
		return $this->_view->output();		
	}
	public function errcon()
	{
		
	}
}	

?>


