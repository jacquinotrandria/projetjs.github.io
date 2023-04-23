<?php

include 'connect.php';

extract($_POST);
if (isset($_POST['filterparcoursSend'])) {

    $filter = $_POST['filterparcoursSend'];

    $table = '<table class="table" >
    <thead class="table-dark">
    <tr>
    <th scope="col">N</th>
    <th scope="col">IM</th>
    <th scope="col">Nom</th>
    <th scope="col">Prenom</th> 
    <th scope="col">Parcours</th>
    <th scope="col">NIveau</th>
    <th scope="col">Reference</th> 
    <th scope="col">Montant</th>
    <th scope="col">Date de payement</th>
    <th scope="col">Action</th>
    </tr>
    </thead><tbody id="tablefilter">';
    $sql = "Select * from etudiant where parcours='$filter'";
    $result = mysqli_query($conn, $sql);
    $number = 1;
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $im = $row['im'];
            $name = $row['nom'];
            $prenom = $row['prenom'];
            $parcours = $row['parcours'];
            $niveau = $row['niveau'];
            $reference = $row['reference'];
            $montant = $row['montant'];
            $date = $row['date_payement'];
            $table .= '<tr >
        <td scope="row">' . $number . '</td>
        
        <td>' . $im . '</td>
        <td>' . $name . '</td>
        <td>' . $prenom . '</td>
        <td>' . $parcours . '</td>
        <td>' . $niveau . '</td>
        <td>' . $reference . '</td>
        <td>' . $montant . '</td>
        <td>' . $date . '</td>
        <td>  
            <button class="btn btn-success" onclick="GetDetails(' . $id . ')" ><i class="fa fa-edit"></i></button>
            <button class="btn btn-dark" onclick="read(' . $id . ')" ><i class="fa-solid fa-circle-info"></i></button>
        </td>
        </tr>';
            $number++;
        }

        $table .= '</tbody></table>';
        echo $table;
    } else {
        $table .= '<tr><td colspan="10" class="vide"> 0 resultat vide</td></tr></table>';
        echo $table;
    }
}
