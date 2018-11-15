<?php
if(isset($_POST['signup'])){
	$check = mysqli_fetch_assoc($mysqli->query("select * from registration where email = '".base64_encode($_POST['email'])."'"));
	if($check['email'] == base64_encode($_POST['email'])){
		$wer = '<p style="color:#f00;">Email allready exixt! please try again.</p>';
	}else{
		if($mysqli->query("insert into registration values(
			'',
			'".base64_encode($_POST['name'])."',
			'".base64_encode($_POST['email'])."',
			'".base64_encode($_POST['password'])."',
			'".date('d-m-y')."'
		)")){
			echo "<script>alert('Registration successfull! Login now?')</script>";
			echo "<script>window.open('index.php?page=signin','_self')</script>";
		}else{
			$wer = '<p style="color:#f00;">Something wrong! please try again.</p>';
		}
	}
}
?>
<div class="container" style="padding-bottom:150px;">
	<div>
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
		  <h2>Signup Form</h2>
		  <form action="" method="post">
		  <?php if(!empty($wer)){ echo $wer; }?>
			<div class="form-group">
			  <label>Full Name:</label>
			  <input type="text" class="form-control" placeholder="Enter full name" name="name" required>
			</div>
			<div class="form-group">
			  <label>Email:</label>
			  <input type="email" class="form-control" placeholder="Enter email" name="email" required>
			</div>
			<div class="form-group">
			  <label>Password:</label>
			  <input type="password" class="form-control" placeholder="Enter password" name="password" required>
			</div>			
			<button name="signup" type="submit" class="btn btn-default">Submit</button>
			<div class="checkbox">
			  <label><a href="index.php?page=signin">Login</a>
			</div>
		  </form>
		</div>
	</div>
</div>
