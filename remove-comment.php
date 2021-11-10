<?php 

include 'config.php';

$id = $_POST['id'];

$sql = "DELETE FROM tasks WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo 1;
} else {
    echo 0;
}

?>