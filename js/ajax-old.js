$(document).on('click', '.jour', function (event) {
    event.preventDefault();
    $.ajax({
        url: $(this).attr("href"),
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            console.log(data);
            var zone_titre = $("#div_result").children("h3");
            var date = data.date;
            $(zone_titre).text(date.jour + " " + date.num_jour + " " + date.mois + " " + date.annee);
            reservation(data.reservation);
//            console.log(data.reservation);
        },
        error: function (data) {
            console.log("erreuuuuuuuuuuuuuuuuur" + data.toString());
        }
    });
});
function reservation(reservations) {
    ResetTable();
    for (var key in reservations) {
        console.log(reservations[key]);
        var heureDebut = reservations[key].heure_debut;
        var heureFin = reservations[key].heure_fin;
//        var h_d = heureDebut.substring(0, heureDebut.indexOf("."));
//        var m_d = heureDebut.substring(heureDebut.indexOf(".") + 1);
        var h_d = heureDebut.substring(0, 2);
        var m_d = heureDebut.substring(3, 5);
//        var h_f = heureFin.substring(0, heureFin.indexOf("."));
//        var m_f = heureFin.substring(heureFin.indexOf(".") + 1);
        var h_f = heureFin.substring(0, 2);
        var m_f = heureFin.substring(3, 5);
        var minD = parseInt(m_d);
        var minF = parseInt(m_f);
        var heurD = parseInt(h_d);
        var heurF = parseInt(h_f);
        var flag = true;
        console.log(heurD + "/" + heurF);
        console.log(minD + "/" + minF);
        for (var i = heurD; i <= heurF; i++) {

            var tds = $('#' + i).children('td'); //heure pile concatenation de chaine

            // le flag définit le premier passage et donc le départ du créneau de reservation
            if (flag === true && minD === 30) {
                // s'il s'agit d'une demi heure le point de départ sera fixé à la demi heure

                affichNextLigne();
                // sinon on lance le background à l'heure pile


                flag = false;
            } else if (i == heurF && minF == 30) {
                affichage(tds, "m" + reservations[key].fk_machine);
            } else {
                affichage(tds, "m" + reservations[key].fk_machine);
                affichNextLigne();
            }

        }

        function affichNextLigne() {
            tds = $('#' + i).next().children('td'); // et demi
            affichage(tds, "m" + reservations[key].fk_machine);
        }

        function affichage(cellule, classe) {
            var indexTD = classe.substring(classe.indexOf("m") + 1);
            $(cellule[indexTD]).addClass(classe);
        }
    }
}

// Checkbox Machines
function CocheTout(ref, name) {
    var form = ref;
    while (form.parentNode && form.nodeName.toLowerCase() != 'form') {
        form = form.parentNode;
    }

    var elements = form.getElementsByTagName('input');
    for (var i = 0; i < elements.length; i++) {
        if (elements[i].type == 'checkbox' && elements[i].name == name) {
            elements[i].checked = ref.checked;
        }
    }
}

function ResetTable() {
    for (var i = 0; i <= 24; i++) {
        var tds = $('#' + i).children('td');
        var tdsdemi = $('#' + i).next().children('td');
        tds.removeClass();
        tdsdemi.removeClass();
    }
}
$('#deb,#fin').change(function () {

    var deb = $('#deb').val();
    var fin = $('#fin').val();
    var date = $("#div_result").children("h3").text();
    var data = {"date": date, "deb": deb, "fin": fin - '00:01'};
//    alert(date);
//    alert(fin);
    $.ajax({
        url: '/reserver/machine',
        type: 'POST',
        data: data,
        dataType: 'json',
        success: function (data) {
//            console.log(data);
            var myOptions = [];
            for (key in data) {
                var test = data[key]['id'];
                var test2 = data[key]['nom'];
                var machine = {"id": test, "nom": test2}
                myOptions.push(machine)
            }
            
            $('#machine').remove();
            $('#reservation').append($('<select id=\'machine\'></select>'));
            $('#machine').change(function () {
            
                ajaxtools();
            })
            var items = "";
            $.each(data, function (key, val) {
                console.log(key);
                console.log(val);
                items += "<option value='" + val.id + "'>" + val.nom + "</option>";
            });
            $(items).appendTo('#machine');
        },
        error: function (data) {
            console.log("erreuuuuuuuuuuuuuuuuur" + data.toString());
        }
    });
})

function ajaxtools() {
    $('#tool').remove();
        var machine = $('#machine').val();
        var data = {"machine": machine};
        var bookbutton = $('<button id=\'bookbutton\'>Reserver</button>');
    $.ajax({
        url: '/reserver/outil',
        type: 'POST',
        data: data,
        dataType: 'json',
        success: function (data) {
            if (data != "false") {
                var myTools = [];
            for (key in data) {
                var test = data[key]['id'];
                var test2 = data[key]['nom'];
                var outil = {"id": test, "nom": test2}
                myTools.push(outil)
            }
            $('#tool').remove();
            $('#reservation').append($('<select id=\'tool\'></select>'));
            $('#tool').change(function () {
                $('#bookbutton').remove();
                $('#reservation').append(bookbutton);
                $('#reservation').click(function () {
                bookbutton();
            })
              
            })
            var itemstools = "";
            $.each(data, function (key, val) {
                itemstools += "<option value='" + val.id + "'>" + val.nom + "</option>";
            });
            $(itemstools).appendTo('#tool');
            } else {
                $('#bookbutton').remove();
                $('#reservation').append(bookbutton);
                $('#reservation').click(function () {
                bookbutton();
            })
            }
            
            
            
            
        },
        error: function (data) {
            console.log("erreuuuuuuuuuuuuuuuuur" + data.toString());
        }

    });
}

function bookbutton () {
    console.log("book");
}
