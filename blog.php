<?php
	$strTitle = "Articles";
	$strPage  = "Blog";
	include 'header.php';
	include 'articles_tableau.php';
?>
			<h2>Les articles</h2>
			<p>Page affichant tous les articles, avec une zone de recherche sur les articles</p>
			<form name="formSearch" method="post" action="#">
				<fieldset>
					<legend>Rechercher des articles</legend>
					<p><label for="keywords">Mots clés</label><input id="keywords" type="text" name="keywords" /></p>
					<p>	<input type="radio" name="period" checked value="0" onclick="changePeriod()" /> Par date exacte
						<input type="radio" name="period" value="1" onclick="changePeriod()" /> Par période
					</p>
					<p id="uniquedate">
						<label for="date">Date</label><input id="date" type="date" name="date" />
					</p>
					<p id="period">
						<label for="startdate">Date de début</label><input id="startdate" type="date" name="startdate" />
						<label for="enddate">Date de fin</label><input id="enddate" type="date" name="enddate" />
					</p>
					<p><input type="submit" value="Rechercher" /> <input type="reset" value="Réinitialiser" />
				</fieldset>
			</form>
			

<?php

	foreach ($arrArticles as $arrDetArticle){
		//var_dump($arrDetArticle);die; pour appeler le tableau et arrêter son affichage
	include 'article.php';
	
	}
	
	include 'footer.php';
