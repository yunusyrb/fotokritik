<?php

session_start();
if(($_SESSION['kullaniciadi']) and ($_SESSION['sifre']))
	{  
		session_start();
		$_SESSION["oturum"]=false;
	}
	session_unset('oturum');
	session_destroy();
		echo "Ana sayfaya yönlendiriliyorsunuz.";
		header("location:index.php");
		
?>