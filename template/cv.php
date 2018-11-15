<?php
if(!empty($_GET['user_id'])){
$get_user = mysqli_fetch_assoc($mysqli->query("select * from registration where email = '".$_GET['user_id']."'"));
$profile = mysqli_fetch_assoc($mysqli->query("select * from profile where a_id = '".$get_user['email']."'"));
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo base64_decode($get_user['name']); ?> - Curriculum Vitae</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
<meta charset="UTF-8"> 

<link type="text/css" rel="stylesheet" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>
</head>
<body id="top">
<div id="cv" class="instaFade">
	<div class="mainDetails">
		<div id="headshot" class="quickFade">
			<?php if(!empty($profile['image'])){ ?>
				<img src="<?php echo base64_decode($profile['image']); ?>" alt="<?php echo base64_decode($get_user['name']); ?>" />
			<?php }else{ ?>
				<img src="img/headshot.jpg" alt="<?php echo base64_decode($get_user['name']); ?>" />
			<?php } ?>
		</div>
		
		<div id="name">
			<h1 class="quickFade delayTwo"><?php echo base64_decode($get_user['name']); ?></h1>
			<h2 class="quickFade delayThree"><?php echo base64_decode($profile['job_title']); ?></h2>
		</div>
		
		<div id="contactDetails" class="quickFade delayFour">
			<ul>
				<li>Email: <a href="mailto:<?php echo base64_decode($get_user['email']); ?>" target="_blank"><?php echo base64_decode($get_user['email']); ?></a></li>
				<li>web: <a href="<?php echo base64_decode($profile['w_address']); ?>"><?php echo base64_decode($profile['w_address']); ?></a></li>
				<li>Cell: <?php echo base64_decode($profile['mobile']); ?></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	
	<div id="mainArea" class="quickFade delayFive">
		<section>
			<article>
				<div class="sectionTitle">
					<h1>Personal Profile</h1>
				</div>
				
				<div class="sectionContent">
					<p><?php echo base64_decode($profile['summery']); ?></p>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Work Experience</h1>
			</div>
			
			<div class="sectionContent">
			<?php
				$query = $mysqli->query("select * from content where type = 'Work Experience' and a_id = '".$get_user['email']."'");
				while($row = mysqli_fetch_assoc($query)){
			?>
				<article>
					<h2><?php echo base64_decode($row['content_one']); ?></h2>
					<p class="subDetails"><?php echo base64_decode($row['content_two']); ?></p>
					<p><?php echo base64_decode($row['content_three']); ?></p>
				</article>
			<?php } ?>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Key Skills</h1>
			</div>
			
			<div class="sectionContent">
				<ul class="keySkills">
			<?php
				$query = $mysqli->query("select * from skill where a_id = '".$get_user['email']."'");
				while($row = mysqli_fetch_assoc($query)){
			?>
					<li><?php echo base64_decode($row['content']); ?></li>
			<?php } ?>
				</ul>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Education</h1>
			</div>
			
			<div class="sectionContent">
			<?php
				$query = $mysqli->query("select * from content where type = 'Education' and a_id = '".$get_user['email']."'");
				while($row = mysqli_fetch_assoc($query)){
			?>
				<article>
					<h2><?php echo base64_decode($row['content_one']); ?></h2>
					<p class="subDetails"><?php echo base64_decode($row['content_two']); ?></p>
					<p><?php echo base64_decode($row['content_three']); ?></p>
				</article>
			<?php } ?>
				

			</div>
			<div class="clear"></div>
		</section>
		
	</div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3753241-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>
<?php } ?>