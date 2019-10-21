<?php include 'Controller.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercice php</title>
</head>
<body>

<form action="Form.php" method="post">
    <label for="region">Région</label>
    <select id="region-select">
        <option value="">Quelle région ?</option>
        <?php showTableRegion($bdd); ?>
    </select>

    <br><br>

    <label for="departement">Département</label>
    <select id="departement-select" name="departement-select">
        <option value="">Quelle département ?</option>

        <?php showTableDepartement($bdd); ?>

    </select>

    <br><br>

    <label for="section-naf">Section NAF</label>
    <select id="section-naf">
        <option value="">Quelle section ?</option>
        <?php showTableNafSection($bdd); ?>
    </select>

    <br><br>

    <label for="division-naf">Division NAF</label>
    <select id="division-naf">
        <option value="">Quelle division ?</option>
        <?php showTableNafDivision($bdd); ?>
    </select>

    <br><br>

    <button type="submit">Envoie</button>

</form>

<p>Le nombre d'effectif selon vos critères de recherche : </p>

<br>

<p>Selon la valeur du marché : </p>
</body>
</html>