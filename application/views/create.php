<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?= validation_errors(); ?>



        <?=form_open('Louer/add');
?>
<h1>Formulaire de DVD</h1>
        <table>
          <tr>

              <td><input type="hidden"  name="numD" value="<?= $Dvd['numD']; ?>" ></td>
          </tr>
            <tr>
                <td><label for="titreD">Titre : </label></td>
                <td><input type="input" name="titreD" value="<?= $Dvd['titreD']; ?>"></td>
            </tr>
            <tr>
                <td><label for="auteurD">Auteur : </label></td>
                <td><input type="auteurD" name="auteurD" value="<?= $Dvd['auteurD']; ?>"></td>
            </tr>
            <tr>
                <td><label for="annéeD">Date de sortie : </label></td>
                <td><input type="input" name="annéeD" value="<?= $Dvd['annéeD']; ?>"></td>
            </tr>
            <tr>
                <td><label for="catégorieD">Catégorie : </label></td>
                <td><input type="input" name="catégorieD" value="<?= $Dvd['catégorieD']; ?>"></td>
            </tr>

            <tr>
                <td><label for="nombreD">Nombre d'exemplaire disponible : </label></td>
                <td><input type="input" name="nombreD" value="<?= $Dvd['nombreD']; ?>"></td>
            </tr>
            <tr>
                <td><label for="societeD">Propriétaire : </label></td>
                <td><input type="input" name="societeD" value="<?= $Dvd['societeD']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Valider"/></td>
            </tr>
        </table>
    </body>
</html>
