<?php 
if(isset($_POST['save'])){
	include("template/profile_image.php");
	if($mysqli->query("insert into profile values(
		'',
		'".$_SESSION['profile_session']."',
		'".base64_encode($_POST['j_title'])."',
		'".base64_encode($_POST['w_address'])."',
		'".base64_encode($_POST['p_number'])."',
		'".base64_encode($_POST['summery'])."',
		'".base64_encode($image_file)."'
	)")){
		echo "<script>alert('Save success!')</script>";
		echo "<script>window.open('index.php?page=profile','_self')</script>";
	}else{
		$wer = '<p style="color:#f00;">Something wrong! please try again.</p>';
	}
}
$cnk = mysqli_fetch_assoc($mysqli->query("select * from profile where a_id = '".$_SESSION['profile_session']."'"));
if(!empty($cnk['id'])){
	$p_button = '<button name="p_update" type="submit" class="btn btn-default">Update</button>';
	$req = '';
}else{
	$p_button = '<button name="save" type="submit" class="btn btn-default">save</button>';
	$req = 'required';
}
if(isset($_POST['p_update'])){
	$image_location = base64_decode($cnk['image']);
	if($_FILES["file"]["name"] == ''){
		$image_file = $image_location;
	}else{
		if(file_exists($image_location)){
			unlink($image_location);						
		}
		include("template/profile_image.php");		
	}
	if($mysqli->query("update profile set
		job_title = '".base64_encode($_POST['j_title'])."',
		w_address = '".base64_encode($_POST['w_address'])."',
		mobile = '".base64_encode($_POST['p_number'])."',
		summery = '".base64_encode($_POST['summery'])."',
		image = '".base64_encode($image_file)."'
		where a_id = '".$_SESSION['profile_session']."'
	")){
		echo "<script>alert('Update success!')</script>";
		echo "<script>window.open('index.php?page=profile','_self')</script>";
	}else{
		$wer = '<p style="color:#f00;">Something wrong! please try again.</p>';
	}
}
//-------------------------------------------
if(isset($_POST['add'])){
	if($mysqli->query("insert into content values(
		'',
		'".$_SESSION['profile_session']."',
		'".$_POST['type']."',
		'".base64_encode($_POST['w_j_title'])."',
		'".base64_encode($_POST['d_q'])."',
		'".base64_encode($_POST['description'])."'
	)")){
		echo "<script>alert('Adding success!')</script>";
		echo "<script>window.open('index.php?page=profile','_self')</script>";
	}else{
		$wer = '<p style="color:#f00;">Something wrong! please try again.</p>';
	}
}
if(!empty($_GET['content_delete_id'])){
	if($mysqli->query("delete from content where id = '".$_GET['content_delete_id']."'")){
		echo "<script>alert('Delete success!')</script>";
		echo "<script>window.open('index.php?page=profile','_self')</script>";
	}else{
		$wer = '<p style="color:#f00;">Something wrong! please try again.</p>';
	}
}
//-----------------------------------
if(isset($_POST['add_skill'])){
	if($mysqli->query("insert skill values(
		'',
		'".$_SESSION['profile_session']."',
		'".base64_encode($_POST['skill'])."'
	)")){
		echo "<script>alert('Adding success!')</script>";
		echo "<script>window.open('index.php?page=profile','_self')</script>";
	}else{
		$wer = '<p style="color:#f00;">Something wrong! please try again.</p>';
	}
}
if(!empty($_GET['skill_delete_id'])){
	if($mysqli->query("delete from skill where id = '".$_GET['skill_delete_id']."'")){
		echo "<script>alert('Delete success!')</script>";
		echo "<script>window.open('index.php?page=profile','_self')</script>";
	}else{
		$wer = '<p style="color:#f00;">Something wrong! please try again.</p>';
	}
}
?>
<div class="container" style="padding-bottom:150px;">
<?php if(!empty($wer)){ echo $wer; }?>
	<div class="row">
		<div class="col-sm-12"><h2>Profile</h2></div>
		<div class="col-sm-4">
			<p>Personal information</p>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>JOb title:</label>
					<input value="<?php if(!empty($cnk['job_title'])){ echo base64_decode($cnk['job_title']); } ?>" type="text" class="form-control" placeholder="Enter JOb title" name="j_title" required>
				</div>
				<div class="form-group">
					<label>web Address:</label>
					<input value="<?php if(!empty($cnk['w_address'])){ echo base64_decode($cnk['w_address']); } ?>" type="url" class="form-control" placeholder="Enter web Address" name="w_address" required>
				</div>
				<div class="form-group">
					<label>Phone number:</label>
					<input value="<?php if(!empty($cnk['mobile'])){ echo base64_decode($cnk['mobile']); } ?>" type="text" class="form-control" placeholder="Enter Phone number" name="p_number" required>
				</div>
				<div class="form-group">
					<label>Summery:</label>
					<textarea class="form-control" placeholder="Enter Summery" name="summery" required><?php if(!empty($cnk['summery'])){ echo base64_decode($cnk['summery']); } ?></textarea>
				</div>
				<div class="form-group">
					<label>Profile Picture:</label>
					<?php
						if(!empty($cnk['image'])){
							echo '<img src="'.base64_decode($cnk['image']).'" style="border:solid 1px #eee;padding:5px;margin:15px;float:left;"/>';
						}
					?>
					<input type="file" class="form-control" name="file" style="padding: 3px 12px;" <?php if(!empty($req)){ echo $req; }?>>
				</div>	
				<?php echo $p_button; ?>
			</form>
		</div>
		<div class="col-sm-4">
		  
			<form action="" method="post">
				<p>CV information</p>
				<div class="form-group">
				  <label>Select Option:</label>
				  <select name="type" class="form-control" required>
					<option value="">--select 0ne--</option>
					<option value="Work Experience">Work Experience</option>
					<option value="Education">Education</option>
				  </select>
				</div>
				<div class="form-group">
				  <label>job title / Institute name:</label>
				  <input type="text" class="form-control" placeholder="job title / Institute name" name="w_j_title" required>
				</div>
				<div class="form-group">
				  <label>start-end date / Qualification:</label>
				  <input type="text" class="form-control" placeholder="start-end date / Qualification" name="d_q" required>
				</div>
				<div class="form-group">
				  <label>Description:</label>
				  <textarea class="form-control" placeholder="Description" name="description" required></textarea>
				</div>				
				<button name="add" type="submit" class="btn btn-default">Add</button>
			</form>
			
			<table class="table table-bordered" style="margin-top:20px;">
			<?php
				$query = $mysqli->query("select * from content where a_id = '".$_SESSION['profile_session']."'");
				while($row = mysqli_fetch_assoc($query)){
			?>
				  <tr>
					<td>
						<?php echo $row['type']; ?><hr style="margin:0px;border:solid 1px #eee;"/>
						<?php echo base64_decode($row['content_one']); ?><hr style="margin:0px;border:solid 1px #eee;"/>
						<?php echo base64_decode($row['content_two']); ?><hr style="margin:0px;border:solid 1px #eee;"/>
						<?php echo base64_decode($row['content_three']); ?>
					</td>
					<td>
						<a href="index.php?page=profile&content_delete_id=<?php echo $row['id']; ?>">delete</a>
					</td>
				  </tr>
			<?php } ?>	  
			</table>
		</div>
		
		<div class="col-sm-4">
		  
			<form action="" method="post">
				<p>Skill information</p>

				<div class="form-group">
				  <label>Skill Name:</label>
				  <input type="text" class="form-control" placeholder="Skill Name" name="skill" required>
				</div>			
				<button name="add_skill" type="submit" class="btn btn-default">Add skill</button>
			</form>
			<table class="table table-bordered" style="margin-top:20px;">
			<?php
				$query = $mysqli->query("select * from skill where a_id = '".$_SESSION['profile_session']."'");
				while($row = mysqli_fetch_assoc($query)){
			?>
				  <tr>
					<td>
						<?php echo base64_decode($row['content']); ?>
					</td>
					<td>
						<a href="index.php?page=profile&skill_delete_id=<?php echo $row['id']; ?>">delete</a>
					</td>
				  </tr>
			<?php } ?>	  
			</table>
		</div>
	</div>
</div>
