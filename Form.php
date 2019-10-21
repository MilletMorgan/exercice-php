<?php
include 'Controller.php';

$nomDep = $_POST['departement-select'];

$result = getCpByNom($bdd, $nomDep);
$cp = '';

while ($data = $result->fetch()) {
    $cp .= '<p> département numéro : ' . $data['cp'] . '</p>';
}

echo $cp;

$effectifByCp = getEffectifByCp($bdd, $cp);
$effectif = '';
$Edep = '';

while ($data = $effectifByCp->fetch()) {
    var_dump($data);
    $effectif = $data['SUM(EFF_TOT)'];
    $Edep = $data['DEP'];
}

$result->closeCursor();
echo $effectif;
echo $Edep;