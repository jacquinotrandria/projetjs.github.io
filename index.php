<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/line.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title>
</head>

<body>
<?php require 'include/nav.php'; ?>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>

            <i class="fa fa-user"></i>
        </div>
        <div class="dash-content">

            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">&nbsp; Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="text">Total Likes</span>
                        <span class="number">50,120</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-comments"></i>
                        <span class="text">Comments</span>
                        <span class="number">20,120</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-share"></i>
                        <span class="text">Total Share</span>
                        <span class="number">10,120</span>
                    </div>
                </div>
            </div>

            <div class="activity">

            </div>
        </div>
    </section>

    <script src="js/script.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/all.js"></script>
    <!-- <script>
        $(document).ready(function() {

            /* Au clic sur un élément de menu... */
            $('.nav-links li a').click(function(event) {

                /* On récupère l'url du lien sur lequel on vient de cliquer. */
                var url = $(this).attr('href');

                /*
                 * Dans notre bloc #content, on inject le contenu
                 * de la page ciblée (par le href) en se limitant
                 * à ce qui est dans le bloc #content.
                 */
                $('.dash-content').load(url + " .dash-content");

                /*
                 * On évite le comportement par défaut qui est de 
                 * nous envoyer sur la page donnée dans le href).
                 */
                event.preventDefault();
            });

        });
    </script> -->
</body>

</html>