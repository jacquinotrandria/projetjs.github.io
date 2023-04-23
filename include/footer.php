</div>
    </section>

    <!-- <script src="js/script.js"></script> -->
    <!-- <script src="js/jquery.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-wOLiP6uL5tNrV1FiutKtAyQGGJ1CWAsqQ6Kp2XZ12/CvZxw8MvNJfdhh0yTwjPIir4SWag2/MHrseR7PRmNtvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.7/umd/popper.min.js" integrity="sha512-uaZ0UXmB7NHxAxQawA8Ow2wWjdsedpRu7nJRSoI2mjnwtY8V5YiCWavoIpo1AhWPMLiW5iEeavmA3JJ2+1idUg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="js/bootstrap.js"></script> -->
    <script>
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
    </script>
</body>
</html>