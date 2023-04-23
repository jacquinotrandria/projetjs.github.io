<?php require 'include/header.php'; ?>

<link rel="stylesheet" href="css/inscription.css">

<body>
    <?php require 'include/nav.php'; ?>
    <div class="container mt-2 mb-4">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">

                <a href="newinscrit.php" class="btn btn-primary">Nouveau</a>

                <a class="btn btn-primary">Imprimer</a>

            </div>

        </div>

    </div>



    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="from-group">
                    <label for="" class="form-label">Parcours</label>
                    <select name="parcours" id="parcours" class="form-select" onchange="parcour(this.id,'niveau')">
                        <option value="">--- select here ---</option>
                        <option value="AES">AES</option>
                        <option value="DA2I">DA2I</option>
                        <option value="RPM">RPM</option>
                        <option value="MD">MD</option>
                        <option value="M2I">M2I</option>
                        <option value="SIGD">SIGD</option>
                        <option value="RPCO">RPCO</option>
                        <option value="CM">CM</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="from-group">
                    <label for="" class="form-label">Niveau</label>
                    <select name="niveau" id="niveau" class="form-select">
                        <option value="" disabled></option>
                    </select>
                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="" class="form-label">Recherche:</label>
                    
                    <input class="form-control border" type="search" value="" id="example-search-input">
                </div>
            </div>
        </div>
    </div>




    <?php require 'include/footer.php'; ?>
    


</body>

</html>