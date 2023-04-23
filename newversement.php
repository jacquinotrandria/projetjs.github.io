<?php require '../include/header.php'; ?>

<body>
    <?php require '../include/nav.php'; ?>

    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
        </div>
        <main class="container">
            <!-- The Modal alert creaate -->
            <div class="modal fade" id="alertcomplete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content my-auto">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Enregistrement</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body ">
                            <i class="fa fa-success"></i>
                            Success
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="save">Enregistrer</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>

                        </div>

                    </div>
                </div>
            </div>

            <!-- modal alert update -->
            <div class="modal fade" id="alertupdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Mise &aacute; jour</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">

                            Success
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" onclick="updatedetails()">Update</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>

                        </div>

                    </div>
                </div>
            </div>
            <!-- alert delete -->
            <div class="modal fade" id="alertdelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Delete</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <i class="fa-brand fa-shield-virus"></i>
                            You sure to delete??
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" id="deleteok">Delete</button>
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Annuler</button>

                        </div>

                    </div>
                </div>
            </div>
            <div id="inscription" class="tabcontent">


                <!-- Modal -->
                <div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modallabeltitle">Inscription</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row p-2">
                                    <div class="col">
                                        <label for="completeparcours" class="form-label">Parcours</label>
                                        <select name="completeparcours" id="completeparcours" class="form-select" onchange="parcour(this.id,'completeniveau')">
                                            <option value="">-- select here ---</option>
                                            <option value="AES">AES</option>
                                            <option value="DA2I">DA2I</option>
                                            <option value="RPM">RPM</option>
                                            <option value="MD">MD</option>
                                            <option value="SIGD">SIGD</option>
                                            <option value="RPCO">RPCO</option>
                                            <option value="CM">CM</option>
                                            <option value="M2I">M2I</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="completeniveau" class="form-label">Niveau</label>
                                        <select name="completeniveau" id="completeniveau" class="form-select">
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="completeim" class="form-label">Matricule</label>
                                        <input type="text" class="form-control" id="completeim" placeholder="numero carte d'etudiant">
                                    </div>
                                    <div class="col">
                                        <label for="completename" class="form-label">Nom</label>
                                        <input type="text" class="form-control" id="completename" placeholder="Entrer le nom ...">
                                    </div>

                                    <div class="col">
                                        <label for="completeprenom" class="form-label">Prenom</label>
                                        <input type="email" class="form-control" id="completeprenom" placeholder="Entrer le prenom ...">
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col">
                                        <label for="reference" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Telephone</label>
                                        <input type="text" name="phone" id="phone" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Adresse</label>
                                        <input type="text" name="adr" id="adr" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Date de Naissance</label>
                                        <input type="date" name="dateNe" id="dateNe" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label for="completeniveau" class="form-label">Lieu de Naissance</label>
                                        <input type="text" name="lieuNe" id="lieuNe" class="form-control">
                                    </div>


                                </div>

                                <div class="row p-2">

                                    <div class="col">
                                        <label class="form-label">Nationalite</label>
                                        <select name="sexe" label="Nationalite" id="nationalite" class="form-select">
                                            <option value="">-- select here --</option>
                                            <option value="Malagasy">Malagasy</option>
                                            <option value="Etranger">Etranger</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Sexe</label>
                                        <select name="sexe" id="sexe" class="form-select">
                                            <option value="">-- select here --</option>
                                            <option value="M">Masculin</option>
                                            <option value="F">Feminin</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="reference" class="form-label">cin</label>
                                        <input type="text" class="form-control" id="cin">
                                    </div>


                                    <div class="col">
                                        <label class="form-label">deleivre</label>
                                        <input type="date" name="" id="delivrecin" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label for="completeniveau" class="form-label">&agrave;</label>
                                        <input type="text" name="" id="lieucin" class="form-control">
                                    </div>

                                </div>

                                <div class="row  p-2">
                                    <div class="col">
                                        <label for="completemontant" class="form-label">Montant</label>
                                        <input type="text" class="form-control" id="completemontant" onchange="enableBrand(this)">
                                    </div>
                                    <div class="col">
                                        <label for="completedate" class="form-label">Date payement</label>
                                        <input type="date" class="form-control" id="completedate">
                                    </div>
                                    <div class="col-4">
                                        <label for="reference">Reference</label>
                                        <input type="email" class="form-control" id="completereference">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">banque</label>
                                        <select name="banque" id="banque" class="form-select">
                                            <option value="">-- select here --</option>
                                            <option value="BOA">BOA</option>
                                            <option value="BNI">BNI</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="tranche" id="tranche">
                                    <div class="row  p-2">
                                        <div class="col">
                                            <label for="completemontant" class="form-label">2em tranche</label>
                                            <input type="text" class="form-control" id="completemontant1" placeholder="">
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Date d'angager</label>
                                            <input type="date" class="form-control" id="completedate1">
                                        </div>

                                        <div class="col">
                                            <label for="completemontant1" class="form-label">3eme tranche</label>
                                            <input type="text" class="form-control" id="completemontant2" placeholder="">
                                        </div>
                                        <div class="col">
                                            <label for="completedate2" class="form-label">Date d'engagement</label>
                                            <input type="date" class="form-control" id="completedate2">
                                        </div>

                                    </div>
                                </div>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" onclick="adduser()">Enregistrer</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- update modal -->
                <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modallabeltitle">Mise &aacute; jour</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <label for="completeim" class="form-label">Numero matricule</label>
                                        <input type="text" class="form-control" id="updateim">
                                    </div>
                                    <div class="col">
                                        <label for="completename" class="form-label">Nom</label>
                                        <input type="text" class="form-control" id="updatename">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="completeprenom" class="form-label">Prenom</label>
                                        <input type="email" class="form-control" id="updateprenom">
                                    </div>
                                    <div class="col">
                                        <label for="completeprenom" class="form-label">Reference</label>
                                        <input type="email" class="form-control" id="updatereference" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="updateparcours" class="form-label">Parcours</label>
                                        <select name="updateparcours" id="updateparcours" class="form-select">
                                            <option value="AES">AES</option>
                                            <option value="DA2I">DA2I</option>
                                            <option value="RPM">RPM</option>
                                            <option value="RPCO">RPCO</option>
                                            <option value="CM">CM</option>
                                            <option value="M2I">M2I</option>
                                            <option value="MD">MD</option>
                                            <option value="SIGD">SIGD</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="updateniveau" class="form-label">Niveau</label>
                                        <select name="updateparcours" id="updateniveau" class="form-select">

                                            <option value="L1">L1</option>
                                            <option value="L2">L2</option>
                                            <option value="L3">L3</option>
                                            <option value="M1">M1</option>
                                            <option value="M2">M2</option>


                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="completemontant" class="form-label">Montant</label>
                                        <input type="text" class="form-control" id="updatemontant" onchange="updateBrand(this)" disabled>
                                    </div>
                                    <div class="col">
                                        <label for="completedate" class="form-label">Date payement</label>
                                        <input type="date" class="form-control" id="updatedate" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="modif">Modifier</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                                <input type="hidden" id="hiddendata">

                            </div>
                        </div>
                    </div>
                </div>

                <!-- read modal -->
                <div class="modal fade" id="infosmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header d-sm-inline-block">
                                <h6 class="modal-title" id="modallabeltitle">Matrucule <input type="text" class="form-control border-0" id="infosim"></h6>
                                <p>
                                    Parcours :
                                    <input class="border-0 w-25" id="infosparcours"></input>
                                    Niveau :
                                    <input class="border-1 w-25" id="infosniveau"></input>
                                </p>
                            </div>
                            <div class="modal-body my-0">
                                <div class="row">
                                    <div class="col">
                                        <div class="line d-inline-flex">
                                            <label for="">Nom : </label>
                                            <input class="read border-0" id="infosnom">
                                        </div>

                                        <div class="line d-inline-flex">
                                            <label for="">Prenom :</label>
                                            <input class="read border-0" id="infosprenom">
                                        </div>

                                        <div class="line d-inline-flex">
                                            <label for="">N&eacute;e le : </label>
                                            <input class="read border-0 h-25" id="infosdate_naissance">
                                        </div>
                                        <div class="line d-inline-flex">
                                            <label for="">cin : </label>
                                            <input class="read border-0" id="infoscin">
                                        </div>

                                        <div class="line flex-column ">
                                            <label for="">Delivr&eacute;e: </label>
                                            <input class="read border-0" id="infosdatecin">
                                        </div>
                                        <div class="line flex-column">

                                            <label for="">a</label>
                                            <input class="read border-0" id=" infoslieucin">
                                        </div>

                                        <div class="line d-inline-flex">
                                            <label for="">Phone: </label>
                                            <input class="read border-0" id="infosphone">
                                        </div>
                                        <div class="line d-inline-flex">
                                            <label for="">email: </label>
                                            <input class="read border-0" id="infoemail">
                                        </div>
                                        <div class="line d-inline-flex">
                                            <label for="">Adresse: </label>
                                            <input class="read border-0" id="infosadr">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <img src="" id="" class="border-dark" alt="">
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                                <input type="hidden" id="infos">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- button ajouter -->
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#completeModal"><i class="fa fa-plus-square"></i> Nouveau
                            </button>
                        </div>

                        <div class="col-2 my-4 inscritsearch">
                            <input type="text" id="myInput" class="form-control" placeholder="Search for names.." title="Type in a name">
                        </div>
                    </div>
                    <div class="container justify-content-center align-items-center d-flex m-4" id="displayDataTable">
                    </div>

                </div>
            </div>
        </main>

    </section>

    <?php require 'include/footer.php'; ?>
    <script type="text/javascript">
        $(document).ready(function() {
            console.log("success");
            displayData();
            
            total();

        });
        $('#tranche').hide();

        //fin navbar
        function all() {

            $.ajax({
                url: "include/allist.php",
                type: "post",

                success: function(data, status) {
                    $('#alllist').html(data);
                }
            })
        }
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });


        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#tablefilter tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });


        //display function
        function displayData() {
            var displayData = "true";
            $.ajax({
                url: "include/display.php",
                type: "post",
                data: {
                    displaySend: displayData
                },
                success: function(data, status) {
                    $('#displayDataTable').html(data);

                }
            })

        }

        //compter total
        function total() {
            var total = "true";
            $.ajax({
                url: "include/view.php",
                type: "post",
                data: {
                    totalSend: total
                },
                success: function(data, status) {
                    $('#totaletudiant').html(data);

                }
            })

        }
        $("#filterparcours").click(function() {
            var filterparcoursAdd = $('#filterparcours').val();
            $.ajax({
                url: "include/list.php",
                type: "post",
                data: {
                    filterparcoursSend: filterparcoursAdd
                },
                success: function(data, status) {
                    $('#listeparmention').html(data);
                }
            })
        });
        //filter by parcours
        // function filter() {

        // }

        //insert data

        function adduser() {
            var imAdd = $('#completeim').val();
            var nameAdd = $('#completename').val();
            var prenomAdd = $('#completeprenom').val();
            let mailAdd = $('#email').val();
            let phoneAdd = $('#phone').val();
            let adrAdd = $('#adr').val();
            let cinAdd = $('#cin').val();
            let datecinAdd = $('#datecin').val();
            let lieucinAdd = $('#lieucin').val();
            let dateNeAdd = $('#dateNe').val();
            let lieuNeAdd = $('#lieuNe').val();
            var referenceAdd = $('#completereference').val();
            var banqueAdd = $('#banque').val();
            var parcoursAdd = $('#completeparcours').val();
            var niveauAdd = $('#completeniveau').val();
            var montantAdd = $('#completemontant').val();
            var dateAdd = $('#completedate').val();


            $.ajax({
                url: "include/insert.php",
                type: 'post',
                data: {
                    imSend: imAdd,
                    nomSend: nameAdd,
                    prenomSend: prenomAdd,
                    mailSend: mailAdd,
                    phoneSend: phoneAdd,
                    adrSend: adrAdd,
                    cinSend: cinAdd,
                    datecinSend: datecinAdd,
                    lieucinSend: lieucinAdd,
                    dateNeSend: dateNeAdd,
                    lieuSend: lieuNeAdd,
                    referenceSend: referenceAdd,
                    parcoursSend: parcoursAdd,
                    niveauSend: niveauAdd,
                    montantSend: montantAdd,
                    banqueSend:banqueAdd,
                    dateSend: dateAdd
                },
                success: function(data, status) {
                    //function to display data;
                    //console.log(status);

                    $('#completeModal').modal('hide');
                    $('#alertcomplete').modal('show');
                    $('#save').on('click', function() {
                        displayData();
                        $('#alertcomplete').modal('hide');
                    });

                }
            });

        }



        //delete record
        function deleteing(deleteid) {
            $('#alertdelete').modal('show');
            $('#deleteok').on('click', function() {
                $.ajax({
                    url: "include/delete.php",
                    type: 'post',
                    data: {
                        deletesend: deleteid,
                    },
                    success: function(data, status) {
                        $('#alertdelete').modal('hide');
                        displayData();
                    }

                });
            });

        }

        // read data

        function read(infoid) {
            $('#infos').val(infoid);

            $.post("include/view.php", {
                infoid: infoid
            }, function(data, status) {
                var userid = JSON.parse(data);
                $('#infosim').val(userid.im);
                $('#infosparcours').val(userid.parcours);
                $('#infosnom').val(userid.nom);
                $('#infosprenom').val(userid.prenom);
                $('#infosdate_naissance').val(userid.dateNe);
                $('#infoscin').val(userid.cin);
                $('#infosdatecin').val(userid.datecin);
                $('#infoslieucin').val(userid.lieucin);
                $('#infosphone').val(userid.phone);
                $('#infoemail').val(userid.email);
                $('#infosadr').val(userid.adr);
                $('#infosparcours').val(userid.parcours);
                $('#infosniveau').val(userid.niveau);



            });

            $('#infosmodal').modal('show');
        }


        //update function
        function GetDetails(updateid) {
            $('#hiddendata').val(updateid);

            $.post("include/update.php", {
                updateid: updateid
            }, function(data, status) {
                var userid = JSON.parse(data);
                $('#updateim').val(userid.im);
                $('#updatename').val(userid.nom);
                $('#updateprenom').val(userid.prenom);
                $('#updatereference').val(userid.reference);
                $('#updateparcours').val(userid.parcours);
                $('#updateniveau').val(userid.niveau);
                $('#updatemontant').val(userid.montant);
                $('#updatedate').val(userid.date_payement);


            });

            $('#updateModal').modal('show');
        }


        //update event data
        function updatedetails() {

            var updateim = $('#updateim').val();
            var updatename = $('#updatename').val();
            var updateprenom = $('#updateprenom').val();
            var updatereference = $('#updatereference').val();
            var updateparcours = $('#updateparcours').val();
            var updateniveau = $('#updateniveau').val();
            var updatemontant = $('#updatemontant').val();
            var updatedate = $('#updatedate').val();
            var hiddendata = $('#hiddendata').val();

            $.post("include/update.php", {
                updatename: updatename,
                updateprenom: updateprenom,
                updatereference: updatereference,
                updateparcours: updateparcours,
                updateniveau: updateniveau,
                updatemontant: updatemontant,
                updatedate: updatedate,
                hiddendata: hiddendata
            }, function(data, status) {
                $('#alertupdate').modal('hide');
                displayData();
            });

        }

        $('#modif').click(function() {
            $('#updateModal').modal('hide');
            $('#alertupdate').modal('show');
        });



        function enableBrand(answer) {
            console.log(answer.value);
            if (answer.value == 505000) {
                document.getElementById("tranche").style.display = "none";
            } else {
                document.getElementById("tranche").style.display = "block";
            }
        }

        function updateBrand(answer) {
            console.log(answer.value);
            if (answer.value == 505000) {
                document.getElementById("trancheupdate").style.display = "none";
            } else {
                document.getElementById("trancheupdate").style.display = "block";
            }
        }

        function opennav(evt, cityName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the link that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }



        function ok() {
            $('#aler').modal('hide');
            displayData();
        }

        //sort table data
        function sorttable() {
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById("displayDataTable");
            switching = true;
            /*Make a loop that will continue until
            no switching has been done:*/
            while (switching) {
                //start by saying: no switching is done:
                switching = false;
                rows = table.rows;
                /*Loop through all table rows (except the
                first, which contains table headers):*/
                for (i = 1; i < (rows.length - 1); i++) {
                    //start by saying there should be no switching:
                    shouldSwitch = false;
                    /*Get the two elements you want to compare,
                    one from current row and one from the next:*/
                    x = rows[i].getElementsByTagName("TD")[2];
                    y = rows[i + 1].getElementsByTagName("TD")[2];
                    //check if the two rows should switch place:
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                }
                if (shouldSwitch) {
                    /*If a switch has been marked, make the switch
                    and mark that a switch has been done:*/
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                }
            }
        }


        //test parcours 
        function parcour(s1, s2) {
            var s1 = document.getElementById(s1);
            var s2 = document.getElementById(s2);

            s2.innerHTML = "";
            if ((s1.value == "AES") || (s1.value == "DA2I") || (s1.value == "RPM")) {
                var optionArray = ['L1|L1', 'L2|L2', 'L3|L3'];
            } else if ((s1.value == "MD") || (s1.value == "SIGD") || (s1.value == "RPCO") || (s1.value == "CM") || (s1.value == "M2I")) {
                var optionArray = ['M1|M1', 'M2|M2'];
            }

            for (var option in optionArray) {
                var pair = optionArray[option].split("|");
                var newoption = document.createElement("option");

                newoption.value = pair[0];
                newoption.innerHTML = pair[0];
                s2.options.add(newoption);
            }
        }
    </script>
</body>

</html>