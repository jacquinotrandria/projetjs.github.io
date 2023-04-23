<?php

include 'connect.php';
if (isset($_POST['updateid'])) {
    $user_id = $_POST['updateid'];


    $sql = "SELECT * FROM etudiant where id = $user_id";
    $result = mysqli_query($conn, $sql);
    $response = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $response = $row;
    };
    echo json_encode($response);
}else{
    $response['status']=200;
    $response['message']="invalide or data not found";
}

//update query parameters
if(isset($_POST['hiddendata'])) {
$uniqueid = $_POST['hiddendata'];
$reference = $_POST['updatereference'];
$parcours = $_POST['updateparcours'];
$niveau = $_POST['updateniveau'];
$montant = $_POST['updatemontant'];
$date_payement = $_POST['updatedate'];

$sql = "UPDATE etudiant SET reference= '$reference', parcours = '$parcours', niveau = '$niveau',montant = '$montant',date_payement = '$date_payement' WHERE id = $uniqueid";
$result = mysqli_query($conn, $sql);

}

?>
