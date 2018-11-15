<?php 
if(isset($_POST['login'])){
	$check = mysqli_fetch_assoc($mysqli->query("select * from registration where email = '".base64_encode($_POST['email'])."' and password = '".base64_encode($_POST['password'])."'"));
	if($check['email'] == base64_encode($_POST['email']) AND $check['password'] == base64_encode($_POST['password'])){
		$_SESSION['profile_session'] = base64_encode($_POST['email']);
		echo "<script>window.open('index.php?page=profile','_self')</script>";
	}else{
		$wer = '<p style="color:#f00;">Email or password may be wrong! please try again.</p>';
	}
}
?>
<div class="container" style="padding-bottom:150px;">
	<div>
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
		  <h2>Login Form</h2>
		  <form action="" method="post">
		  <?php if(!empty($wer)){ echo $wer; }?>
			<div class="form-group">
			  <label>Email:</label>
			  <input type="email" class="form-control" placeholder="Enter email" name="email" required>
			</div>
			<div class="form-group">
			  <label>Password:</label>
			  <input type="password" class="form-control" placeholder="Enter password" name="password" required>
			</div>
			<div class="checkbox">
			  <label><input type="checkbox" name="remember"> Remember me <a href="index.php?page=signup">Signup</a> | <a href="index.php?page=forgot_password">Forgot password</a></label>
			</div>
			<button name="login" type="submit" class="btn btn-default">Submit</button>
		  </form>
		</div>
	</div>
</div>
