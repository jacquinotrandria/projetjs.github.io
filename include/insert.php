
<?php
include 'connect.php';

extract($_POST);

if (
  isset($_POST['imSend']) && isset($_POST['nameSend']) && isset($_POST['prenomSend'])
  && isset($_POST['parcoursSend']) && isset($_POST['niveauSend']) && isset($_POST['montantSend']) && isset($_POST['dateSend'])
) {
  // $sql = "INSERT INTO etudiant (im, nom, prenom,reference, parcours, niveau, montant, date_payement)
  // VALUES ('$imSend','$nameSend','$prenomSend','$referenceSend','$parcoursSend','$niveauSend','$montantSend','$dateSend')";

  $sql = "INSERT INTO etudiant(im, nom, prenom, dateNe, lieuNe, cin, lieucin, datecin, parcours, niveau, email, phone, adr) 
VALUES ('$imSend','$nomSend','$prenomSend','$dateNeSend','$lieuNeSend','$cinSend','$lieucinSend','$datecinSend','$parcoursSend','$niveauSend'
,'$mailSend','$phoneSend','$adrSend');";

  $sql .= "INSERT INTO payement(reference, banque, montant, date_payement, im)
 VALUES ('$referenceSend','$banqueSend','$montantSend','$dateSend','$last_id')";

  if ($conn->multi_query($sql) === true) {
    echo "New records created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// if($newid === $imSend){
// $sql = "INSERT INTO payement(reference, banque, montant, date_payement, im)
//  VALUES ('$referenceSend','$banqueSend','$montantSend','$dateSend','$last_id')";
//  if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully"; 
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
// }else{
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
$conn->close();
?>