<?php require 'include/header.php'; ?>

<body>
    <?php require 'include/nav.php'; ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col">

            </div>
            <div class="col-md-4  rounded-4">
                <div class="card bg-grey">
                    <div class="card-body">
                        <form action="">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Pseudo</label>
                                <input type="text" name="pseudo" id="pseudo" class="form-control" placeholder="" aria-describedby="helpId">
                                <small id="helpId" class="text-muted">verifier le pseudo</small>
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="form-label">email</label>
                                <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
                                <small id="messageemail" class="form-text text-muted">verifier votre email</small>
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="form-label"><i class="fa fa-comment"></i>Comment</label>
                                <textarea class="form-control" name="" id="" rows="3"></textarea>
                            </div>
                            <div class="form-group mt-4">
                                

                                <button type="submit" class="btn btn-success">Envoyer</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>


    <?php require 'include/footer.php'; ?>
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