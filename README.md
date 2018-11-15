# Dynamic-cv-template-using-PHP
Total project using MySQLi, HTML, CSS, JavaScript &amp; Developed by PHP
All programe use by PHP
//------Using-------


//PHP
include
if.......else---------
while(){}

$_SESSION[];
$_POST[];
$_GET[]

mysqli_query();
mysqli_fetch_assoc();
mysqli_connect();
mysqli_select_db();
//Mysqli
MySQLi INSERT QUERY
MySQLi SELECT QUERY
MySQLi DELETE QUERY
MySQLi UPDATE QUERY


<?php
include("config/config.php");
$page = '';
if(isset($_GET['page'])){
	$page = $_GET['page'];
}
echo '<!DOCTYPE html><html lang="en"><head>';
	include("include/meta.php");
	include("include/title.php");
	include("include/css.php");
echo '</head><body>';
	include("include/nav.php");
echo '<div class="w3-content" style="max-width:2000px;margin-top:46px">';	
	if($page == 'signin'){
		if(!isset($_SESSION['profile_session'])){
			include("template/signin.php");
		}else{
			echo "<script>window.open('index.php','_self')</script>";
		}	
	}elseif($page == 'signup'){
		if(!isset($_SESSION['profile_session'])){
			include("template/signup.php");
		}else{
			echo "<script>window.open('index.php','_self')</script>";
		}
	}elseif($page == 'profile'){
		if(!isset($_SESSION['profile_session'])){
			echo "<script>window.open('index.php','_self')</script>";
		}else{
			include("template/profile.php");
		}
	}elseif($page == 'view_cv'){
		include("template/cv.php");
	}elseif($page == 'logout'){
		unset($_SESSION['profile_session']);
		echo "<script>window.open('index.php','_self')</script>";
	}else{
		include("include/article.php");
		include("include/contact.php");
	}	
echo '</div>';	
	include("include/footer.php");
	include("include/js.php");
echo '</body></html>';	
?>
