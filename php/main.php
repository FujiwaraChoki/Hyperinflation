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
    "hyperinflation"
);

if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
    exit();
}



function get_text() {
    global $db;
    $sql = "SELECT * FROM informationen";
    $result = $db->query($sql);
    return $result->fetch_assoc()['inhalt'];
}