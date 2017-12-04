<?php
include "ayar.php";	
include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
		<title>Türkiye'nin Fotoğraf Portfolyosu | FotoKritik </title>
		<link rel="stylesheet" href="css/style.css" type="text/css">	
</head>
<body><center>
	<div class="kayitformu">
		<form  method="post" action="kayit.php">
			<table width="400"  cellspacing="2" cellpadding="2">
			<tr>
				<td colspan="2"><center>ÜYELİK FORMU</center></td>
			</tr>
			<tr>
				<td>Adınız Soyadınız:</td>
				<td>
						<input type="text" name="adsoyad" />
				</td>
			</tr>
			<tr>
				<td>Kullanıcı Adınız:</td>
				<td><input type="text" name="kullanici" /></td>
			</tr>
			<tr>
				<td>EMail Adresi:</td>
				<td><input type="email" name="email"  /></td>
			</tr>
			<tr>
				<td>Şifre:</td>
				<td><input type="password" name="sifre"  /></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="button" value="ÜYE OL"></td>
			</tr>
			</table>
		</form>
	</center>
</body>
</html>
<?php
include "footer.php";	
?>