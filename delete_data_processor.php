<?php
$conn = mysqli_connect('localhost', 'root','', 'php_ajax');
if (! $conn) {
    die(mysqli_connect_error());
}

$id = $_GET['id'];

$delete_query = "DELETE FROM `users` WHERE `id` = '$id'";

$delete_query_result = mysqli_query($conn, $delete_query);

if (!$delete_query_result) {
    echo "Error - deleteing data - " . mysqli_error($conn);
    exit;
}

echo "delete successful!!!";
exit;

?>
