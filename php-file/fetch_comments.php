<?php
global $conn;
include 'db_connection.php';

$result = $conn->query("SELECT * FROM comments ORDER BY id DESC");

$comments = array();
while ($row = $result->fetch_assoc()) {
    $comments[] = $row;
}

echo json_encode($comments);

$conn->close();
?>
