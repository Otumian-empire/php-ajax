<?php
$conn = mysqli_connect('localhost', 'root','', 'php_ajax');
if (! $conn) {
    die(mysqli_connect_error());
}

$id = $_GET['id'];
$name = $_GET['name'];
$email = $_GET['email'];
$number = $_GET['number'];

$update_query = "UPDATE `users` SET `name` = '$name', `email` = '$email', `number` = '$number' WHERE `id` = '$id'";

$update_query_result = mysqli_query($conn, $update_query);

if (!$update_query_result) {
    echo "Error - updateing data - " . mysqli_error($conn);
    exit;
}

echo "update successful!!!";
exit;

?>
