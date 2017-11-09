<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Landing page</title>
</head>
<body>
	<div class="jumbotron" style ="background: linear-gradient(#c90b0b, #fc5e21);">
		<h1 style ="text-align:center; color : #ffffff;font-family : Samarkan;">DEEVAIDEE</h1>
		<p style ="text-align:center; color : #97ecdb;font-family : Comfortaa;">brigitte est un système de gestion de location de dvd commun à 4 société</p>
	</div>

		<h2 style ="text-align:center; color : #879528;font-family : Samarkan;">Liste des sociétés</h2>
<div class="row">
<?php foreach ($query as $row): ?>

	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <div class="caption" style="background:linear-gradient(#c90b0b, #fc5e21);">
					<img src="/assets/img/societe<?= $row->numS ?>.png" style = "max-width: 100%;" >
					<h3 style ="color : #70146a;font-family : Samarkan;"><?= $row->nomS;?></h3>
						<p style="font-family : Comfortaa;">adresse : <?= $row->rueS.' '.$row->villeS;?></p>
						<p style="font-family : Comfortaa;">Directeur : <?= $row->directeurS;?></p>
					</div>
    	</div>
  	</div>

<?php endforeach; ?>
</div>

<link href="starter-template.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
