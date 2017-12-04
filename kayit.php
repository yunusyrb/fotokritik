<?php
include("ayar.php");
$adsoyad=trim($_POST['adsoyad']);
$kullanici=trim($_POST['kullanici']);
$sifre=trim($_POST['sifre']);
$email=trim($_POST['email']);

if($adsoyad =="" || $kullanici=="" || $sifre=="" ||  $email=="" )
{
	echo "Lütfen boş yer bırakmayınız.";
}
else
{
	$sorgu="INSERT INTO uyeler(AdSoyad,KullaniciAdi,Eposta,Sifre) VALUES('$adsoyad','$kullanici','$email','$sifre')";
	$sorgula=mysqli_query($baglan,$sorgu);
	if($sorgula){
		
		header("location:login.php");
		}
	else
		echo "Üyelik işlemleriniz başarıyla tamamlanamamıştır.";
}
?>