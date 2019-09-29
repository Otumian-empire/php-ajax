<?php
$conn = mysqli_connect('localhost', 'root','', 'php_ajax');
if (! $conn) {
    die(mysqli_connect_error());
}

$read_query = "SELECT * FROM `users`";
$read_query_result = mysqli_query($conn, $read_query);

if (!$read_query_result) {
    echo "Error - reading data - " . mysqli_error($conn);
    exit;
}

$output = "";
$output .= "<div class='card'>";
$output .= "<table class='container'>";
$output .= "<tr class='card-header'>";
$output .= "<td>Id</td>";
$output .= "<td>Name</td>";
$output .= "<td>Email</td>";
$output .= "<td>Number</td>";
$output .= "<tr>";

while ($row = mysqli_fetch_assoc($read_query_result)) {
    $output .= "<tr>";
    $output .= "<td>$row[id]</td>";
    $output .= "<td>$row[name]</td>";
    $output .= "<td>$row[email]</td>";
    $output .= "<td>$row[number]</td>";
    $output .= "<tr>";
}

$output .= "</table>";
$output .= "</div>";


echo $output;

mysqli_close($conn);
    
exit;
?>