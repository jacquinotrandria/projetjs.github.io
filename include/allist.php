<?php
include 'connect.php';

if (isset($_POST['filteranneunivSend'])) {
    $table = '<table class="table" id="maTable">
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
    </thead><tbody id="myTable">';

    $sql = "Select * from etudiant ";
    $result = mysqli_query($conn, $sql);
    $number = 1;
    
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
        $table .= '<tr>
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
            <button class="btn btn-danger" onclick="read(' . $id . ')" ><i class="fa-solid fa-circle-info"></i></button>
        </td>
        </tr>';
        $number++;
    }

    $table .= '</tbody></table>';
    echo $table;
}
