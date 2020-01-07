<?php
	$strTitle = "Accueil";
	$strPage  = "Index";
	include 'header.php';
	include 'articles_tableau.php';
	//var_dump($arrArticles);
?>
			<h2>Accueil</h2>
			<p>Page affichant les 4 derniers articles</p>
<?php
	$index = 0;
	foreach ($arrArticles as $arrDetArticle){
		//var_dump($arrDetArticle);die; pour appeler le tableau et arrêter son affichage
	include 'article.php';
	$index++;
	if ($index>3){
	break;
	}
	}
	
include 'footer.php';