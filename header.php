<header>
		<div class="logo"><img src="img/logo.png" height="50" width="200" "  alt=""></div>
		<div class="menu">
			<ul>
				<li><a href="">Fotoğraflar</a>
					<ul>
						<li><a href="">Popüler</a></li>
						<li><a href="">Yeni</a></li>
						<li><a href="">Editör</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="menuu">Forum</div>
		<div class="menu">
			<ul>
            	<li><a href="">Kategoriler</a>
                	<ul>
	                    <li><a href="footer.php">Doğa</a></li>
	                    <li><a href="forum.php">Çeşitli</a></li>
	                    <li><a href="">Kavramsal</a></li>
	                    <li><a href="">Manzara</a></li>
                	</ul>
            	</li>
        	</ul>
        	<div style="clear: both"></div>
		</div>
		<div class="menuu"><input type="file"></div>
		<?php 
			if(!isset($_SESSION)) 
			    { 
			session_start();
			}        
				include("oturum.php");
		?>
		<div class="arama-kutusu">
			<input type="search" placeholder="Ara">
		</div>
	</header>