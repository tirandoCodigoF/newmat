$(".modal-loading").delay(1000).show(10, function() {
    $(this).delay(1000).hide(10, function() {
        $(this).remove();
        $('.calculators').show();
    });
});

function warningalert(warning, dat) {
    if (dat == 1) {
        $('.msg1').html('<div class="alert" style="font-size:1em; background: #ffcc00; color: white; font-weight:600;"  form-control form-group text-center" align="center">' +
            '<strong><i class="glyphicon glyphicon-info-sign"></i></strong> ' + warning +
            '</div>');
    }
    if (dat == 1.1) {
        $('.msg1_1').html('<div class="alert" style="font-size:1em; background: #ffcc00; color: white; font-weight:600;"  form-control form-group text-center" align="center">' +
            '<strong><i class="glyphicon glyphicon-info-sign"></i></strong> ' + warning +
            '</div>');
    }
    if (dat == 1.2) {
        $('.msg1_2').html('<div class="alert" style="font-size:1em; background: #ffcc00; color: white; font-weight:600;"  form-control form-group text-center" align="center">' +
            '<strong><i class="glyphicon glyphicon-info-sign"></i></strong> ' + warning +
            '</div>');
    }
    if (dat == 2) {
        $('.msg2').html('<div class="alert" style="font-size:1em; background: #ffcc00; color: white; font-weight:600;"  form-control form-group text-center" align="center">' +
            '<strong><i class="glyphicon glyphicon-info-sign"></i></strong> ' + warning +
            '</div>');
    }
    if (dat == 3) {
        $('.msg3').html('<div class="alert" style="font-size:1em; background: #ffcc00; color: white; font-weight:600;"  form-control form-group text-center" align="center">' +
            '<strong><i class="glyphicon glyphicon-info-sign"></i></strong> ' + warning +
            '</div>');
    }
    if (dat == 3.1) {
        $('.msg3_1').html('<div class="alert" style="font-size:1em; background: #ffcc00; color: white; font-weight:600;"  form-control form-group text-center" align="center">' +
            '<strong><i class="glyphicon glyphicon-info-sign"></i></strong> ' + warning +
            '</div>');
    }
    if (dat == 3.2) {
        $('.msg3_2').html('<div class="alert" style="font-size:1em; background: #ffcc00; color: white; font-weight:600;"  form-control form-group text-center" align="center">' +
            '<strong><i class="glyphicon glyphicon-info-sign"></i></strong> ' + warning +
            '</div>');
    }
    if (dat == 4) {
        $('.msg4').html('<div class="alert" style="font-size:1em; background: #ffcc00; color: white; font-weight:600;"  form-control form-group text-center" align="center">' +
            '<strong><i class="glyphicon glyphicon-info-sign"></i></strong> ' + warning +
            '</div>');
    }
    if (dat == 5) {
        $('.msg5').html('<div class="alert" style="font-size:1em; background: #ffcc00; color: white; font-weight:600;"  form-control form-group text-center" align="center">' +
            '<strong><i class="glyphicon glyphicon-info-sign"></i></strong> ' + warning +
            '</div>');
    }
    if (dat == 6) {
        $('.msg6').html('<div class="alert" style="font-size:1em; background: #ffcc00; color: white; font-weight:600;"  form-control form-group text-center" align="center">' +
            '<strong><i class="glyphicon glyphicon-info-sign"></i></strong> ' + warning +
            '</div>');
    }
    if (dat == 7) {
        $('.msg7').html('<div class="alert" style="font-size:1em; background: #ffcc00; color: white; font-weight:600;"  form-control form-group text-center" align="center">' +
            '<strong><i class="glyphicon glyphicon-info-sign"></i></strong> ' + warning +
            '</div>');
    }
    if (dat == 8) {
        $('.msg8').html('<div class="alert" style="font-size:1em; background: #ffcc00; color: white; font-weight:600;"  form-control form-group text-center" align="center">' +
            '<strong><i class="glyphicon glyphicon-info-sign"></i></strong> ' + warning +
            '</div>');
    }
    $(".alert").delay(2000).show(10, function() {
        $(this).delay(2000).hide(10, function() {
            $(this).remove();
        });
    });
}

function successalert(full, dat) {
    if (dat == 1) {
        $('.msg1').html('<div class="alert"  style="font-size:1em; background: #339900; color: white; font-weight:600;"  form-control form-group  text-center  " align="justify">' +
            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> ' + full +
            '</div>');
    }
    if (dat == 1.1) {
        $('.msg1_1').html('<div class="alert"  style="font-size:1em; background: #339900; color: white; font-weight:600;"  form-control form-group  text-center  " align="justify">' +
            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> ' + full +
            '</div>');
    }
    if (dat == 1.2) {
        $('.msg1_2').html('<div class="alert"  style="font-size:1em; background: #339900; color: white; font-weight:600;"  form-control form-group  text-center  " align="justify">' +
            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> ' + full +
            '</div>');
    }
    if (dat == 2) {
        $('.msg2').html('<div class="alert"  style="font-size:1em; background: #339900; color: white; font-weight:600;"  form-control form-group  text-center  " align="justify">' +
            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> ' + full +
            '</div>');
    }
    if (dat == 3) {
        $('.msg3').html('<div class="alert"  style="font-size:1em; background: #339900; color: white; font-weight:600;"  form-control form-group  text-center  " align="justify">' +
            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> ' + full +
            '</div>');
    }
    if (dat == 3.1) {
        $('.msg3_1').html('<div class="alert"  style="font-size:1em; background: #339900; color: white; font-weight:600;"  form-control form-group  text-center  " align="justify">' +
            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> ' + full +
            '</div>');
    }
    if (dat == 3.2) {
        $('.msg3_2').html('<div class="alert"  style="font-size:1em; background: #339900; color: white; font-weight:600;"  form-control form-group  text-center  " align="justify">' +
            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> ' + full +
            '</div>');
    }
    if (dat == 4) {
        $('.msg4').html('<div class="alert"  style="font-size:1em; background: #339900; color: white; font-weight:600;"  form-control form-group  text-center  " align="justify">' +
            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> ' + full +
            '</div>');
    }
    if (dat == 5) {
        $('.msg5').html('<div class="alert"  style="font-size:1em; background: #339900; color: white; font-weight:600;"  form-control form-group  text-center  " align="justify">' +
            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> ' + full +
            '</div>');
    }
    if (dat == 6) {
        $('.msg6').html('<div class="alert"  style="font-size:1em; background: #339900; color: white; font-weight:600;"  form-control form-group  text-center  " align="justify">' +
            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> ' + full +
            '</div>');
    }
    if (dat == 7) {
        $('.msg7').html('<div class="alert"  style="font-size:1em; background: #339900; color: white; font-weight:600;"  form-control form-group  text-center  " align="justify">' +
            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> ' + full +
            '</div>');
    }
    if (dat == 8) {
        $('.msg8').html('<div class="alert"  style="font-size:1em; background: #339900; color: white; font-weight:600;"  form-control form-group  text-center  " align="justify">' +
            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> ' + full +
            '</div>');
    }
    $(".alert").delay(10000).show(10, function() {
        $(this).delay(10000).hide(10, function() {
            $(this).remove();
        });
    });
}

function dangeralert(danger, dat) {
    if (dat == 1) {
        $('.msg1').html('<div class="alert form-control form-group  text-center" style="font-size:1em; background: red; color: white; font-weight:600;" align="center">' +
            '<strong><i class="glyphicon glyphicon-ban-circle"></i></strong> ' + danger +
            '</div>');
    }
    if (dat == 2) {
        $('.msg2').html('<div class="alert form-control form-group  text-center" style="font-size:1em; background: red; color: white; font-weight:600;" align="center">' +
            '<strong><i class="glyphicon glyphicon-ban-circle"></i></strong> ' + danger +
            '</div>');
    }
    if (dat == 3) {
        $('.msg3').html('<div class="alert form-control form-group  text-center" style="font-size:1em; background: red; color: white; font-weight:600;" align="center">' +
            '<strong><i class="glyphicon glyphicon-ban-circle"></i></strong> ' + danger +
            '</div>');
    }
    $(".alert").delay(6000).show(10, function() {
        $(this).delay(6000).hide(10, function() {
            $(this).remove();
        });
    });
}