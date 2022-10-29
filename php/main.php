<?php
include 'connect.php';

$db = connect();

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

function search($query) {
    global $db;
    $query = str_replace("+", " ", $query);
    $sql = "SELECT * FROM informationen WHERE titel LIKE ? or identifier LIKE ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("ss", $query, $query);
    $stmt->execute();
    $result = $stmt->get_result();
    $titles = [];
    $contents = [];
    $identifiers = [];
    $i = 0;
    // For every result, add the title, content and identifier to the array
    while ($data = $result->fetch_assoc()) {
        $identifier = $data['identifier'];
        $title = $data['titel'];
        $content = $data['inhalt'];
        $identifiers[$i] = $identifier;
        $titles[$i] = $title;
        $contents[$i] = $content;
        $i++;
    }
    return [$identifiers, $titles, $contents];
}