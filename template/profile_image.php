<?php	function getExtension($str) {
			$i = strrpos($str,".");
			if (!$i) { return ""; } 
			$l = strlen($str) - $i;
			$ext = substr($str,$i+1,$l);
			return $ext;
		}function findexts ($filename){ 
			$ertr = md5($filename);
			$filename = strtolower($ertr) ; 
			$exts = strrpos(10000000000,$filename) ; 
			$n = count($exts)-1; 
			$exts = $exts[$n]; 
			return $exts; 
		}$ext = findexts ($_FILES['file']['name']) ;   
		$ran = rand() * rand() ;  							 
		define ("20000","10000");
		$image =$_FILES["file"]["name"];
        $uploadedfile = $_FILES['file']['tmp_name'];
        if($image){
            $filename = stripslashes($_FILES['file']['name']);
            $extension = strtolower(getExtension($filename));
            if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")){
                echo ' Unknown Image extension ';
            }else{
                $newname = "$ran."."$extension";
                if($extension=="jpg" || $extension=="jpeg" ){
                    $uploadedfile = $_FILES['file']['tmp_name'];
                    $src = imagecreatefromjpeg($uploadedfile);
                }else if($extension=="png"){
                    $uploadedfile = $_FILES['file']['tmp_name'];
                    $src = imagecreatefrompng($uploadedfile);
                }else{
                    $src = imagecreatefromgif($uploadedfile);
                }
                list($width,$height)=getimagesize($uploadedfile);
                $newwidth=91;
                $newheight=91;
                $tmp=imagecreatetruecolor($newwidth,$newheight);
                imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
                $post_file = "img/".$newname;
				$image_file = "img/".$newname;
                imagejpeg($tmp,$post_file ,100);
                imagedestroy($src);
                imagedestroy($tmp);
			} 
		}
?>