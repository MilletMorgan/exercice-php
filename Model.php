<?php

include 'ConnectDBLocal.php';

function getTableReg($bdd)
{
    $response = $bdd->query('SELECT * FROM departement');

    return $response;
}

function getTableDep($bdd)
{
    $response = $bdd->query('SELECT * FROM departement');

    return $response;
}

function getTableNafSec($bdd)
{
    $response = $bdd->query('SELECT * FROM naf');

    return $response;
}

function getTableNafDiv($bdd)
{
    $response = $bdd->query('SELECT * FROM naf');

    return $response;
}

function getCpByNom($bdd, $nomDep)
{
    $response = $bdd->query("SELECT cp FROM departement WHERE nom ='" . $nomDep . "'");

    return $response;
}

function getEffectifByCp($bdd, $cp)
{
    $response = $bdd->query("SELECT SUM(EFF_TOT), DEP FROM effectifs WHERE '" . (int)$cp . "' != DEP ");

    return $response;
}
