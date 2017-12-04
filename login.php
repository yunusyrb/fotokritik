<?php
include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Türkiye'nin Fotoğraf Portfolyosu | FotoKritik </title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<center>
		<div>
			<form method="POST" action="uye_giris_islemleri.php">
			<table width="400"  cellspacing="2" cellpadding="2">
			<tr>
				<td colspan="2"><center>GİRİŞ FORMU</center></td>
			</tr>
			<tr>
				<td>Kullanıcı Adınız:</td>
				<td><input type="text" name="kullanici" size="20" /></td>
			</tr>
			<tr>
				<td>Şifre:</td>
				<td><input type="password" name="sifre" size="20" /></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="button" value="GİRİŞ YAP"> veya <a href="uyelik_formu.php"> Kayıt Ol </a></td>
			</tr>
			</table>
			</form>
		</div>
	</center>
</body>
</html>
<?php
include "footer.php";
?>