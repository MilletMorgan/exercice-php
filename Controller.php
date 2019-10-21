<?php

include 'Model.php';

function showTableRegion($bdd)
{
    $option = '';
    $result = getTableRegDep($bdd);

    while ($data = $result->fetch()) {
        $option .= '<option value = "' . $data['region'] . '">' . $data['region'] . '</option>';
    }

    $result->closeCursor();
    echo $option;
}

function showTableDepartement($bdd)
{
    $option = '';
    $result = getTableRegDep($bdd);

    while ($data = $result->fetch()) {
        $option .= '<option value = "' . $data['departement'] . '">' . $data['departement'] . '</option>';
    }

    $result->closeCursor();
    echo $option;
}

function showTableNafSection($bdd)
{
    $option = '';
    $result = getTableNaf($bdd);

    while ($data = $result->fetch()) {
        $option .= '<option value = "' . $data['section_libelle'] . '">' . $data['section_libelle'] . '</option>';
    }

    $result->closeCursor();
    echo $option;
}

function showTableNafDivision($bdd)
{
    $option = '';
    $result = getTableNaf($bdd);

    while ($data = $result->fetch()) {
        $option .= '<option value = "' . $data['division_libelle'] . '">' . $data['division_libelle'] . '</option>';
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
