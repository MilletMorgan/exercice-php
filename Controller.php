<?php

include 'Model.php';

function showTableRegion($bdd)
{
    $option = '';
    $result = getTableReg($bdd);

    while ($data = $result->fetch()) {
        $option .= '<option value = "' . $data['region'] . '">' . $data['region'] . '</option>';
    }

    $result->closeCursor();
    echo $option;
}

function showTableDepartement($bdd)
{
    $option = '';
    $result = getTableDep($bdd);

    while ($data = $result->fetch()) {
        $option .= '<option value = "' . $data['nom'] . '">' . $data['nom'] . '</option>';
    }

    $result->closeCursor();
    echo $option;
}

function showTableNafSection($bdd)
{
    $option = '';
    $result = getTableNafSec($bdd);

    while ($data = $result->fetch()) {
        $option .= '<option value = "' . $data['section_libelle'] . '">' . $data['section_libelle'] . '</option>';
    }

    $result->closeCursor();
    echo $option;
}

function showTableNafDivision($bdd)
{
    $option = '';
    $result = getTableNafDiv($bdd);

    while ($data = $result->fetch()) {
        $option .= '<option value = "' . $data['division_libelle'] . '">' . $data['division_libelle'] . '</option>';
    }

    $result->closeCursor();
    echo $option;
}
