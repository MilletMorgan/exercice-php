<?php

include 'Model.php';

function showDep($dataName, $bdd, $table)
{
    $option = '';
    $result = getDep($bdd, $table);

    while ($data = $result->fetch()) {
        $option .= '<option value = "' . $data[$dataName] . '">' . $data[$dataName] . '</option>';
    }

    $result->closeCursor();
    echo $option;
}

function showEffTot($bdd, $cp) {
    $result = getEffTotByCp($bdd, $cp);
    $effTot = 0;

    while ($data = $result->fetch()) {
        $effTot += $data['EFF_TOT'];
    }

    $result->closeCursor();
    echo $effTot;
}

function showEffectifsByCODGEO($bdd, $codegeo)
{

    $result = getEffectifsByCODGEO($bdd, $codgeo);
    $cp = '';

    while ($data = $result->fetch()) {
        $cp .= '<p>' . $data['EFF_TOT'] . '</p>';
    }


    $result->closeCursor();
    echo $cp;
}
