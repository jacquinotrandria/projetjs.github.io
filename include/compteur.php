<?php
require 'connect.php';
$total = null;
$sql = "SELECT COUNT(im) as total FROM etudiant";
$result = $conn->query($sql);
while($row= mysqli_fetch_assoc($result)) {
        $total = $row['total'];;
}

//versement
$montant = 505000;
$sql = "SELECT COUNT(id_payement) as payer FROM payement WHERE montant = '$montant'";
$result = $conn->query($sql);
while($row= mysqli_fetch_assoc($result)) {
        $payer = $row['payer'];;
}

//versement non payer
$montant = 505000;
$sql = "SELECT COUNT(id_payement) as atent FROM payement WHERE montant != '$montant'";
$result = $conn->query($sql);
while($row= mysqli_fetch_assoc($result)) {
        $atent = $row['atent'];;
}

//mention management

$sql = "SELECT COUNT(im) as mangement FROM etudiant WHERE parcours= 'AES' OR parcours= 'MD'";
$result = $conn->query($sql);
while($row= mysqli_fetch_assoc($result)) {
        $management = $row['mangement'];
}

//mention rpm

$sql = "SELECT COUNT(im) as rpm FROM etudiant WHERE parcours= 'RPM' OR parcours = 'CM' OR parcours = 'RPCO'";
$result = $conn->query($sql);
while($row= mysqli_fetch_assoc($result)) {
        $rpm = $row['rpm'];
}

//mention info

$sql = "SELECT COUNT(im) as info FROM etudiant WHERE parcours= 'DA2I' OR parcours= 'M2I' OR parcours= 'SIGD'";
$result = $conn->query($sql);
while($row= mysqli_fetch_assoc($result)) {
        $info = $row['info'];
}


?>