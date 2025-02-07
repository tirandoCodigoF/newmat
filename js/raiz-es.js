$("#btn1").click(function() {
    var v1 = $("#val1").val();
    if (v1 < 0 && v1 % 2 != 1) { dangeralert('Error.! Imposible de Calcular', 1); return false; }
    if (v1 == "") {
        warningalert('Error.! No se permiten campos vacios', 1);
        return false;
    } else {
        var r = Math.sqrt(v1);
        successalert('Resultado: ' + r + '<br>Redondeado: ' + roundNumber(r, 2), 1);
        return false;
    }
});
$("#btn2").click(function() {
    var v1 = $("#val2").val();
    if (v1 < 0 && v1 % 2 != 1) { dangeralert('Error.! Imposible de Calcular', 2); return false; }
    if (v1 == "") {
        warningalert('Error.! No se permiten campos vacios', 2);
        return false;
    } else {
        var r = Math.pow(v1, 1 / 3);
        successalert('Resultado: ' + r + '<br>Redondeado: ' + roundNumber(r, 2), 2);
        return false;
    }
});
$("#btn3").click(function() {
    var np = $("#val3").val();
    var xn = $("#val4").val();
    if (xn < 0 && np % 2 != 1) { dangeralert('Error.! Imposible de Calcular', 3); return false; }
    if (np == "" || xn == "") {
        warningalert('Error.! No se permiten campos vacios', 3);
        return false;
    } else {
        var r = (xn < 0 ? -1 : 1) * Math.pow(Math.abs(xn), 1 / np);
        successalert('Resultado: ' + r + '<br>Redondeado: ' + roundNumber(r, 2), 3);
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