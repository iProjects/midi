<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Assets | Maasai Integrated Development Initiatives</title>
        <link href="../../Images/Dollar.ico" rel="shortcut icon" type="image/x-icon" />
        <link rel="stylesheet" href="../../Content/jquery-ui-1.8.11.css" type="text/css"
              media="all" />
        <link rel="stylesheet" href="../../Content/jquery.dataTables.css"
              type="text/css" media="all" />
        <link rel="stylesheet" href="../../Content/Site.css" type="text/css"
              media="all" />
        <script src="../../Scripts/jquery-2.0.3.js" type="text/javascript"></script>
        <script src="../../Scripts/jquery-migrate-1.2.1.js"></script>
        <script src="../../Scripts/jquery-ui-1.8.11.js"></script>
        <script src="../../Scripts/MainMenu.js"></script> 
        <script src="../../Scripts/loginutil.js"></script>
        <script src="../../Scripts/Utils.js"></script> 
        <script src="../../Scripts/jquery.dataTables.min.js"></script>


    </head>


    <body>

        <header>

            <div id="div-site-title">

                <div class="site-title">
                    <span title="Maasai Integrated Development Initiatives(MIDI)">Maasai Integrated Development Initiatives(MIDI)</span>
                </div>

            </div>

            <div id="MainMenu"></div>
            <div id="SubMenu"></div>


            <div id="div-login">
                <section id="login">
                    <text> Welcome To MIDI, <a id="lnkloggedinuser"
                                               style="cursor: pointer;" href="#" onclick="ManageProfile()"
                                               title="Manage Profile"></a> <a id="lnklogoff"
                                               style="cursor: pointer;" href="#" onclick="LogOff()"
                                               title="Log Off">Log off</a> </text>
                </section>
            </div>

        </header>




        <div id="body">


            <section class="content-wrapper main-content clear-fix">

                <div id="error-display-div" class="displaynone"></div>

                <hgroup class="title">
                    <h2 class="page-title">Assets[ 
                        <?php
                        include ("../../DAL/MySqlConnection.php");
                        $sql_select = "SELECT * FROM midiassets";
                        $stmt = $conn->query($sql_select);
                        $assets = $stmt->fetchAll();
                        echo count($assets);
                        $stmt->closeCursor();
                        ?> ]</h2>
                </hgroup>

                <div id="apiResults" style="float: left; clear: both"></div>
                <div id="successmessage" style="float: left; clear: both"></div>
                <div id="errormessage" style="float: left; clear: both"></div>

                <div id="listAssetsResult" style="clear: both">

                    <?php
                    try {

                        $sql_select = "SELECT * FROM midiassets";
                        $stmt = $conn->query($sql_select);
                        $assets = $stmt->fetchAll();

                        echo "<table id='listAssetsTable'>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>Id</th>";
                        echo "<th>Name</th>";
                        echo "<th>Type</th>";
                        echo "<th>Date Acquired</th>";
                        echo "<th>Acquired Value</th>";
                        echo "<th>Current Value</th>";
                        echo "<th></th>";
                        echo "<th></th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";

                        if (count($assets) > 0) {

                            foreach ($assets as $asset) {
                                echo "<tr>";
                                echo "<td>" . $asset['id'] . "</td>";
                                echo "<td>" . $asset['assetname'] . "</td>";
                                echo "<td>" . $asset['assettype'] . "</td>";
                                echo "<td>" . $asset['dateacquired'] . "</td>";
                                echo "<td>" . $asset['acquiredvalue'] . "</td>";
                                echo "<td>" . $asset['currentvalue'] . "</td>";
                                echo '<td><a href="#" onclick="Edit(' . $asset['id'] . ')">Edit</a>';
                                echo '<td><a href="#" onclick="Delete(' . $asset['id'] . ')">Delete</a>';
                                echo "</tr>";
                            }
                        }
                        echo "</tbody>";
                        echo "</table>";

                        $stmt->closeCursor();

                        CloseConnection();
                    } catch (Exception $e) {
                        $msg .= $e->getMessage();
                        if ($e->getTraceAsString() != NULL) {
                            $msg .= "<br/>" . $e->getTraceAsString();
                        }
                        echo($msg);
                        return $msg;
                    }
                    ?>

                </div>

                <form action="../../DAL/DeleteAsset.php" method="POST" id="form-delete-dialog">
                    <div id="div-delete-dialog">  
                    </div>
                </form>

            </section>


        </div>

        <footer>

            <hr />

            <div id="div-runningtime">
                <span id="runningtime"></span> 
                <span id="runningdaynighttime"></span> 
            </div>

            <div id="div-copyright">
                <span id="copyright">Copyright &copy;</span> <span id="footerdate"></span>
                <span id="companyname"> KDBetting Limited.</span> <span
                    id="rightsreserved">All Rights Reserved.</span>
            </div> 

        </footer>

        <script type="text/javascript">
 
            function CreateSubMenu() {
                var SubMenu = [];
                SubMenu.push('<div class="nav"><ul class="menu">');
                SubMenu
                        .push('<li><div class="floatleft"><div><a href="../../Views/Asset/Create.php" style="cursor: pointer;" >Create</a></div></div></li>');
                SubMenu.push('</ul></div>');

                $("#SubMenu").html(SubMenu.join(" "));
            }

            $(document).ready(function () {
                CreateSubMenu();

                $('#listAssetsTable').DataTable(
                        {
                            "aLengthMenu": [[5, 10, 20, 50, 100, -1],
                                [5, 10, 20, 50, 100, "All"]],
                            "iDisplayLength": 5
                        });
            });
 
        function Edit(id, description) {

            ClearException();
            ClearMessageControls();

            // Define the Dialog and its properties.
            $("#diveditdialog").dialog({
                autoOpen: false,
                modal: false,
                title: "Edit Ticket [ " + description + " ] ",
                resizable: true,
                draggable: true,
                closeOnEscape: true,
                open: function () {
                    try {
                        retrieveTicket(id);
                    }
                    catch (err) {
                        showErrorMessage(err);
                        $("#diveditdialog").dialog("destroy");
                        $("#diveditdialog").removeClass('displayblock');
                        $("#diveditdialog").addClass('displaynone');
                        $("#diveditdialog").hide();
                    }
                    $("#diveditdialog").removeClass('displaynone');
                    $("#diveditdialog").addClass('displayblock');
                    $("#diveditdialog").show();
                },
                close: function (event, ui) {
                    $("#diveditdialog").dialog("destroy");
                    $("#diveditdialog").removeClass('displayblock');
                    $("#diveditdialog").addClass('displaynone');
                    $("#diveditdialog").hide();
                },
                buttons: {
                    "Update": function () {
                        try {
                            createValidationControls();
                            UpdateAjax();
                            window.setTimeout('removeValidationControls();', 10000);
                            $("#diveditdialog").removeClass('displayblock');
                            $("#diveditdialog").addClass('displaynone');
                            $("#diveditdialog").hide();
                            $("#diveditdialog").dialog("destroy");
                        }
                        catch (err) {
                            showErrorMessage(err);
                            $("#diveditdialog").dialog("destroy");
                            $("#diveditdialog").removeClass('displayblock');
                            $("#diveditdialog").addClass('displaynone');
                            $("#diveditdialog").hide();
                        }
                    },
                    "Close": function () {
                        $("#diveditdialog").dialog("destroy");
                        $("#diveditdialog").removeClass('displayblock');
                        $("#diveditdialog").addClass('displaynone');
                        $("#diveditdialog").hide();
                        $(this).dialog('close');
                    }
                }
            });

            $("#diveditdialog").removeClass('displaynone');
            $("#diveditdialog").addClass('displayblock');
            $("#diveditdialog").show();
            $("#diveditdialog").dialog("open");
        }

        function retrieveTicket(id) {

            $.ajax({
                type: "POST",
                url: "ticket_details_master_view.aspx/retrieveTicket",
                contentType: "application/json; charset=utf-8",
                dataType: "text",
                data: JSON.stringify({ "id": id }),
                async: true,
                cache: false,
                success: function (response) {
                    var jsonObject = JSON.parse(response);
                    if (jsonObject.d.isSucess) {

                        initializeControls(jsonObject.d.clientToken);

                    } else {
                        showErrorMessage(jsonObject.d.resultMessage);
                    }
                },
                failure: function (response) {
                    var jsonObject = JSON.parse(response);
                    showErrorMessage(jsonObject.d);
                }
            });

        }

        function initializeControls(response) {
            $('#txtticket_id_edit').val(response.ticket_id);
            $('#dtpticket_request_date_edit').val(formatDateForControl(response.ticket_request_date));
            $('#dtpticket_request_date_edit').focus();
            $('#txtticket_request_by_edit').val(response.ticket_request_by);
            $('#txtticket_session_id_edit').val(response.ticket_session_id);
            $('#txtticket_name_edit').val(response.ticket_name);
            $('#txtticket_passport_no_edit').val(response.ticket_passport_no);
            $('#txtticket_from_edit').val(response.ticket_from);
            $('#txtticket_to_edit').val(response.ticket_to);
            $('#txtticket_via_edit').val(response.ticket_via);
            $('#dtpticket_journey_date_edit').val(formatDateForControl(response.ticket_journey_date));
            $('#cboticket_status_edit').val(response.ticket_status);
            $('#cboticket_visa_status_edit').val(response.ticket_visa_status);
            $('#txtticket_approved_by_edit').val(response.ticket_approved_by);
            $('#dtpticket_approved_date_edit').val(formatDateForControl(response.ticket_approved_date));
            $('#txtticket_approved_remarks_edit').val(response.ticket_approved_remarks);
            $('#txtticket_booked_by_edit').val(response.ticket_booked_by);
            $('#dtpticket_booked_at_edit').val(formatDateForControl(response.ticket_booked_at));
            $('#txtticket_booked_remarks_edit').val(response.ticket_booked_remarks);
            $('#txtticket_scan_file_name_edit').val(response.ticket_scan_file_name);
        }

        function UpdateAjax() {

            errormsg = '';
            ClearException();
            ClearMessageControls();
            errormsg += '<ul class="errorList">';
            var error_free = true;

            // Validate the entries 
            var ticket_id = $('#txtticket_id').val();
            var ticket_request_date = $('#dtpticket_request_date_edit').val();
            var ticket_request_by = $('#txtticket_request_by_edit').val();
            var ticket_session_id = $('#txtticket_session_id_edit').val();
            var ticket_name = $('#txtticket_name_edit').val();
            var ticket_passport_no = $('#txtticket_passport_no_edit').val();
            var ticket_from = $('#txtticket_from_edit').val();
            var ticket_to = $('#txtticket_to_edit').val();
            var ticket_via = $('#txtticket_via_edit').val();
            var ticket_journey_date = $('#dtpticket_journey_date_edit').val();
            var ticket_status = $('#cboticket_status_edit').val();
            var ticket_visa_status = $('#cboticket_visa_status_edit').val();
            var ticket_approved_by = $('#txtticket_approved_by_edit').val();
            var ticket_approved_date = $('#dtpticket_approved_date_edit').val();
            var ticket_approved_remarks = $('#txtticket_approved_remarks_edit').val();
            var ticket_booked_by = $('#txtticket_booked_by_edit').val();
            var ticket_booked_at = $('#dtpticket_booked_at_edit').val();
            var ticket_booked_remarks = $('#txtticket_booked_remarks_edit').val();
            var ticket_scan_file_name = $('#txtticket_scan_file_name_edit').val();

            if (ticket_request_date.length == 0) {
                errormsg += '<li>' + " Request Date cannot be null " + '</li>';
                error_free = false;
            }
            if (ticket_request_by.length == 0) {
                errormsg += '<li>' + " Requested By cannot be null " + '</li>';
                error_free = false;
            }
            if (ticket_session_id.length == 0) {
                errormsg += '<li>' + " Session Id cannot be null " + '</li>';
                error_free = false;
            }
            if (ticket_name.length.length == 0) {
                errormsg += '<li>' + " Ticket Name cannot be null " + '</li>';
                error_free = false;
            }
            if (ticket_passport_no.length == 0) {
                errormsg += '<li>' + " Passport Number cannot be null " + '</li>';
                error_free = false;
            }
            if (ticket_from.length.length == 0) {
                errormsg += '<li>' + " From cannot be null " + '</li>';
                error_free = false;
            }
            if (ticket_to.length == 0) {
                errormsg += '<li>' + " To cannot be null " + '</li>';
                error_free = false;
            }
            if (ticket_via.length == 0) {
                errormsg += '<li>' + " via cannot be null " + '</li>';
                error_free = false;
            }
            if (ticket_journey_date.length == 0) {
                errormsg += '<li>' + " Journey Date cannot be null " + '</li>';
                error_free = false;
            }
            if (ticket_status.length == 0) {
                errormsg += '<li>' + " Status cannot be null " + '</li>';
                error_free = false;
            }
            if (ticket_visa_status.length.length == 0) {
                errormsg += '<li>' + " Visa Status cannot be null " + '</li>';
                error_free = false;
            }
            if (ticket_approved_by.length == 0) {
                errormsg += '<li>' + " Approved By cannot be null " + '</li>';
                error_free = false;
            }
            if (ticket_approved_date.length.length == 0) {
                errormsg += '<li>' + " Approval Date cannot be null " + '</li>';
                error_free = false;
            }
            if (ticket_approved_remarks.length == 0) {
                errormsg += '<li>' + " Approval Remarks cannot be null " + '</li>';
                error_free = false;
            }
            if (ticket_booked_by.length == 0) {
                errormsg += '<li>' + " Booked By cannot be null " + '</li>';
                error_free = false;
            }
            if (ticket_booked_at.length == 0) {
                errormsg += '<li>' + " Booked At cannot be null " + '</li>';
                error_free = false;
            }
            if (ticket_booked_remarks.length == 0) {
                errormsg += '<li>' + " Booked Remarks cannot be null " + '</li>';
                error_free = false;
            }
            if (ticket_scan_file_name.length.length == 0) {
                errormsg += '<li>' + " Scanned File cannot be null " + '</li>';
                error_free = false;
            }

            if (!error_free) {
                errormsg += "</ul>";
                $("#errordisplaydivedit").html(errormsg);
                $("#errordisplaydivedit").removeClass('displaynone');
                $("#errordisplaydivedit").addClass('displayblock');
                $("#errordisplaydivedit").show();
                $('html, body').animate({ scrollTop: '0px' }, 500);
                window.setTimeout('ClearMessageControls();', 20000);
                return;
            }
            else {
                ClearException();
                ClearMessageControls();
            }

            // Build the Request Object
            var dto = new Object();
            dto.ticket_id = ticket_id;
            dto.ticket_request_date = ticket_request_date;
            dto.ticket_request_by = ticket_request_by;
            dto.ticket_session_id = ticket_session_id;
            dto.ticket_name = ticket_name;
            dto.ticket_passport_no = ticket_passport_no;
            dto.ticket_from = ticket_from;
            dto.ticket_to = ticket_to;
            dto.ticket_via = ticket_via;
            dto.ticket_journey_date = ticket_journey_date;
            dto.ticket_status = ticket_status;
            dto.ticket_visa_status = ticket_visa_status;
            dto.ticket_approved_by = ticket_approved_by;
            dto.ticket_approved_date = ticket_approved_date;
            dto.ticket_approved_remarks = ticket_approved_remarks;
            dto.ticket_booked_by = ticket_booked_by;
            dto.ticket_booked_at = ticket_booked_at;
            dto.ticket_booked_remarks = ticket_booked_remarks;
            dto.ticket_scan_file_name = ticket_scan_file_name;

            $('#apiresult').html('processing...');
            $("#diveditdialog").dialog("destroy");

            UpdateAjaxNow(dto);
        }

        function UpdateAjaxNow(dto) {

            $.ajax({
                type: "POST",
                url: "ticket_details_master_view.aspx/updateTicket",
                contentType: "application/json; charset=utf-8",
                dataType: "text",
                data: JSON.stringify({
                    "ticket_id": dto.ticket_id,
                    "ticket_request_date": dto.ticket_request_date,
                    "ticket_request_by": dto.ticket_request_by,
                    "ticket_session_id": dto.ticket_session_id,
                    "ticket_name": dto.ticket_name,
                    "ticket_passport_no": dto.ticket_passport_no,
                    "ticket_from": dto.ticket_from,
                    "ticket_to": dto.ticket_to,
                    "ticket_via": dto.ticket_via,
                    "ticket_journey_date": dto.ticket_journey_date,
                    "ticket_status": dto.ticket_status,
                    "ticket_visa_status": dto.ticket_visa_status,
                    "ticket_approved_by": dto.ticket_approved_by,
                    "ticket_approved_date": dto.ticket_approved_date,
                    "ticket_approved_remarks": dto.ticket_approved_remarks,
                    "ticket_booked_by": dto.ticket_booked_by,
                    "ticket_booked_at": dto.ticket_booked_at,
                    "ticket_booked_remarks": dto.ticket_booked_remarks,
                    "ticket_scan_file_name": dto.ticket_scan_file_name
                }),
                processData: false,
                async: true,
                cache: false,
                success: function (response) {
                    var jsonObject = JSON.parse(response);
                    if (jsonObject.d.isSucess) {

                        $('html, body').animate({ scrollTop: '0px' }, 500);
                        showSuccessMessage(jsonObject.d.resultMessage);
                        buildTable();

                    } else {
                        showErrorMessage(jsonObject.d.resultMessage);
                    }
                },
                failure: function (response) {
                    var jsonObject = JSON.parse(response);
                    showErrorMessage(jsonObject.d);
                }
            });
        }

            function Delete(id) {
                // Define the Dialog and its properties.
                $("#div-delete-dialog").dialog({
                    autoOpen: false,
                    modal: true,
                    title: "Confirm Delete",
                    resizable: true,
                    draggable: true,
                    closeOnEscape: true,
                    buttons: {
                        "Yes": function () {
                            $('#form-delete-dialog').submit();
                            $(this).dialog('close');
                        },
                        "No": function () {
                            $(this).dialog('close');
                        }
                    }
                });

                $("#div-delete-dialog").html('<input type="hidden" name="txtid" value="' + id + '" />' +
                        "Are you sure you want to delete Asset [ " + id + " ]");
                $("#div-delete-dialog").parent().appendTo($("#form-delete-dialog"));
                $("#div-delete-dialog").dialog("open");
            }

        </script>



    </body>


</html>
