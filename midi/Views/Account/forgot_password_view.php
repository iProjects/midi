<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head id="header"  >

        <title>Users | Maasai Integrated Development Initiatives</title>

        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link id="iconlogo"  href="../../Images/midi_logo.ico" rel="shortcut icon" type="image/x-icon" />
        <link rel="stylesheet" href="../../Content/jquery-ui-1.8.11.css" type="text/css"
              media="all" />
        <link rel="stylesheet" href="../../Content/jquery.dataTables.min.css"
              type="text/css" media="all" />
        <link rel="stylesheet" href="../../Content/bootstrap.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../Content/jquery.steps.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../Content/countrySelect.min.css"
              type="text/css" media="all" />
        <link rel="stylesheet" href="../../Content/intlTelInput.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../Content/Site.css" type="text/css"
              media="all" />
        <script language="javascript" type="text/javascript"  src="../../Scripts/jquery-2.0.3.js"></script>
        <script language="javascript" type="text/javascript"  src="../../Scripts/jquery-migrate-1.2.1.min.js"></script>
        <script language="javascript" type="text/javascript"  src="../../Scripts/jquery-ui-1.8.11.js"></script>
        <script language="javascript" type="text/javascript"  src="../../Scripts/jquery.dataTables.min.js"></script>
        <script language="javascript" type="text/javascript"  src="../../Scripts/jquery.json.min.js"></script>
        <script language="javascript" type="text/javascript"  src="../../Scripts/jquery.client.js"></script>
        <script language="javascript" type="text/javascript"  src="../../Scripts/jquery.steps.min.js"></script>
        <script language="javascript" type="text/javascript"  src="../../Scripts/Utils.js"></script>
        <script language="javascript" type="text/javascript"  src="../../Scripts/countrySelect.min.js"></script>
        <script language="javascript" type="text/javascript" src="../../Scripts/intlTelInput.min.js"></script>
        <script language="javascript" type="text/javascript" src="../../Scripts/intlTelInputUtils.js"></script>

    </head>

    <?php
    session_start();
    include ("../../DAL/MySqlConnection.php");
    ?>

    <body id="frmmain">

        <div id="div-delete-dialog"></div>

        <div id="wrapper">

            <div id="leftcolumn">

                <div id="div-site-title">

                    <div style="float: left; clear: both; position: relative; display: block;">

                        <div id="divlogo">

                            <img id="logo" alt="Maasai Integrated Development Initiatives" src="../../Images/midi_logo.jpg" runat="server" style="clear: both; float: left;" title="Maasai Integrated Development Initiatives" />

                        </div>

                        <div id="divtitle">

                            <span class="pagetitle">Maasai Integrated Development Initiatives - Users</span>

                        </div>

                        <div id="divstatus">

                            <asp:Label ID="lblWelcome"   Font-Names="Calibri" Font-Size="small"
                                       Style="text-align: left;">Welcome : </asp:Label>
                            <asp:Label ID="lblStatus"   Font-Names="Calibri" Font-Size="small"
                                       Style="text-align: left; font-weight: bolder;">Status</asp:Label>

                        </div>

                        <div id="divversion" style="clear: both; float: left; display: block; position: relative;">

                            <asp:Label ID="lblversion"   Font-Names="Calibri" Font-Size="small"
                                       Style="text-align: left;">Version : </asp:Label>
                            <asp:Label ID="lblversionvalue"   Font-Names="Calibri" Font-Size="small"
                                       Style="text-align: left; font-weight: bolder;">Version</asp:Label>

                        </div>

                        <div id="divgeolocation" style="clear: both; float: left; display: block; position: relative;">
                        </div>

                        <div id="divmenu">

                            <div id="MainMenu"></div>
                            <div id="SubMenu"></div>

                        </div>

                        <div id="divlogoff">

                            <a id="btnLogout" href="../../DAL/log_out.php" title="Logout">Logout</a>

                        </div>

                    </div>

                </div>

            </div>

            <div id="rightcolumn">

                <div id="body">

                    <div class="content-wrapper main-content">

                        <div style="float: left; clear: both; background: none; border: 0px; border-radius: 0px; padding: 0px; margin: 0px;">

                            <div id="divvalidationresultcontrols" style="float: left; clear: both">
                            </div>

                        </div>

                        <div class="divtabledisplay" style="float: left; clear: both; padding-top: 20px; height: auto !important; width: 100%;">
                            <div> <h2 class="page-title">Users[ 
                                    <?php
                                    $sql_select = "SELECT * FROM midi_users";
                                    $stmt = $conn->query($sql_select);
                                    $users = $stmt->fetchAll();
                                    echo count($users);
                                    $stmt->closeCursor();
                                    ?> ]</h2></div>
                            <div id="divtabledisplayassets" style="height: auto; width: 100%;">

                                <div id="listUsersResult" style="clear: both; padding-bottom: 20px !important;">

                                    <?php
                                    try {

                                        $sql_select = "SELECT * FROM midi_users";
                                        $stmt = $conn->query($sql_select);
                                        $users = $stmt->fetchAll();

                                        echo "<table id='listUsersTable'>";
                                        echo "<thead>";
                                        echo "<tr>";
                                        echo "<th>Id</th>";
                                        echo "<th>Email</th>";
                                        echo "<th>Phone</th>";
                                        echo "<th>User Type</th>";
                                        echo "<th>Status</th>";
                                        echo "<th>Role</th>";
                                        echo "<th>Last Login Date</th>";
                                        echo "<th>Employee Id</th>";
                                        echo "<th></th>";
                                        echo "<th></th>";
                                        echo "</tr>";
                                        echo "</thead>";
                                        echo "<tbody>";

                                        if (count($users) > 0) {

                                            foreach ($users as $user) {
                                                echo "<tr>";
                                                echo "<td>" . $user['auto_id'] . "</td>";
                                                echo "<td>" . $user['us_email'] . "</td>";
                                                echo "<td>" . $user['us_telephone'] . "</td>";
                                                echo "<td>" . $user['us_usertype'] . "</td>";
                                                echo "<td>" . $user['us_status'] . "</td>";
                                                echo "<td>" . $user['us_role'] . "</td>";
                                                echo "<td>" . $user['us_lastlogindate'] . "</td>";
                                                echo "<td>" . $user['us_employee_id'] . "</td>";
                                                echo '<td><a href="#" onclick="Edit(' . $user['auto_id'] . ')">Edit</a>';
                                                echo '<td><a href="#" onclick="Delete(' . $user['auto_id'] . ')">Delete</a>';
                                                echo "</tr>";
                                            }
                                        }
                                        echo "</tbody>";
                                        echo "</table>";

                                        $stmt->closeCursor();

                                        CloseConnection();
                                    } catch (Exception $e) {
                                        $successmsg .= $e->getMessage();
                                        if ($e->getTraceAsString() != NULL) {
                                            $successmsg .= "<br/>" . $e->getTraceAsString();
                                        }
                                        echo($successmsg);
                                        return $successmsg;
                                    }
                                    ?>

                                </div>

                                <form action="../../DAL/DeleteUser.php" method="POST" id="form-delete-dialog">
                                    <div id="div-delete-dialog">  
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div id="divfooter">

            <hr />

            <div id="div-copyright">
                <span id="copyright">Copyright &copy;</span> <span id="footerdate"></span>
                <span id="companyname">Daksen ICT.</span> <span
                    id="rightsreserved">All Rights Reserved.</span>
                <span id="lblloggedinas"></span>
            </div>

        </div>

        <script language="javascript" type="text/javascript">

            $(document).ready(function () {
                try {
                    RedirectToLoginIfUserIsNotLoggedIn();
                }
                catch (err) {
                    showErrorMessage(err);
                }
            });

            function RedirectToLoginIfUserIsNotLoggedIn() {
                var loggedinuserid = sessionStorage.getItem('ison_travel_loggedinuserid');
                if (loggedinuserid === null || loggedinuserid === undefined) {
                    //window.location.href = "../../Views/Account/Login.php";
                }
            }
        </script>

        <script language="javascript" type="text/javascript">

            $(document).ready(function () {
                try {

                    RedirectToLoginIfUserIsNotLoggedIn();

                    createValidationControls();

                    CreateMainMenu();

                    CreateSubMenu();

                    refreshAnchorTags();

                    $('#listUsersTable').DataTable(
                            {
                                "aLengthMenu": [[5, 10, 20, 50, 100, -1],
                                    [5, 10, 20, 50, 100, "All"]],
                                "iDisplayLength": 5
                            });

                }
                catch (err) {
                    showErrorMessage(err);
                }
            });

            function CreateMainMenu() {
                var MainMenu = [];
                MainMenu.push('<div class="nav"><ul class="menu">');
                MainMenu
                        .push('<li><a href="../../Views/Home/index.php" style="cursor: pointer;" title="Home">Home</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Asset/List.php" style="cursor: pointer;" title="Assets">Assets</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Employee/List.php" style="cursor: pointer;" title="Employees">Employees</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/User/List.php" style="cursor: pointer;" title="Users">Users</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/conservation_agriculture/List.php" style="cursor: pointer;" title="Conservation Agriculture">Conservation Agriculture</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/hay_bale/List.php" style="cursor: pointer;" title="Hay and Bale">Hay and Bale</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/livestock_farming/List.php" style="cursor: pointer;" title="Livestock Farming">Livestock Farming</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/sand_dam/List.php" style="cursor: pointer;" title="Sand Dams">Sand Dams</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/training/List.php" style="cursor: pointer;" title="Trainings">Trainings</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Account/change_password_view.php" style="cursor: pointer;" title="Change Password">Change Password</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Home/help_view.php" style="cursor: pointer;" title="Help">Help</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Home/about_view.php" style="cursor: pointer;" title="About">About</a></li>');
                MainMenu
                        .push('<li><a href="../../Views/Home/contact_us_view.php" style="cursor: pointer;" title="Contact Us">Contact Us</a></li>');
                MainMenu.push('</ul></div>');

                $("#MainMenu").html(MainMenu.join(" "));
            }

            function CreateSubMenu() {
                var SubMenu = [];
                SubMenu.push('<div class="nav"><ul class="menu">');
                SubMenu
                        .push('<li><a href="../../Views/User/Create.php" style="cursor: pointer;" title="Create">Create</a></li>');
                SubMenu.push('</ul></div>');

                $("#SubMenu").html(SubMenu.join(" "));
            }

            function refreshAnchorTags() {

                window.setTimeout('$("a").removeClass("displaynone");' +
                        '$("a").addClass("displayblock");$("a").show();', 500);

                window.setTimeout('$("a").removeClass("displaynone");' +
                        '$("a").addClass("displayblock");$("a").show();', 2000);

            }

            function createValidationControls() {
                $("#divvalidationresultcontrols").html('<div id="apiResults" style="float: left; clear: both"></div> ' +
                        '<div id="successmessage" style="float: left; clear: both"></div>' +
                        '<div id="errormessage" style="float: left; clear: both"></div> ' +
                        '<div id="error-display-div" class="displaynone" style="float: left; clear: both"></div> ' +
                        '<div id="isuccessmessage" style="float: left; clear: both"></div> ');

            }

            function removeValidationControls() {
                window.setTimeout('$("#apiResults").html("");$("#successmessage").html("");$("#errormessage").html("");ClearMessageControls();$("#divvalidationresultcontrols").empty();', 3000);
            }

            function showErrorMessage(resultMessage) {
                $('#errormessage').append('<br/>' + resultMessage);
                $('#apiResults').html('');
                $('#successmessage').html('');
            }

            function showSuccessMessage(resultMessage) {
                $('#successmessage').append('<br/>' + resultMessage);
                $('#apiResults').html('');
                $('#errormessage').html('');
            }

            function ClearException() {
                $('.errorList').remove();
                $('#error-display-div').empty();
                $('#errordisplaydivedit').empty();
            }

            function ClearMessageControls() {
                $('#successmessage').html('');
                $('#errormessage').html('');
                $('#apiResults').html('');
                $('.errorList').remove();
                $('#error-display-div').empty();
                $('#errordisplaydivedit').empty();
                $('#successmessageedit').html('');
                $('#errormessageedit').html('');
                $('#apiresultedit').html('');
            }

        </script>


    </body>
</html>
