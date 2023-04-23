<?php
require 'connect.php';
// sql to delete a record
if (isset($_POST['deletesend'])){
    $unique =$_POST['deletesend'];

$sql = "DELETE FROM etudiant WHERE id=$unique";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
}
?>