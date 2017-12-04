<?php 
session_start();
include "ayar.php";



if($_POST){
	
$kullanici=trim($_POST['kullanici']);
$sifre=trim($_POST['sifre']);
if($kullanici=="" || $sifre=="")
{
	echo "Lütfen boş yer bırakmayınız.";
}
else
{
	$sorgu="SELECT * FROM uyeler WHERE KullaniciAdi='$kullanici' AND Sifre='$sifre'";
	$sorgula=mysqli_query($baglan,$sorgu);
	$kayittoplam=mysqli_num_rows($sorgula);
	if($kayittoplam>0){
		
		$bilgileriGetir=mysqli_fetch_array($sorgula);
		$_SESSION["kullaniciadi"]=$bilgileriGetir["KullaniciAdi"];
		//$_SESSION["kID"]=$bilgileriGetir["UyeId"];
		$_SESSION["oturum"]=true;
		header("location:index.php");
	}

}
	
}
?>
