<?php
include 'connect.php';
if (isset($_POST['displaySend'])) {
    $table = '<table class="table table-bordered" id="maTable">
    <thead class=" table-info">
    <tr>
    <th scope="col">N</th>
    <th scope="col">IM</th>
    <th scope="col">Nom</th>
    <th scope="col">Prenom</th> 
    <th scope="col">Parcours</th>
    <th scope="col">NIveau</th>
    <th scope="col">Reference</th> 
    <th scope="col">Action</th>
    </tr>
    </thead><tbody id="myTable">';

    $sql = "SELECT etudiant.im, etudiant.nom,etudiant.prenom,etudiant.parcours,etudiant.niveau,payement.reference from etudiant INNER JOIN payement ON etudiant.im = payement.im";
    $result = mysqli_query($conn, $sql);
    $number = 1;
    
    while ($row = mysqli_fetch_assoc($result)) {
        
        $im = $row['im'];
        $name = $row['nom'];
        $prenom = $row['prenom'];
        $parcours = $row['parcours'];
        $niveau = $row['niveau'];
        $reference = $row['reference'];
        $table .= '<tr>
        <td scope="row">' . $number . '</td>
        
        <td>' . $im . '</td>
        <td>' . $name . '</td>
        <td>' . $prenom . '</td>
        <td>' . $parcours . '</td>
        <td>' . $niveau . '</td>
        <td>' . $reference . '</td>
 
        <td> 
            <button class="btn btn-success" onclick="GetDetails(' . $id . ')" ><i class="fa fa-edit"></i></button>
            <button class="btn btn-dark" onclick="read(' . $id . ')" ><i class="fa-solid fa-circle-info"></i></button>
            <button class="btn btn-danger" onclick="deleteing(' . $id . ')" ><i class="fa fa-trash"></i></button>
        </td>
        </tr>';
        $number++;
    }

    $table .= '</tbody></table>';
    echo $table;
}
