
<?php
include ("../DAL/Util.php");
?>

<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Register | Maasai Integrated Development Initiatives</title>
        <link href="../Images/Dollar.ico" rel="shortcut icon" type="image/x-icon" />
        <link rel="stylesheet" href="../Content/Site.css" type="text/css" />
        <script src="../Scripts/jquery-2.0.3.js" type="text/javascript"></script>
        <script src="../Scripts/Utils.js"></script>  

    </head>


    <body>

        <header>

            <div id="div-site-title">

                <div class="site-title">
                    <span title="Maasai Integrated Development Initiatives"> Maasai Integrated Development Initiatives </span>
                </div>

                <div class="site-title">
                    <span title="MIDI">MIDI</span>
                </div>

            </div>

            <div id="MainMenu"></div>
            <div id="SubMenu"></div>


            <div id="div-login">
                <section id="login">
                    <text> Welcome To MIDI </text>
                </section>
            </div>


        </header>




        <div id="body" >


            <section class="content-wrapper main-content clear-fix">

                <div id="error-display-div" class="displaynone"></div>


                <hgroup class="title">
                    <h2 class="page-title">Register</h2>
                </hgroup>

                <form action="javascript:void(0);" autocomplete="on"  >

                    <fieldset>
                        <legend>Register</legend>

                        <article class="col1">
                            <div class="pad">

                                <div>
                                    <label for="txtemail">Email(user@domain.com)</label> <input
                                        id="txtemail" autocomplete placeholder="Email(user@domain.com)"
                                        autofocus type="text"></input>
                                </div>

                                <div>
                                    <label for="txtpassword">Password</label> <input
                                        id="txtpassword" autocomplete placeholder="Password"
                                        type="password"></input>
                                </div>

                                <div>
                                    <label for="txttelephone">Telephone</label> <input
                                        id="txttelephone" autocomplete placeholder="Telephone"
                                        type="tel"></input>
                                </div> 

                            </div>
                        </article>


                        <div style="float: left; clear: both">

                            <input id="btnRegister" type="submit" value="Register" onclick="registerAjax();"/>  Already Registered Click 
                            <a id="btnLogin" href="../Views/Login.php" style="cursor: pointer;" >Here</a> To Login

                        </div>

                    </fieldset>

                </form>

                <div id="apiResults" style="float: left; clear: both" ></div>
                <div id="successmessage" style="float: left; clear: both" ></div>
                <div id="errormessage" style="float: left; clear: both" ></div>

            </section>


        </div>





        <footer>

            <hr />

            <div style="margin-left: 30%;">
                <span style="float: left; padding-left: 2px; padding-right: 2px;">Copyright
                    &copy;</span> <span id="footerdate"
                                    style="float: left; padding-left: 2px; padding-right: 2px;"></span>
                <span style="float: left; padding-left: 2px; padding-right: 2px;">
                    KDBetting Limited.</span> <span
                    style="float: left; padding-left: 2px; padding-right: 2px;">All
                    Rights Reserved.</span>
            </div>

        </footer>





        <script type="text/javascript">

            var errormsg = '';
            errormsg += '<ul id="errorList">';

            function registerAjax() {

                errormsg = '';
                ClearException();
                errormsg += '<ul id="errorList">';
                var error_free = true;

                // Validate the entries
                var _email = $('#txtemail').val();
                var _password = $('#txtpassword').val();
                var _telephone = $('#txttelephone').val();

                if (_email.length == 0)
                {
                    errormsg += '<li>' + " Email cannot be null " + '</li>';
                    error_free = false;
                }
                if (_password.length == 0)
                {
                    errormsg += '<li>' + " Password cannot be null " + '</li>';
                    error_free = false;
                }
                if (_telephone.length == 0)
                {
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
                }
                else {
                    ClearException();
                }

                // Build the Request Object
                var user = new Object();
                user.email = _email;
                user.password = _password;
                user.telephone = _telephone;

                $('#apiResults').html('Processing...');

                //post via ajax
//                sendAjaxNow(user);
                sendCORSNow(user);
                //                sendAjaxCORSNow(user);
            }

            function sendAjaxNow(user) {

                var url = '../DAL/Register.php';

                $.ajax({
                    url: url,
                    type: 'POST',
                    dataType: 'html',
                    data: JSON.stringify(user),
                    contentType: 'application/json',
                    mimeType: 'application/json',
                    success: function (msg) {
                        $('#apiResults').html('');
                        $('#errormessage').html('');
                        $('#successmessage').html('Operation successfull...<br/>' + msg);
                    },
                    error: function (xhr, status, error) {
                        $('#apiResults').html('');
                        $('#errormessage').html('');
                        $('#errormessage').html("Error...<br/>xhr =" + xhr.statusText + ",<br/>Status=" + xhr.status + ",<br/>Error=" + error);
                    },
                }).done(function (msg) {
                    $('#apiResults').html(msg);
                });
            }

            function ClearException() {
                $('#errorList').remove();
                $('#error-display-div').empty();
            }

            // Create the XHR object.
            function createCORSRequest(method, url) {
                var xhr = new XMLHttpRequest();
                if ("withCredentials" in xhr) {
                    // XHR for Chrome/Firefox/Opera/Safari.
                    xhr.open(method, url, true);
                } else if (typeof XDomainRequest != "undefined") {
                    // XDomainRequest for IE.
                    xhr = new XDomainRequest();
                    xhr.open(method, url);
                } else {
                    // CORS not supported.
                    xhr = null;
                }
                return xhr;
            }

            function get_token() {
                // your OAuth2 bearer token
                return 'XXXXXXX';
            }

            function sendCORSNow(user) {
                // create new production using the JSON API
                // NOTE: Content-type must be application/json!
                var url = "http://localhost/midi/DAL/Register.php";
                var auth = 'root:""';
                
                var xhr = new createCORSRequest("GET", url);
                xhr.setRequestHeader("Content-type", "application/json; charset=utf-8");
//                xhr.setRequestHeader("Authorization", auth);
                xhr.setRequestHeader("Accept", "application/json");
                xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
                xhr.onload = function (e) {
                    console.log("Production: created");
                    var msg = xhr.responseText;
                    alert('Response from CORS request to ' + url + ': ' + msg);
                };
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == xhr.DONE) {
                        var tempoutput = xhr.response;
                        document.getElementById("apiResults").innerHTML = tempoutput;
                    }
                }
                xhr.onerror = function () {
                    var msg = xhr.responseText;
                    $('#apiResults').html('');
                    $('#errormessage').html('');
                    $('#successmessage').html('Operation successfull...<br/>' + msg);
                    alert('Woops, there was an error making the request.');
                };

                // send some production details in JSON
                xhr.send(JSON.stringify(user));
            }

            function sendAjaxCORSNow(user) {
                $.ajax({
                    // The 'type' property sets the HTTP method.
                    // A value of 'PUT' or 'DELETE' will trigger a preflight request.
                    type: 'GET',
                    // The URL to make the request to.
                    url: 'http://localhost/midi/DAL/Register.php',
                    data: JSON.stringify(user),
                    // The 'contentType' property sets the 'Content-Type' header.
                    // The JQuery default for this property is
                    // 'application/x-www-form-urlencoded; charset=UTF-8', which does not trigger
                    // a preflight. If you set this value to anything other than
                    // application/x-www-form-urlencoded, multipart/form-data, or text/plain,
                    // you will trigger a preflight request.
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'jsonp',
                    crossDomain: true,
                    username: 'root',
                    password: '',
                    jsonp: "callback",
                    xhrFields: {
                        // The 'xhrFields' property sets additional fields on the XMLHttpRequest.
                        // This can be used to set the 'withCredentials' property.
                        // Set the value to 'true' if you'd like to pass cookies to the server.
                        // If this is enabled, your server must respond with the header
                        // 'Access-Control-Allow-Credentials: true'.
                        withCredentials: true
                    },
                    headers: {
                        // Set any custom headers here.
                        // If you set any non-simple headers, your server must include these
                        // headers in the 'Access-Control-Allow-Headers' response header. 

                    },
                    success: function (msg) {
                        // Here's where you handle a successful response.
                        $('#apiResults').html('');
                        $('#errormessage').html('');
                        $('#successmessage').html('Operation successfull...<br/>' + msg);
                    },
                    error: function (xhr, status, error) {
                        // Here's where you handle an error response.
                        // Note that if the error was due to a CORS issue,
                        // this function will still fire, but there won't be any additional
                        // information about the error.
                        $('#apiResults').html('');
                        $('#errormessage').html('');
                        $('#errormessage').html("Error...<br/>xhr =" + xhr.statusText + ",<br/>Status=" + xhr.status + ",<br/>Error=" + error);
                    }
                });
            }

        </script>



    </body>


</html>
