 <?php 

class LoginController extends Controller
{

	public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);
		$this->_setGobj();	
		$this->_setEobj();	
	}

	public function index($query = null)
	{
		$data = array();
		
		if($query)
			$data = $this->_gobj->explodeGet($query);
		$this->_view->set('data', $data);
			return $this->_view->output();		
	}

	public function checklogin()
	{
		if($_POST)
		{
			$_email 	= $this->_gobj->_sanitize($_POST['email']);
			$_password 	= $this->_gobj->_sanitize($_POST['password']);
			$_errors =  array();
			
			$this->_model->_setEmail($_email);
			$this->_model->_setPassword($_password);

			if (empty($_email)) 
			{
				$_errors['emailerror'] = $this->_eobj->emailError();
			}	
			         if (!filter_var($_email, FILTER_VALIDATE_EMAIL)) 
			        {
					    $_errors['validemail'] = $this->_eobj->validEmail();
					}
					
			
			if (empty($_password)) 
			{
				$_errors['passworderror'] = $this->_eobj->passwordError();
				//for checking valid passwoerd
			}	
			

			 if(empty($_errors))
			 {
			 	$_user = $this->_model->login();
              
             

				 if($_user != false)
				{
					//echo 'USER Logged In.';
					header('location:'.URL.'home');
					
				}

				else
				{
					echo 'error logging in';
				}
			}
              

			else
			{
				    $this->_setView('index');
		        	$this->_view->set('errors', $_errors);
		        	$this->_view->set('email', $_email);
		        	$this->_view->set('emailv',$_email);
		        	$this->_view->set('password',$_password);
		        	//$this->_view->set('passwordv',$_password);
		        	return $this->_view->output();
			}

		}
			
	}

			
}

?>