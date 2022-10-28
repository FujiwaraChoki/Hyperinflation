<?php
// hyperinflation123: password
/*
$mysqli = new mysqli(
    "fdb32.awardspace.net",
    "4107526_hyperinflation	",
    "hyperinflation123",
    "4107526_hyperinflation"
);*/

$db = new mysqli(
    "localhost",
    "root",
    "",
    ""
);

if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

