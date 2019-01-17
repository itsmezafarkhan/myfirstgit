<?php include HOME . DS . 'includes' . DS . 'header.php'; ?>
<span class="success"><?php if(isset($data['msg'])) echo $data['msg'];?></span>
<div class="container">
	<?php 
       
	?>
	<form action="checklogin" method="POST" class="form-group" >
		<div class="form-group">
			<label for="email">Email</label><span class="error">
			<?php if(isset($errors['emailerror']))echo $errors['emailerror'];?> </span>
			<span class="error">
			<?php if(isset($errors['validemail']))echo $errors['validemail'];?> </span>
			<input type="text" name="email" id="email" class="form-control" value="<?php if(isset($email)) echo $email;?>">
		</div>
		<div class="form-group">
			<label for="password">Password</label><span class="error">
			<?php if(isset($errors['passworderror']))echo $errors['passworderror'];?>
            </span>
            <span class="error">
			<!-- <?php if(isset($errors['passworderrorr']))echo $errors['passworderrorr'];?> -->
			
			 </span>
			<input type="text" name="password" id="password" class="form-control" value="<?php if(isset($password)) echo $password;?>">
		</div>
		<input type="submit" value="Submit" class="btn btn-primary">
	</form>
</div>

<?php include HOME . DS . 'includes' . DS . 'footer.php'; ?>