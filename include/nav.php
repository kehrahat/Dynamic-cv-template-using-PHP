<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="index.php#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">Account <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
	  <?php if(!isset($_SESSION['profile_session'])){ ?>
		<a href="index.php?page=signin" class="w3-bar-item w3-button">SignIn</a>
        <a href="index.php?page=signup" class="w3-bar-item w3-button">SignUp</a>
	  <?php }else{ ?>        
		<a href="index.php?page=profile" class="w3-bar-item w3-button">Profile</a>
        <a href="index.php?page=logout" class="w3-bar-item w3-button">Logout</a>
	  <?php } ?>	
      </div>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
  <?php if(!isset($_SESSION['profile_session'])){ ?>  
  <a href="index.php?page=signin" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">SignIn</a>
  <a href="index.php?page=signup" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">SignUp</a>
  <?php }else{ ?>
  <a href="index.php?page=profile" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Profile</a>
  <a href="index.php?page=logout" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Logout</a>
  <?php } ?>
</div>