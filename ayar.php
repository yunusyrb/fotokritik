<?php
$baglan=mysqli_connect('localhost','root','','fotokritik');
mysqli_set_charset($baglan,"utf8");
if($baglan)
	echo "";
else
	echo "Mysql'e ve fotokritik veritabanina baglanilamadi.<br/>"

?>