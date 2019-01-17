<?php 

class ErrorController extends Controller
{
	public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);		
	}

	public function index()
 	{		
		return $this->_view->output();		
	}
	public function nameError()
	{
		return 'please enter name';
	}
	public function emailError()
	{
		return 'please enter email';
	}

	public function passwordError()
	{
		return 'please enter password';
	}
    
    public function validEmail()
    {
    	return 'enter valid mail adress';
    }

    public function validPassword()
    {
    	return 'only letters are allowed';
    }
 
    public function validName()
    {
    	return 'only letters are allowed';
    }
}