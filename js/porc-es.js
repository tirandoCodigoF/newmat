$("#formbasico").click(function() {
    $("#formula1").show();
});
$("#formbasico_1").click(function() {
    $("#formula1_1").show();
});
$("#formbasico_2").click(function() {
    $("#formula1_2").show();
});
$("#formbasico2").click(function() {
    $("#formula2").show();
});
$("#formbasico3").click(function() {
    $("#formula3").show();
});
$("#formbasico3_1").click(function() {
    $("#formula3_1").show();
});
$("#formbasico3_2").click(function() {
    $("#formula3_2").show();
});
$("#formbasico4").click(function() {
    $("#formula4").show();
});
$("#formbasico5").click(function() {
    $("#formula5").show();
});
$("#formbasico6").click(function() {
    $("#formula6").show();
});
$("#formbasico7").click(function() {
    $("#formula7").show();
});

$(".cerrarformula").click(function() {
    $("#formula1").hide();
    $("#formula1_1").hide();
    $("#formula1_2").hide();
    $("#formula2").hide();
    $("#formula3").hide();
    $("#formula3_1").hide();
    $("#formula3_2").hide();
    $("#formula4").hide();
    $("#formula5").hide();
    $("#formula6").hide();
    $("#formula7").hide();
});

$("#btn1x").click(function() {
    var v1 = $("#valor1").val();
    var v2 = $("#valor2").val();
    if (v1 == "" || v2 == "") {
        warningalert('No se permiten campos vacios', 1);
        return false;
    } else {
        var r = (v1 / 100) * v2;
        successalert('Resultado:<br>El ' + v1 + ' % de ' + v2 + ' es = ' + r + '<br>Redondeado:<br>El ' + v1 + ' % de ' + v2 + ' es = ' + roundNumber(r, 2), 1);
        return false;
    }

});

$("#btn1x_1").click(function() {
    var v1 = $("#valor1_1").val();
    var v2 = $("#valor2_1").val();
    if (v1 == "" || v2 == "") {
        warningalert('No se permiten campos vacios', 1.1);
        return false;
    } else {
        var d = ((v2 / 100) * v1);
        var r = (100 - v2) * v1 / 100;
        successalert('Resultado:<br>Descuento = ' + d + ' (MXN,USD,€)<br>El precio final es = ' + r + ' (MXN,USD,€)<br>Redondeado:<br>Descuento = ' + roundNumber(d, 2) + ' (MXN,USD,€)<br>El precio final es = ' + roundNumber(r, 2) + ' (MXN,USD,€)', 1.1);
        return false;
    }

});

$("#btn1x_2").click(function() {
    var v1 = $("#valor1_2").val();
    var v2 = $("#valor2_2").val();
    if (v1 == "" || v2 == "") {
        warningalert('No se permiten campos vacios', 1.2);
        return false;
    } else {
        var d1 = v2 * v1 / 100;

        var d = ((v2 / 100) * v1);
        var r = (100 + 1 * v2) * v1 / 100;
        successalert('Resultado:<br>Aumento = ' + d + ' (MXN,USD,€)<br>El precio final es = ' + r + ' (MXN,USD,€)<br>Redondeado:<br>Aumento = ' + roundNumber(d, 2) + ' (MXN,USD,€)<br>El precio final es = ' + roundNumber(r, 2) + ' (MXN,USD,€)', 1.2);
        return false;
    }

});

$("#btn2x").click(function() {
    var v1 = $("#valor3").val();
    var v2 = $("#valor4").val();
    var v3 = $("#select").val();
    if (v1 == "" || v2 == "" || v3 == "") {
        warningalert('No se permiten campos vacios', 2);
        return false;
    } else {
        if (v3 == 1) {

            var r = ((v2 / 100) * v1);
            var r2 = parseFloat(v1);
            var r22 = parseFloat(r);
            var r3 = r2 + r22;

            successalert('Resultado:<br>Al añadir ' + v2 + ' % a ' + v1 + ' se obtiene = ' + r3 + '<br>Redondeado:<br>Al añadir ' + v2 + ' % a ' + v1 + ' se obtiene = ' + roundNumber(r3, 2), 2);
            return false;
        }
        if (v3 == 2) {
            var r = v1 - ((v2 / 100) * v1);
            successalert('Resultado:<br>Al restar ' + v2 + ' % a ' + v1 + ' se obtiene = ' + r + '<br>Redondeado:<br>Al restar ' + v2 + ' % a ' + v1 + ' se obtiene = ' + roundNumber(r, 2), 2);
            return false;
        }

    }
});


$("#btn3x").click(function() {
    var v1 = $("#valor5").val();
    var v2 = $("#valor6").val();
    if (v1 == "" || v2 == "") {
        warningalert('No se permiten campos vacios', 3);
        return false;
    } else if (v1 < 0) {
        warningalert('El valor inicial no puede ser negativo', 3);
        return false;
    } else {
        var r;
        var r = ((v2 - v1) / v1) * 100;
        var dif = dife(v1, v2);
        var r1 = Math.sign(r);
        if (r1 == -1) {
            successalert('Resultado:<br>Diferencia: ' + dif + '<br>El cambio porcentual de ' + v1 + ' a ' + v2 + ' es = ' + r + ' % (Disminución)<br>Redondeado:<br>Diferencia: ' + roundNumber(dif, 2) + '<br>El cambio porcentual de ' + v1 + ' a ' + v2 + ' es = ' + roundNumber(r, 2) + ' % (Disminución)', 3);
            return false;
        } else
        if (r1 == 1) {
            successalert('Resultado:<br>Diferencia: ' + dif + '<br>El cambio porcentual de ' + v1 + ' a ' + v2 + ' es = ' + r + ' % (Incremento)<br>Redondeado:<br>Diferencia: ' + roundNumber(dif, 2) + '<br>El cambio porcentual de ' + v1 + ' a ' + v2 + ' es = ' + roundNumber(r, 2) + ' % (Incremento)', 3);
            return false;
        } else {
            successalert('Resultado:<br>Diferencia: ' + dif + '<br>El cambio porcentual de ' + v1 + ' a ' + v2 + ' es = ' + r + ' %<br>Redondeado:<br>Diferencia: ' + roundNumber(dif, 2) + '<br>El cambio porcentual de ' + v1 + ' a ' + v2 + ' es = ' + roundNumber(r, 2) + ' %', 3);
            return false;
        }
    }

});

function dife(v1, v2) { return Math.abs(v1 - v2); }

$("#btn3x_1").click(function() {
    var v1 = $("#valor5_1").val();
    var v2 = $("#valor6_1").val();
    if (v1 == "" || v2 == "") {
        warningalert('No se permiten campos vacios', 3.1);
        return false;
    } else if (v1 < 0) {
        warningalert('El valor inicial no puede ser negativo', 3.1);
        return false;
    } else {
        var r = ((v2 - v1) / v1) * 100;
        successalert('Resultado:<br>El incremento porcentual de ' + v1 + ' a ' + v2 + ' es = ' + r + ' %<br>Redondeado:<br>El incremento porcentual de ' + v1 + ' a ' + v2 + ' es = ' + roundNumber(r, 2) + ' %', 3.1);
        return false;
    }

});

$("#btn3x_2").click(function() {
    var v1 = $("#valor5_2").val();
    var v2 = $("#valor6_2").val();
    if (v1 == "" || v2 == "") {
        warningalert('No se permiten campos vacios', 3.2);
        return false;
    } else if (v1 < 0) {
        warningalert('El valor inicial no puede ser negativo', 3.2);
        return false;
    } else {
        var r = ((v1 - v2) / v1) * 100;
        successalert('Resultado:<br>La disminución porcentual de ' + v1 + ' a ' + v2 + ' es = ' + r + ' %<br>Redondeado:<br>La disminución porcentual de ' + v1 + ' a ' + v2 + ' es = ' + roundNumber(r, 2) + ' %', 3.2);
        return false;
    }

});

$("#btn4x").click(function() {
    var v2 = $("#valor7").val();
    var v1 = $("#valor8").val();
    if (v1 == "" || v2 == "") {
        warningalert('No se permiten campos vacios', 4);
        return false;
    } else {
        var r = (100 / v2) * v1;
        successalert('Resultado:<br>' + v1 + ' es = ' + r + ' % de ' + v2 + '<br>Redondeado:<br>' + v1 + ' es = ' + roundNumber(r, 2) + ' % de ' + v2, 4);
        return false;
    }

});
$("#btn5x").click(function() {
    var v1 = $("#valor9").val();
    var v2 = $("#valor10").val();
    if (v1 == "" || v2 == "") {
        warningalert('No se permiten campos vacios', 5);
        return false;
    } else {
        var r = (100 / v2) * v1;
        successalert('Resultado:<br>' + v1 + ' es = ' + r + ' % de ' + v2 + '<br>Redondeado:<br>' + v1 + ' es = ' + roundNumber(r, 2) + ' % de ' + v2, 5);
        return false;
    }

});
$("#btn6x").click(function() {
    var v1 = $("#valor11").val();
    var v2 = $("#valor12").val();
    if (v1 == "" || v2 == "") {
        warningalert('No se permiten campos vacios', 6);
        return false;
    } else {
        var r = (v1 / v2) * 100;
        successalert('Resultado:<br>' + v1 + ' es ' + v2 + ' % de = ' + r + '<br>Redondeado:<br>' + v1 + ' es ' + v2 + ' % de = ' + roundNumber(r, 2), 6);
        return false;
    }

});
$("#btn7x").click(function() {
    var v1 = $("#valor13").val();
    var v2 = $("#valor14").val();
    if (v1 == "" || v2 == "") {
        warningalert('No se permiten campos vacios', 7);
        return false;
    } else {
        var rx = ((v1 - v2) / v2) * 100;
        var r = Math.abs(rx);
        successalert('Resultado:<br>El error porcentual entre ' + v1 + ' y ' + v2 + ' es = ' + r + ' %<br>Redondeado:<br>El error porcentual entre ' + v1 + ' y ' + v2 + ' es = ' + roundNumber(r, 2) + ' %', 7);
        return false;
    }

});


function roundNumber(num, scale) {
    if (!("" + num).includes("e")) {
        return +(Math.round(num + "e+" + scale) + "e-" + scale);
    } else {
        var arr = ("" + num).split("e");
        var sig = ""
        if (+arr[1] + scale > 0) {
            sig = "+";
        }
        return +(Math.round(+arr[0] + "e" + sig + (+arr[1] + scale)) + "e-" + scale);
    }
}