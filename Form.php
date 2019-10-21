<?php
include 'Controller.php';


$nomDep = $_POST['departement-select'];

$result = getCpByNom($bdd, $nomDep);
$cp = '';

while ($data = $result->fetch()) {
    $cp .= '<p>' . $data['cp'] . '</p>';
}

echo $cp;

//$codegeo = getCODGEOByCp($bdd, $cp);
//$cg = '';
//
//while ($codegeo = $codegeo->fetch()) {
//    $cg .= '<p>' . $data['DEP'] . '</p>';
//}
//echo $cg;

showEffTot($bdd, $cp);

