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
$output .= "<td></td><td></td>";
$output .= "<tr>";

while ($row = mysqli_fetch_assoc($read_query_result)) {
    $output .= "<tr class='m-1 p-1'>";
    $output .= "<td>$row[id]</td>";
    $output .= "<td>$row[name]</td>";
    $output .= "<td>$row[email]</td>";
    $output .= "<td>$row[number]</td>";
    $output .= "<td><a class='btn btn-sm btn-primary' href='update_data_form.php?id=$row[id]&name=$row[name]&email=$row[email]&number=$row[number]'>update</a></td>";
    $output .= "<td><a class='btn btn-sm btn-danger' href='delete_data.php?id=$row[id]&name=$row[name]&email=$row[email]&number=$row[number]'>delete</a></td>";
    $output .= "<tr>";
}

$output .= "</table>";
$output .= "</div>";


echo $output;

mysqli_close($conn);
    
exit;
?>