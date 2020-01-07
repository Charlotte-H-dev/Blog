<!DOCTYPE html>
<html lang='fr'>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Essentiel pour le responsive -->
        
        <title>BLOG - <?php echo $strTitle; ?></title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">    
		<link rel="stylesheet" href="styles/styles.css">
		<link rel="icon" type="image/png" href="images/logo.png" />	
		
		<?php if ($strPage =='Blog'){ ?>
		<script>
			function changePeriod(){
				if (document.formSearch.period.value == 1){
					document.getElementById("uniquedate").style.display = "none";
					document.getElementById("period").style.display 	= "block";
				}else{
					document.getElementById("period").style.display 	= "none";
					document.getElementById("uniquedate").style.display = "block";
				}
			}
		</script>
		<?php } ?>
		
		<?php if ($strPage =='Contact'){ ?>
		<script>
			function verifForm(){
				var arrElement 	= new Array("name", "surname", "mail", "subject", "content");
				var arrMessages = new Array("Le nom est obligatoire", "Le prénom est obligatoire", "Le mail est invalide", "Le sujet est obligatoire", "Le message est obligatoire");
				var texte_a_afficher 	= "";
				var message_class 		= "error";
				if (document.contactForm.captcha.value == ""){
					texte_a_afficher = "<p>Le captcha doit être renseigné</p>";
					document.contactForm.captcha.className = message_class;
				}
				if (document.contactForm.captcha.value != "W68HP"){
					texte_a_afficher = "<p>Le captcha est faux</p>";
					document.contactForm.captcha.className = message_class;
				}
				
				for (i=0; i<arrElement.length; i++){
					if (!document.getElementById(arrElement[i]).checkValidity()) {
						texte_a_afficher += "<p>"+arrMessages[i]+"</p>";
						document.getElementById(arrElement[i]).className = "error";
					}else{
						document.getElementById(arrElement[i]).className = "";
					}
				}
				if (texte_a_afficher == ""){
					texte_a_afficher = "Formulaire envoyé";
					message_class 	 = "valid";
				}
				var objMessage = document.getElementById("message");
				objMessage.innerHTML = texte_a_afficher;
				objMessage.className = message_class;
			}
		</script>
		<?php } ?>
    </head>
	<body>
		<header >
			<img id="logo" alt="logo" src="images/logo.png">
			<h1>Mon BLOG</h1>
			<div id="user">
				<a href="create_account.php" title="Se connecter"><i class="fas fa-user"></i></a>
				| 
				<a href="login.php" title="Se connecter"><i class="fas fa-sign-in-alt"></i></a> 
			</div>
			<nav>
				<img alt="burger_menu" src="images/burger.png" title="menu" />
				<ul>
					<li 
						<?php if ($strPage =='Index'){
								echo "class='active'";
						} ?> ><a href="index.php" title="Page d'accueil">Accueil</a></li>
					<li
						<?php if ($strPage =='About'){
								echo "class='active'";
						} ?> ><a href="about.php" title="A propos">A propos</a></li>
					<li
						<?php if ($strPage =='Blog'){
								echo "class='active'";
						} ?> ><a href="blog.php" title="Blog">Blog</a></li>
					<li 
						<?php if ($strPage =='Contact'){
								echo "class='active'";
						} ?> ><a href="contact.php" title="Contact">Contact</a></li>
				</ul>
			</nav>
		</header>
		<main>