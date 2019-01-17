<?php

class Signupcontroller extends controller
{
    public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);
		$this->_setGobj();	
		$this->_setEobj();	
	}

	public function index()
	{
		return $this->_view->output();		
	}

	public function checksign()
	{		
		if($_POST)
		{
			$_name 	    = $this->_gobj->_sanitize($_POST['name']);
			$_email 	= $this->_gobj->_sanitize($_POST['email']);
			$_password 	= $this->_gobj->_sanitize($_POST['password']);
			$_errors     = array();
           
			$this->_model->_setName($_name);
			$this->_model->_setEmail($_email);
			$this->_model->_setPassword($_password);
             
            if(empty($_name))
            {
            	$_errors['nameerror'] = $this->_eobj->nameError();
            }

            if (!preg_match("/^[a-zA-Z ]*$/",$_name)) 
            {
      			$_errors['validname'] = $this->_eobj->validName(); 
    		}
            
            if(empty($_email))
        	{
        		$_errors['emailerror'] = $this->_eobj->emailError();
        	}

        	  if (!filter_var($_email, FILTER_VALIDATE_EMAIL)) 
			        {
					    $_errors['validemail'] = $this->_eobj->validEmail();
					}

        	if(empty($_password))
        	{
        		$_errors['passworderror'] = $this->_eobj->passwordError();
        	}

            if(empty($_errors))
            {
             	 $_user = $this->_model->signup();
             	
            	if($_user != false)
            	{
		        	header('location:'.URL.'login/msg=Thanks for Registaring login to continue&id='.$_user);
		        }
		    }    
	 	    else
		        {
		        	//$_errors['errormsg'] = 'Sorry! We are not able to create an account for you.';
		        	$this->_setView('index');
		        	$this->_view->set('errors', $_errors);
		        	$this->_view->set('name', $_name);
		        	$this->_view->set('email', $_email);
		        	$this->_view->set('password',$_password);

		        	return $this->_view->output();
		        }
		    
            
	    }
	}
}
?>