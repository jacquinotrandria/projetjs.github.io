<?php
session_start();
$title = "Gestion Frais de scolarite";
require 'header.php';


?>

<body onload="loading()">
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
        </div>
        <main class="container">
            <div class="user">
                <i class="fa fa-user"></i>
                <span>Bonjour <input type="text"></span>
            </div>
            <div class="profile">
                <form action="">
                    <div class="utulisateur">
                        <label for="" class="form-label">pseudo</label>
                        <input type="text" class="form-control" id="pseudo">
                        <i class="fa fa-edit modif"></i>
                    </div>
                    <div class="utulisateur">
                        <label for="" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username">
                        <i class="fa fa-edit modif"></i>
                    </div>
                    <div class="utulisateur">
                        <label for="" class="form-label">email</label>
                        <input type="text" class="form-control" id="emailuser">
                        <i class="fa fa-edit modif"></i>
                    </div>
                    <div class="utulisateur">
                        <label for="" class="form-label">phone</label>
                        <input type="text" class="form-control" id="phoneuser">
                        <i class="fa fa-edit modif"></i>
                    </div>
                    <div class="utulisateur">
                        <label for="" class="form-label">Mot de passe</label>
                        <input type="text" class="form-control" id="mdp">
                        <i class="fa fa-edit modif"></i>
                    </div>
                    <div class="utulisateur">
                        <label for="" class="form-label">Confiremez mot de passe</label>
                        <input type="text" class="form-control" id="confirmdp">
                        <i class="fa fa-edit modif"></i>
                    </div>
                </form>
            </div>
        </main>

    </section>



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="font/all.js"></script>
    <!-- <script src="js/main.js"></script> -->
    <script type="text/javascript">
        //navabar
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });

        //

       
    </script>
</body>

</html>