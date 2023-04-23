<?php require 'include/header.php'; ?>

<body>
    <?php require 'include/nav.php'; ?>

    <div class="container my-5">
        <div class="row inline">
            <div class="col-3">
                <!-- Modal -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nouveau">
                    nouveau
                </button>

                <!-- Modal -->
                <div class="modal fade" id="nouveau" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <div class="modal-body">
                                <form action="" method="post">
                                    <!-- One "tab" for each step in the form: -->
                                    <div class="row">
                                        <div class="col">
                                            <label for="" class="form-label">Parcours</label>
                                            <select name="parcours" id="parcours" class="form-control require" onchange="parcour(this.id,'niveau')">
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
                                            <div class="row">
                                                <div class="col">
                                                    <label for="" class="form-label">Niveau</label>
                                                    <select name="niveau" id="niveau" class="form-control require">
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="" class="form-label">Matricule</label>
                                                    <input type="text" class="form-control require" name="im" id="im">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="" class="form-label">code d'inscription</label>
                                            <select name="codeinscrit" id="codeinscrit" class="form-control require">
                                                <option value=""> -- Select Here -- </option>
                                                <option value="Passant">Passant</option>
                                                <option value="Redoublant">Redoublant</option>
                                                <option value="Triplant">Triplant</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="" class="form-label">Nom <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control require" id="nom" placeholder="Entrer le nom ...">
                                        </div>
                                        <div class="col-4">
                                            <label for="" class="form-label">Prenom</label>
                                            <input type="text" class="form-control require" id="prenom" placeholder="Entrer le prenom ...">
                                        </div>
                                        <div class="col-4">
                                            <label for="">Email</label>
                                            <input type="text" class="form-control require" name="email" id="email" placeholder="Email">
                                            <span style="color:red" id="message_email">Adresse email invalide</span>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-4">
                                            <label for="" class="form-label">Sexe</label>
                                            <select name="sexe" id="sexe" class="form-select require">
                                                <option value=""> -- Select Here -- </option>
                                                <option value="M">Masculin</option>
                                                <option value="F">Feminin</option>
                                            </select>
                                        </div>

                                        <div class="col-4">
                                            <label for="" class="form-label">Nationalite</label>
                                            <select name="nationalite" id="nationalite" class="form-select require">
                                                <option value=""> -- Select Here -- </option>
                                                <option value="Malagasy">Malagasy</option>
                                                <option value="Etranger">Etrangere</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label for="" class="form-label">Telephone</label>
                                            <input type="tel" class="form-control require" name="phone" id="phone" placeholder="votre numero telephone">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="" class="form-label">Date Naissance</label>
                                                    <input type="date" class="form-control require" name="dateNe" id="dateNe">
                                                </div>
                                                <div class="col">
                                                    <label for="" class="form-label">Lieu de naissance</label>
                                                    <input type="text" name="lieuNe" id="lieuNe" class="form-control require">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="" class="form-label">CIN</label>
                                            <input type="text" name="cin" id="cin" class="form-control">
                                            <span style="color:red" id="message_cin">votre cin invalide</span>
                                        </div>
                                        <div class="col">
                                            <div class="row">

                                                <div class="col">
                                                    <label for="" class="form-label">Delivre le </label>
                                                    <input type="date" name="datecin" id="datecin" class="form-control">
                                                </div>
                                                <div class="col">
                                                    <label for="" class="form-label">&agrave; </label>
                                                    <input type="text" name="lieucin" id="lieucin" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">

                                                    <label for="" class="form-label">Numero BACC</label>
                                                    <input type="number" class="form-control" id="numbacc" name="numbacc">
                                                </div>
                                                <div class="col">
                                                    <label for="" class="form-label">Centre</label>
                                                    <input type="text" class="form-control" name="centrebacc" id="centrebacc">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="" class="form-label">Serie </label>
                                                    <input type="text" class="form-control" name="seriebacc" id="seriebacc">
                                                </div>

                                                <div class="col">
                                                    <label for="" class="form-label">Annee</label>
                                                    <input type="month" class="form-control" id="annebacc" name="annebac">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col">
                                            <label for="" class="form-label">Reference</label>
                                            <input type="text" class="form-control require" name="reference" id="referrence">
                                        </div>
                                        <div class="col">
                                            <label for="" class="form-label">Montant</label>
                                            <input type="number" name="montant" id="montant" class="form-control require" onchange="montant()">
                                        </div>

                                        <div class="col">
                                            <label for="" class="form-label">Date de payement</label>
                                            <input type="date" name="dateverse" id="dateverse" class="form-control require">
                                        </div>

                                        <div class="col">
                                            <label for="">banque</label>
                                            <select name="banque" id="banque" class="form-select require">
                                                <option value="BOA">BOA</option>
                                                <option value="BNI">BNI</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row d-none" id="tranche">
                                        <div class="col">
                                            <label for="" class="form-label">s'engaer a payer </label>
                                            <input type="number" class="form-control" id="montant1" name="montant1">
                                        </div>

                                        <div class="col">
                                            <label for="" class="form-label">s'angager le </label>
                                            <input type="date" class="form-control" id="dateverse2">
                                        </div>
                                        <div class="col">
                                            <label for="" class="form-label">2eme tranche</label>
                                            <input type="number" class="form-control" name="montant2" id="montant2">

                                        </div>
                                        <div class="col">
                                            <label for="" class="form-label">s'engager le</label>
                                            <input type="date" class="form-control" id="date2" name="date2">
                                        </div>
                                    </div>

                            </div>

                            </form>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" onclick="adduser()">Enrengistrer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- fin insertion -->

            <div class="col-3">
                <label for="anne" class="form-label">Anne universitaire</label>
                <select name="filteranneuniv" id="filteranneuniv" class="form-control" onchange="parcour(this.id,'filterparcours')">
                    <option value="">Select Here</option>
                    <option value="2022-2023">2022-2023</option>
                </select>
            </div>
            <div class="col-3">
                <label for="filterparcours" class="form-label">Parcours</label>
                <select name="filterparcours" id="filterparcours" class="form-control">
                    <option value="">Select here -- </option>
                    <option value="AES">AES</option>
                    <option value="DA2I">DA2I</option>
                    <option value="RPM">RPM</option>
                </select>

            </div>
            <div class="col-3">
                <label for="" class="form-label">Search : </label>
                <input type="text" id="search" class="form-control" placeholder="Search for names.." title="Type in a name">
            </div>
        </div>

        <div class="row">
            <div class="container justify-content-center align-items-center d-flex m-4" id="displayDataTable">
            </div>
        </div>
    </div>
    <?php require 'include/footer.php'; ?>
    <script type="text/javascript">
        $(document).ready(function() {
            console.log("success");
            displayData();


        });


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

        // function DeleteUser(deleteid) {

        // }

        function read(infoid) {
            $('#infos').val(infoid);

            $.post("include/view.php", {
                infoid: infoid
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

            $('#infosmodal').modal('show');
        }

        $('.annuler').click(function() {
            $('.modal').modal('hide');
        })
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
                $('#updateModal').modal('hide');
                $('#alertupdate').modal('show');
                $('#updateok').on('click', function() {
                    $('#alertupdate').modal('hide');
                });
                displayData();
            });

        }





        // function updateBrand(answer) {
        //     console.log(answer.value);
        //     if (answer.value == 505000) {
        //         document.getElementById("trancheupdate").style.display = "none";
        //     } else {
        //         document.getElementById("trancheupdate").style.display = "block";
        //     }
        // }


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
            if ((s1.value == "2022-2023")) {
                var optionArray = ['AES|AES', 'DA2I|DA2I', 'RPM|RPM', 'MD|MD', 'RPCO|RPCO', 'CM|CM', 'SIGD|SIGD', 'M2I|M2I'];
            } else if ((s1.value == "")) {
                var optionArray = [''];
            }

            for (var option in optionArray) {
                var pair = optionArray[option].split("|");
                var newoption = document.createElement("option");

                newoption.value = pair[0];
                newoption.innerHTML = pair[0];
                s2.options.add(newoption);
            }
        }


        //
        $('#listeparanne').hide();
        $('#navparanne').click(function() {
            $('#parmention').hide();
            $('#listeparanne').show();
        })

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

        //test sexe
        if ($("#cin").val().slice(5, 6) == "1") {
            $('#sexe').val() == "M";
        }

        //test cin
        $("#message_cin").hide()


        function testCin() {

            if ((new RegExp('^[0-9]*$').test($("#cin").val()) && $("#cin").val().length == 12) || $("#cin").val().length == 0) {
                if (($('#sexe').val() == "M" && $("#cin").val().slice(5, 6) == "1") || ($('#sexe').val() == "F" && $("#cin").val().slice(5, 6) == "2") || $("#cin").val().length == 0) {

                    return true
                } else {

                    return false
                }
            }


        }

        $("#cin").keyup(function() {
            // body...

            if (testCin()) {

                $("#message_cin").hide()
                $("#message_cin_").hide()

                $(this).css("border-color", "gray")


            } else {
                $("#message_cin").show()
                $(this).css("border-color", "red")
                $("#message_cin_").hide()
                if (($("#etud_cin").val().slice(5, 6) != "0" || $("#etud_cin").val().slice(5, 6) != "1") && $("#etud_cin").val().length == "12") {
                    $("#message_cin_").show()
                    $("#message_cin").hide()
                }

            }

        })

        //---------email-------------------

        $("#message_email").hide();

        function testEmail() {

            if (new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i).test($("#email").val()) || $("#email").val().length == 0) {


                return true
            } else {
                return false
            }

        }


        $("#email").keyup(function() {
            // body...
            if (testEmail()) {


                $(this).css("border-color", "gray")
                $("#message_email").hide();

            } else {
                $(this).css("border-color", "red")

                $("#message_email").show();

            }

        })

        // test liste par niveau

        $('#listeparniveau').hide();

        $('#navparniveau').click(function() {
            $('#nouveau').hide();
            $('#listeparanne').hide();
            $('#listeparniveau').show();
        })

        $('#nouveau').click(function() {
            $('#listeparniveau').hide();
            $('#nouveau').show();
        })

        //test par anne universitaire
        $('#listeparanne').hide();
        $('#navparanne').click(function() {
            $('#nouveau').hide();
            $('#listeparniveau').hide();
            $('#listeparanne').show();
        })

        //test montant
        function montant() {
            let montant = document.getElementById('montant').value;
            let tranche = document.getElementsById('tranche').value;
            if (montant == 505000 || montant == 655000) {

            } else {
                tranche.style.display = "block";
            }

        }

        //insert data
        $('.complet').hide();

        function adduser() {
            var imAdd = $('#im').val();
            var parcoursAdd = $('#parcours').val();
            var niveauAdd = $('#niveau').val();
            var codeinscritAdd = $('codeinscrit').val();
            var nameAdd = $('#nom').val();
            var prenomAdd = $('#prenom').val();
            var sexeAdd = $('sexe').val();
            var emailAdd = $('email').val();
            var phoneAdd = $('phone').val();
            var nationaliteAdd = $('nationalite').val();
            var dateNeAdd = $('dateNe').val();
            var lieuNeAdd = $('lieuNe').val();
            var cinAdd = $('cin').val();
            var datecinAdd = $('datecin').val();
            var lieucinAdd = $('lieucin').val();
            var numbaccAdd = $('numbacc').val();
            var seriebaccAdd = $('seriebacc').val();
            var centrebaccAdd = $('centrebacc').val();
            var annebacAdd = $('annebac').val();
            var referenceAdd = $('#reference').val();
            var montantAdd = $('#montant').val();
            var dateverseAdd = $('#dateverse').val();
            var dateinscritAdd = $('dateinscrit').val();


            $.ajax({
                url: "asset/insert.php",
                type: 'post',
                data: {
                    imSend: imAdd,
                    parcoursSend: parcoursAdd,
                    niveauSend: niveauAdd,
                    codeinscritSend: codeinscritAdd,
                    nameSend: nameAdd,
                    prenomSend: prenomAdd,
                    sexeSend: sexeAdd,
                    emailSend: emailAdd,
                    phoneSend: phoneAdd,
                    nationaliteSend: nationaliteAdd,
                    dateNeSend: dateNeAdd,
                    lieuNeASend: lieuNeAdd,
                    cinASend: cinAdd,
                    datecinSend: datecinAdd,
                    lieucinSend: lieucinAdd,
                    numbaccSend: numbaccAdd,
                    seriebaccSend: seriebaccAdd,
                    centrebaccSend: centrebaccAdd,
                    annebacSend: annebacAdd,
                    referenceSend: referenceAdd,
                    montantSend: montantAdd,
                    dateverseSend: dateverseAdd,
                    dateinscritSend: dateinscritAdd
                },
                success: function(data, status) {
                    //function to display data;
                    console.log(status);

                    $('.complet').show();

                }
            });

        }
    </script>
</body>

</html>