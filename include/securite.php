<?php 
function est_connecter(){

    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
    return !empty($_SESSION['login_user']);
}

function obligation_de_seconnecter(){
    if(!est_connecter()){
        header('Location:login.php');
        exit();
}
}

?>