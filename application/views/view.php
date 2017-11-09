<html lang="en">
<body>
  <div class="row" >
  <div class="col-sm-6 col-md-4" style ="left: 33%; ">
    <div class="thumbnail" >
  <img src="/assets/img/dvd<?= $Dvd['numD'] ?>.jpg" >
      <div class="caption" >
        <h3>Titre : <?= $Dvd['titreD'];?></h3>
  <p>Réalisateur : <?= $Dvd['auteurD'];?></p>
  <p>Résumé : <?= $Dvd['resumeD'];?></p>
  <p>Année de sortie : <?= $Dvd['annéeD'];?></p>
  <p>Catégorie : <?= $Dvd['catégorieD'];?></p>
  <p>Nombre d'exemplaire disponible : <?= $Dvd['nombreD'];?></p>
  <p>Société propriaitaire : <?= $Dvd['societeD'];?></p>
  <p><a href="#" class="btn btn-primary" role="button">Louer</a> </p>
      </div>
    </div>
  </div>
</div>

</body>
