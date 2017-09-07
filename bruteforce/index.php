<?php
	if(isset($_GET["password"])){
		$pwd = $_GET["password"];

	    $key = pack('H*', "bcb04b7e103a0cd8b54763051cdf08bc55abe099fdebae5e1d417e2ffb2a00a3");
	    $key_size =  strlen($key);
	    $iv = file_get_contents('iv.txt');
	    
	    $ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key,
	                                 $pwd, MCRYPT_MODE_CBC, $iv);


	    $goodcipher = file_get_contents('cipher.txt');
		if($ciphertext == $goodcipher){
				echo "<iframe width='420' height='315' src='https://www.youtube.com/embed/kxopViU98Xo' frameborder='0' allowfullscreen></iframe>";
		}
		else{
				echo "<div style='color:red; font-size:18px'>Erroneous password</div>";
		}
	}
	else {
		echo "Undefined password";
	}
?>

