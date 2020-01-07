</main>

<footer>
			<p>Copyright - 	<a href="http://www.facebook.fr/"><i class="fab fa-facebook-square"></i></a> 
							<a href="http://linkedin.com"><i class="fab fa-linkedin"></i></a>
							<a href="http://twitter.com"><i class="fab fa-twitter-square"></i></a>
			</p>
			<p><a href="mentions.php">Mentions légales</a> - 
			<a href="contact.php">Contact</a></p>
		</footer>
	
	<?php if ($strPage =='Index'){ ?>
														 
		<script>
			taille = 200;
			if(document.body.clientWidth < 900){
				taille = 100;
			}
			arrContent = document.getElementsByClassName("content");
			for (i=0; i<arrContent.length;i++){
				texte = arrContent[i].innerHTML
				arrContent[i].innerHTML = texte.substr(0, taille)+"...";
			}
		</script>
    <?php } else if ($strPage =='Blog'){ ?>
		<script>
			changePeriod();
		</script>
	<?php } else if ($strPage =='Create_account'){?>
	
			<script>
				taille = 200;
				if(document.body.clientWidth < 900){
					taille = 100;
				}
				arrContent = document.getElementsByClassName("content");
				for (i=0; i<arrContent.length;i++){
					texte = arrContent[i].innerHTML
					arrContent[i].innerHTML = texte.substr(0, taille)+"...";
				}
			</script>
	<?php } else if ($strPage =='Login'){ ?>
		
		<script>
			taille = 200;
			if(document.body.clientWidth < 900){
				taille = 100;
			}
			arrContent = document.getElementsByClassName("content");
			for (i=0; i<arrContent.length;i++){
				texte = arrContent[i].innerHTML
				arrContent[i].innerHTML = texte.substr(0, taille)+"...";
			}
		</script>
	<?php } ?>
		
	</body>
</html>