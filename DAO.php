<?php

function connect()
{
    $mysqli = mysqli_connect('localhost', 'root', '', 'vente_en_ligne','3307');
    $mysqli->query('SET NAMES UTF8');
    return $mysqli;
}
