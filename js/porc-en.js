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
        warningalert('Empty fields are not allowed', 1);
        return false;
    } else {
        var r = (v1 / 100) * v2;
        successalert('Result:<br> ' + v1 + ' % of ' + v2 + ' is = ' + r + '<br>Rounded:<br> ' + v1 + ' % of ' + v2 + ' is = ' + roundNumber(r, 2), 1);
        return false;
    }

});

$("#btn1x_1").click(function() {
    var v1 = $("#valor1_1").val();
    var v2 = $("#valor2_1").val();
    if (v1 == "" || v2 == "") {
        warningalert('Empty fields are not allowed', 1.1);
        return false;
    } else {
        var d = ((v2 / 100) * v1);
        var r = (100 - v2) * v1 / 100;
        successalert('Result:<br>Discount = ' + d + ' (USD,€,MXN)<br>The final price is = ' + r + ' (USD,€,MXN)<br>Rounded:<br>Discount = ' + roundNumber(d, 2) + ' (USD,€,MXN)<br>The final price is = ' + roundNumber(r, 2) + ' (USD,€,MXN)', 1.1);
        return false;
    }

});

$("#btn1x_2").click(function() {
    var v1 = $("#valor1_2").val();
    var v2 = $("#valor2_2").val();
    if (v1 == "" || v2 == "") {
        warningalert('Empty fields are not allowed', 1.2);
        return false;
    } else {
        var d1 = v2 * v1 / 100;

        var d = ((v2 / 100) * v1);
        var r = (100 + 1 * v2) * v1 / 100;
        successalert('Result:<br>Increase = ' + d + ' (USD,€,MXN)<br>The final price is = ' + r + ' (MXN,USD,€)<br>Rounded:<br>Increase = ' + roundNumber(d, 2) + ' (USD,€,MXN)<br>The final price is = ' + roundNumber(r, 2) + ' (USD,€,MXN)', 1.2);
        return false;
    }

});

$("#btn2x").click(function() {
    var v1 = $("#valor3").val();
    var v2 = $("#valor4").val();
    var v3 = $("#select").val();
    if (v1 == "" || v2 == "" || v3 == "") {
        warningalert('Empty fields are not allowed', 2);
        return false;
    } else {
        if (v3 == 1) {

            var r = ((v2 / 100) * v1);
            var r2 = parseFloat(v1);
            var r22 = parseFloat(r);
            var r3 = r2 + r22;

            successalert('Result:<br>Adding ' + v2 + ' % to ' + v1 + ' gives = ' + r3 + '<br>Rounded:<br>Adding ' + v2 + ' % to ' + v1 + ' gives = ' + roundNumber(r3, 2), 2);
            return false;
        }
        if (v3 == 2) {
            var r = v1 - ((v2 / 100) * v1);
            successalert('Result:<br>By subtracting ' + v2 + ' % from ' + v1 + ' you get = ' + r + '<br>Rounded:<br>By subtracting ' + v2 + ' % from ' + v1 + ' you get = ' + roundNumber(r, 2), 2);
            return false;
        }

    }
});


$("#btn3x").click(function() {
    var v1 = $("#valor5").val();
    var v2 = $("#valor6").val();
    if (v1 == "" || v2 == "") {
        warningalert('Empty fields are not allowed', 3);
        return false;
    } else if (v1 < 0) {
        warningalert('The initial value cannot be negative', 3);
        return false;
    } else {
        var r;
        var r = ((v2 - v1) / v1) * 100;
        var dif = dife(v1, v2);
        var r1 = Math.sign(r);
        if (r1 == -1) {
            successalert('Result:<br>Difference: ' + dif + '<br>The percentage change from ' + v1 + ' to ' + v2 + ' is = ' + r + ' % (Decrease)<br>Rounded:<br>Difference: ' + roundNumber(dif, 2) + '<br>The percentage change from ' + v1 + ' to ' + v2 + ' is = ' + roundNumber(r, 2) + ' % (Decrease)', 3);
            return false;
        } else
        if (r1 == 1) {
            successalert('Result:<br>Difference: ' + dif + '<br>The percentage change from ' + v1 + ' to ' + v2 + ' is = ' + r + ' % (Increment)<br>Rounded:<br>Difference: ' + roundNumber(dif, 2) + '<br>The percentage change from ' + v1 + ' to ' + v2 + ' is = ' + roundNumber(r, 2) + ' % (Increment)', 3);
            return false;
        } else {
            successalert('Result:<br>Difference: ' + dif + '<br>The percentage change from ' + v1 + ' to ' + v2 + ' is = ' + r + ' %<br>Rounded:<br>Difference: ' + roundNumber(dif, 2) + '<br>The percentage change from ' + v1 + ' to ' + v2 + ' is = ' + roundNumber(r, 2) + ' %', 3);
            return false;
        }
    }

});

function dife(v1, v2) { return Math.abs(v1 - v2); }

$("#btn3x_1").click(function() {
    var v1 = $("#valor5_1").val();
    var v2 = $("#valor6_1").val();
    if (v1 == "" || v2 == "") {
        warningalert('Empty fields are not allowed', 3.1);
        return false;
    } else if (v1 < 0) {
        warningalert('The initial value cannot be negative', 3.1);
        return false;
    } else {
        var r = ((v2 - v1) / v1) * 100;
        successalert('Result:<br>The percentage increase from ' + v1 + ' to ' + v2 + ' is = ' + r + ' %<br>Rounded:<br>The percentage increase from ' + v1 + ' to ' + v2 + ' is = ' + roundNumber(r, 2) + ' %', 3.1);
        return false;
    }

});

$("#btn3x_2").click(function() {
    var v1 = $("#valor5_2").val();
    var v2 = $("#valor6_2").val();
    if (v1 == "" || v2 == "") {
        warningalert('Empty fields are not allowed', 3.2);
        return false;
    } else if (v1 < 0) {
        warningalert('The initial value cannot be negative', 3.2);
        return false;
    } else {
        var r = ((v1 - v2) / v1) * 100;
        successalert('Result:<br>The percentage decrease from ' + v1 + ' to ' + v2 + ' is = ' + r + ' %<br>Rounded:<br>The percentage decrease from ' + v1 + ' to ' + v2 + ' is = ' + roundNumber(r, 2) + ' %', 3.2);
        return false;
    }

});

$("#btn4x").click(function() {
    var v2 = $("#valor7").val();
    var v1 = $("#valor8").val();
    if (v1 == "" || v2 == "") {
        warningalert('Empty fields are not allowed', 4);
        return false;
    } else {
        var r = (100 / v2) * v1;
        successalert('Result:<br>' + v1 + ' is = ' + r + ' % of ' + v2 + '<br>Rounded:<br>' + v1 + ' is = ' + roundNumber(r, 2) + ' % of ' + v2, 4);
        return false;
    }

});
$("#btn5x").click(function() {
    var v1 = $("#valor9").val();
    var v2 = $("#valor10").val();
    if (v1 == "" || v2 == "") {
        warningalert('Empty fields are not allowed', 5);
        return false;
    } else {
        var r = (100 / v2) * v1;
        successalert('Result:<br>' + v1 + ' is = ' + r + ' % of ' + v2 + '<br>Rounded:<br>' + v1 + ' is = ' + roundNumber(r, 2) + ' % of ' + v2, 5);
        return false;
    }

});
$("#btn6x").click(function() {
    var v1 = $("#valor11").val();
    var v2 = $("#valor12").val();
    if (v1 == "" || v2 == "") {
        warningalert('Empty fields are not allowed', 6);
        return false;
    } else {
        var r = (v1 / v2) * 100;
        successalert('Result:<br>' + v1 + ' is ' + v2 + ' % of = ' + r + '<br>Rounded:<br>' + v1 + ' is ' + v2 + ' % of = ' + roundNumber(r, 2), 6);
        return false;
    }

});
$("#btn7x").click(function() {
    var v1 = $("#valor13").val();
    var v2 = $("#valor14").val();
    if (v1 == "" || v2 == "") {
        warningalert('Empty fields are not allowed', 7);
        return false;
    } else {
        var rx = ((v1 - v2) / v2) * 100;
        var r = Math.abs(rx);
        successalert('Result:<br>The percentage error between ' + v1 + ' and ' + v2 + ' is = ' + r + ' %<br>Rounded:<br>The percentage error between ' + v1 + ' and ' + v2 + ' is = ' + roundNumber(r, 2) + ' %', 7);
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