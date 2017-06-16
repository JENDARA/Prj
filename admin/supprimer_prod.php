<?php
	$bdd= new PDO('mysql:host=localhost;dbname=le_store;charset=utf8', 'root', '');
	session_start();
	echo $_GET['id_proda'];
	$req="DELETE FROM produit WHERE id_produit=".$_GET['id_proda']." ;";
	echo $req;
	$bdd->supp($rep);
	echo '<meta http-equiv="Refresh" content="0;url=../admin.php">';

?>