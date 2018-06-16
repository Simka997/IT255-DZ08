<html>
  <meta charset="UTF-8">
  <meta name="opis" content="IT255-DZ02">
  <meta name="autor" content="Simonida Mirkovic 3051">
  <head>
  	<title>  "Cataleya" kuća cveća </title>
	<link rel="icon" type = "image/jpg" href="img/logo.jpg" />
	<link rel="stylesheet" type="text/css" href="css/css-pocetna.css">
  </head>

<body >
	<header>
		<div class="Zaglavlje">
			<a href="PocetnaStrana.php"><img id="pozadinska" src="img/pozadinska.jpg"></a>
			<section id="navigacija">
				<div class="Ponude">
					<nav>
						<ul id ="ListaPonuda">
							<li><a href="O nama.html">O nama</a></li>
							<li><a href="">Asortiman</a></li>
							<li><a href="">Saksijsko cveće</a></li>
							<li><a href="">Sobno cveće</a></li>
							<li><a href="">Uslovi kupovine</a></li>
						</ul>
						<ul id ="ListaPonuda">
                         
                       
                         <?php
session_start();
include("php/db-functions.php");



if(isset($_POST['submit'])){
    $user= $_POST['user'];
$sifra = $_POST['sifra'];
    $check = checkLogIn($user,$sifra);
    if($check){
        $_SESSION['username'] = $user;
      echo "Dobrodosli ".$user;
    }
    else{
        echo "Pogresan username ili password!";
    }
}
else if(isset($_POST['reg'])){
    $user= $_POST['user'];
$sifra = $_POST['sifra'];
    $checkUser = checkAlreadyExistUsername($username);

    if($checkUser==1){
        echo "Ovaj username vec postoji!";
    } 
       
    else if (!empty($user) && !empty($sifra)){
        addUser($user,$sifra);
        $_SESSION['user'] = $user;
       echo "Dobrodosli ".$user;
    }

}else{
   
    echo "<form action=\"PocetnaStrana.php\" method=\"POST\">
    <li><input id=\"login\" name=\"user\" type=\"text\" placeholder=\"Korisničko ime\"></li>
<li><input id=\"login\" name=\"sifra\"  type=\"text\"  placeholder=\"Šifra\"></li>
<li><button type=\"submit\" name=\"submit\">Uloguj se</li>
<li><button type=\"submit\" name=\"reg\">Registruj se</li></form></li>";
}?>

						<li><input id="pretraga"  type="text" placeholder="Pretraži"></li>
				</ul>
					</nav>
				</div>
			</section>	
		</div>;
	</header>
			<article id="centralni">
				<div class = "box">
					<video src="video/video1.mp4" controls type="video/mp4">Greska pri ocitavanju </video>
					<h2><em>Lep poklon za Vašu dragu osobu</em></h2>
				</div>
				<div class = "box">
					<video src="video/video2.mp4" controls type="video/mp4">Greska pri ocitavanju </video>
					<h2><em>Mešavina cveća, igra bojama</em></h2>
				</div>
				<div class = "box">
					<video src="video/video3.mp4" controls type="video/mp4">Greska pri ocitavanju </video>
					<h2><em>Lep poklon za Vašu dragu osobu</em></h2>
				</div>
				<div class = "box">
					<video src="video/Kako se pravi bidermajer.mp4" controls type="video/mp4">Greska pri ocitavanju </video>
					<h2><em>Izrada bidermajera</em></h2>
				</div>
				</div>				
			</article>		
		<div class = "clr">

		</div>
		<footer>
	<p ><br /><br />Copyright &copy; 2018. Kuća cveća Cataleya. Sva prava zadržana.</p>
</footer>
</body>
</html>