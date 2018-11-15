<?php
if(isset($_POST['submit'])){	
	$name = $_POST['name'];	
	$email = $_POST['email'];	
	$subject = $_POST['subject'];	
	$message = $_POST['message'];
	$pn = 'n/a';
	$body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message . "\n\n" . 'Phone Number:' . $pn;	
	$sent_email = "pabitro12@gmail.com";
	if(mail($sent_email, $subject, $body, "From: $email")){	 
		$info = "The Mail Sent Successfully !";	 
	}else{
		$info = "The Mail dosen't Sent Successfully !";
	}
}
?>
<div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Dhaka, Bangladesh<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +880 17575 46680<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: rahat.tusher629@gmail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="" method="post">
		<p style="color:#f00;text-align:center;"><?php if(!empty($info)){ echo $info; }?></p>
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="email" placeholder="Email" required name="email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Subject" required name="subject">
		  <br />
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="message">
          <button name="submit" class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>