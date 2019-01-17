 <?php include HOME . DS . 'includes' . DS . 'header.php'; ?>

<div class="container">
	<div class="col-lg-8">-
	<form action="checkcontact" method="POST" class="form-group" >
		<div class="form-group">
			
			<label for="name">Name </label> <span class="error">
			<?php if(isset($errors['nameerror']))echo $errors['nameerror'];?> </span>
			<span class="error">
			<?php if(isset($errors['validname']))echo $errors['validname'];?> </span>
			<input type="text" name="name" id="name" class="form-control" value="<?php  if (isset($name)) echo $name;?>">
			<label for="email">Email</label> <span class="error">
			<?php if(isset($errors['emailerror']))echo $errors['emailerror'];?> </span>
			<input type="text" name="email" id="email" class="form-control" value="<?php if (isset($email)) echo $email;?>">
		</div>
		<div class="form-group">
			<label for="password">Password</label> <span class="error" >
			<?php if(isset($errors['passworderror']))echo $errors['passworderror'];?> </span>
			<input type="text" name="password" id="password" class="form-control" value="<?php if (isset($password)) echo $password;?>">
			<label for="password">suggestion</label> 
			<input type="text" name="suggestion" id="suggestion" class="form-control" value="<?php if (isset($suggestion)) echo $suggestion;?>">
		</div>
		<input type="submit" value="Submit" class="btn btn-primary">

	</form>
</div>
<div class="col-lg-4">
	your name:
	<?php if(isset($name))echo $name; ?>
</div>
</div>

 <?php include HOME . DS . 'includes' . DS . 'footer.php'; ?>