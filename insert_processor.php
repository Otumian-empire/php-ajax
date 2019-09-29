<?php
$conn = mysqli_connect('localhost', 'root','', 'php_ajax');
if (! $conn) {
    die(mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];

$insert_query = "INSERT INTO `users`(`users`.`name`, `users`.`email`, `users`.`number`) VALUES('$name', '$email', '$number')";

if (!mysqli_query($conn, $insert_query)) {
    echo mysqli_error($conn);
    exit;
}

echo "Data inserted successfully!!!";

mysqli_close($conn);
    
exit;
?>