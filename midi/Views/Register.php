<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Register - Maasai Integrated Development Initiatives</title>
        <link href="../Images/Dollar.ico" rel="shortcut icon" type="image/x-icon" />
        <link rel="stylesheet" href="../Content/Site.css" type="text/css" />
        <script src="../Scripts/jquery-2.0.3.js" type="text/javascript"></script>
        <script src="../Scripts/Utils.js"></script> 
        <script src="../Scripts/Register.js"></script> 

    </head>


    <body>

        <header>
            <div class="content-wrapper">

                <div class="float-left">
                    <p class="site-title" title="Fanikiwa - Peer - To - Peer Lending">
                        Maasai Integrated Development Initiatives(MIDI)</p>
                </div>


                <div class="float-right">
                    <section id="login">
                        <text> Welcome To MIDI Projects</text>
                    </section>
                </div>

            </div>


        </header>




        <div id="body"   onload="EnableButtons();">


            <section class="content-wrapper main-content clear-fix">

                <div id="error-display-div" class="displaynone"></div>


                <hgroup class="title">
                    <h2 class="page-title">Register</h2>
                </hgroup>

<!--                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">-->
                <form action="../DAL/Register.php" method="post"  autocomplete="on" onsubmit="return validateFormOnSubmit();" >

                    <fieldset>
                        <legend>Register</legend>

                        <article class="col1">
                            <div class="pad">

                                <div>
                                    <label for="txtEmail">Email(user@domain.com)</label> <input
                                        id="txtEmail" autocomplete placeholder="Email(user@domain.com)"
                                        autofocus type="text"></input>
                                </div>

                                <div>
                                    <label for="txtPassword">Password</label> <input
                                        id="txtPassword" autocomplete placeholder="Password"
                                        type="password"></input>
                                </div>

                                <div>
                                    <label for="txtTelephone">Telephone</label> <input
                                        id="txtTelephone" autocomplete placeholder="Telephone"
                                        type="tel"></input>
                                </div> 

                            </div>
                        </article>

<!--                        <div style="float: left; clear: both">
                            <input id="btnRegister" type="submit"
                                   value="Loading please wait..."
                                   style="cursor: wait; background-color: grey; color: red;"
                                   disabled/> Already Registered Click <a id="btnLogin"
                                   href="../Views/Login.php" style="cursor: pointer;">Here </a> To
                            Login
                        </div>-->


                                                <div style="float: left; clear: both">
                        
                                                    <input id="btnRegister" type="submit" value="Register"/>  Already Registered Click <a id="btnLogin"
                                                                                                                                          href="../Views/Login.php" style="cursor: pointer;">Here
                                                    </a> To Login
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
                    Software Providers Limited.</span> <span
                    style="float: left; padding-left: 2px; padding-right: 2px;">All
                    Rights Reserved.</span>
            </div>

        </footer>




        <script type="text/javascript">

            $(document).ready(function () {
                $("#btnRegister").removeAttr('style');
                $("#btnRegister").removeAttr('disabled');
                $("#btnRegister").val('Register');
                EnableButtons();
            });

            function EnableButtons() {
                $("#btnRegister").removeAttr('style');
                $("#btnRegister").removeAttr('disabled');
                $("#btnRegister").val('Register');
                var btnRegister = document.querySelector('#btnRegister');
                btnRegister.addEventListener('click', function () {
                    midi.userendpoint.register();
                });
                var txtEmail = document.querySelector('#txtEmail');
                txtEmail.addEventListener('change', function () {
                    var email = document.getElementById('txtEmail').value;
                    midi.userendpoint.isEmailValid(email);
                });
            }
            ;

            funciton
            validateFormOnSubmit()
            {
                //do client side validation 
                if (true == validation) {
                    //do the `ajax` call with serialized form data
                    $('#btnRegister').click(function () {
                        var this_hre
                        f = $(this).attr('href');
                        $.ajax({
                            url: this_href,
                            type: 'post',
                            cache: false,
                            success: function (data)
                            {
                                $('#successmessage').html(data);
                            }
                        });
//                return false;
                        return true;
                    });
                }
                else {
                    //show error 
                }
                return false; // because we want to submit only through `ajax`, so stopping original form submit.
            }


        </script>




    </body>


</html>
