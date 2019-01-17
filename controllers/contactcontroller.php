<?php 
 
class ContactController extends Controller{

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

	public function checkcontact()
	{
       if($_POST)
       {
       	$_name =  $this->_gobj->_sanitize($_POST['name']);
       	$_email =  $this->_gobj->_sanitize($_POST['email']);
       	$_password =  $this->_gobj->_sanitize($_POST['password']);
       	$_suggestion =  $this->_gobj->_sanitize($_POST['suggestion']);
       	$_errors   = array();

       	$this->_model->_setName($_name);
       	$this->_model->_setEmail($_email);
       	$this->_model->_setPassword($_password);
       	$this->_model->_setSuggestion($_suggestion);

	       	if(empty($_name))
	       	{
	       		$_errors['nameerror'] = $this->_eobj->nameError();
	       	}

	       	if(empty($_email))
	       	{
	       		$_errors['emailerror'] = $this->_eobj->emailError();
	       	}

	       	if(empty($_password))
	       	{
	       		$_errors['passworderror'] = $this->_eobj->passwordError();
	       	}

       	    if(empty($_errors))
       	    {
       	    	$user = $this->_model->contact();
       	    	 if($user != false)
            	{
		        	header('location:'.URL.'contact/msg=Thanks for contacting us &id='.$user);
		        }

		        else
		        {
		        	$this->_setView('index');
		        	$this->_view->set('error',$_errors);
		        	$this->_view->set('name', $_name);
		        	$this->_view->set('email', $_email);
		        	$this->_view->set('password',$_password);

		        	return $this->_view->output();

		        }
       	    }

       }
	}
}
?>