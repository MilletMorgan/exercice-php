<?php

/**
 *         "SELECT " . 'cp,' . "SUBSTR(CODGEO, 1, 2)
 * FROM " . 'departement, effectifs' .
 * "WHERE SUBSTR(CODGEO, 1, 2) = cp"
 */

include 'ConnectDBLocal.php';

function getTableRegDep($bdd)
{
    $response = $bdd->query('SELECT * FROM departement');

    return $response;
}

function getTableNaf($bdd)
{
    $response = $bdd->query('SELECT * FROM naf');

    return $response;
}

function getCpByNom($bdd, $nomDep)
{
    $response = $bdd->query("SELECT cp FROM departement WHERE nom ='" . $nomDep . "'");

    return $response;
}

function getEffTotByCp($bdd, $cp)
{
    $response = $bdd->query("SELECT EFF_TOT FROM effectifs WHERE DEP ='" . $cp . "'");

    return $response;
}

/**
 *
 * function getCp($bdd)
 * {
 * $response = $bdd->query("SELECT * FROM " . 'departement');
 *
 * return $response;
 * }
 *
 * function getCodeGeo($bdd)
 * {
 * $response = $bdd->query("SELECT * FROM " . 'effectifs');
 *
 * return $response;
 * }
 *
 * **/


function getEffectifsByCODGEO($bdd, $codgeo)
{
    $response = $bdd->query(
        "SELECT " . 'EFF_TOT' .
        " FROM " . 'effectifs' .
        " WHERE " . 'CODGEO' . " = " . $codgeo
    );

    /**
     * .
     * " INNER JOIN " . 'departement' . "ON" . 'effectifs.CODGEO' . "=" . 'departement.CODGEO' .
     * " WHERE SUBSTR(" . 'CODGEO' . ", 0, 1) =" . '01')
     *
     *  .
     * " INNER JOIN " . 'departement' . "ON" . 'effectifs.CODGEO' . "=" . 'cp.CODGEO' .
     * " WHERE " . 'CODGEO' . "=" . 'cp'
     **/
    return $response;
}




