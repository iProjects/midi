
/** global namespace for projects. */
var ufanisingo = ufanisingo || {};
ufanisingo.registeration = ufanisingo.registeration || {};
ufanisingo.registeration.register = ufanisingo.registeration.register || {};


var errormsg = '';
errormsg += '<ul id="errorList">';

$(document).ready(function () {

    $("#btnRegister").removeAttr('style');
    $("#btnRegister").removeAttr('disabled');
    $("#btnRegister").val('Register');

    var btnRegister = document.querySelector('#btnRegister');
    btnRegister.addEventListener('click', function () {

        errormsg = '';
        ClearException();
        errormsg += '<ul id="errorList">';
        var error_free = true;
        $('#apiResults').html('');

        // Validate the entries
        var _Email = document.getElementById('txtEmail').value;
        var _Pwd = document.getElementById('txtPassword').value;
        var _Telephone = document.getElementById('txtTelephone').value;

        if (_Email.length == 0) {
            errormsg += '<li>' + " Email cannot be null " + '</li>';
            error_free = false;
        }
        if (_Pwd.length == 0) {
            errormsg += '<li>' + " Password cannot be null " + '</li>';
            error_free = false;
        }
        if (_Telephone.length == 0) {
            errormsg += '<li>' + " Telephone cannot be null " + '</li>';
            error_free = false;
        }

        if (!error_free) {
            errormsg += "</ul>";
            $("#error-display-div").html(errormsg);
            $("#error-display-div").removeClass('displaynone');
            $("#error-display-div").addClass('displayblock');
            $("#error-display-div").show();
            return;
        } else {
            ClearException();
        }

        $('#apiResults').html('registering...');
        $('#successmessage').html('');
        $('#errormessage').html('');

    });
 
    $('#lnkloggedinuser').text(sessionStorage.getItem('loggedinuser'));
});
 
function DisplayException(errormsg) {

    errormsg += "</ul>";

    $("#error-display-div").html(errormsg);
    $("#error-display-div").removeClass('displaynone');
    $("#error-display-div").addClass('displayblock');
    $("#error-display-div").show();
}

function ClearException() {
    $('#errorList').remove();
    $('#error-display-div').empty();
}
