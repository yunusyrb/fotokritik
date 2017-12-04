<?php
include("ayar.php");
if(!isset($_SESSION))
	session_start();
?>

 <div class="">
<ul style="list-style:none;margin-left:0;margin-right:10px;">
	
	<?php
		if(isset($_SESSION['oturum'])){
			$kullanici=$_SESSION['kullaniciadi'];	

			$sor=mysqli_query($baglan,"SELECT * FROM uyeler WHERE KullaniciAdi='$kullanici'");
			$yaz=mysqli_fetch_array($sor);

			$id=$yaz['Id'];
			
			echo '<div class="menu2">
					<ul>
						<li><a href="profil.php?id='.$id.'">'.$_SESSION["kullaniciadi"].'</a>
							<ul>
								<li><a href="">Ayarlar</a></li>
								<li><a href="">Galeri</a></li>
								<li><a href="cikis.php">Çıkış</a></li>
							</ul>
						</li>
					</ul>
				  </div>
				  ';
		}
		else
		{
			echo '<div class="giris"><a href="login.php">Giriş Yap</a></div>
				  <div class="cizgi">|</div>
				  <div class="uyelik"><a href="kayitol.php">Üye Ol</a></div>
			';
		}
		?>
		</ul>
	</div>
			<?php
				/*<a href="profil.php?id='.$id.'">
			<li class="giris">'.$_SESSION["kullaniciadi"].'</li>
			</a>
			<li class="uyelik"><a href="cikis.php"> Çıkış </a></li>*/
			?>
			