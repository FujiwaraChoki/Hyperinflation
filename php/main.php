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

/*
 * Functions
*/

function get_text_by_id($id_input) {
    global $db;
    $sql = "SELECT * FROM informationen WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i", $id_input);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc()['inhalt'];
}

function get_article_by_identifier($subject) {
    global $db;
    $sql = "SELECT * FROM informationen WHERE identifier = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $subject);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $identifier = $data['identifier'];
    $title = $data['titel'];
    $content = $data['inhalt'];
    return [$identifier, $title, $content];
}