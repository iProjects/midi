<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Create Transaction Type | Maasai Integrated Development Initiatives</title>
        <link href="../../Images/Dollar.ico" rel="shortcut icon" type="image/x-icon" />
        <link href="../../Content/Site.css" type="text/css"  rel="stylesheet" />
        <script src="../../Scripts/jquery-2.0.3.js" type="text/javascript"></script>
        <script src="../../Scripts/MainMenu.js"></script> 
        <script src="../../Scripts/loginutil.js"></script>
        <script src="../../Scripts/Utils.js"></script> 


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
                    <h2 class="page-title">Create Transaction Type</h2>
                </hgroup>

                <div style="float: left; clear: both">
                    <input id="btnCreate" type="submit" value="Loading please wait..."
                           style="cursor: wait; background-color: grey; color: red;" disabled />
                    <input type="button" value="Back"
                           onclick="window.history.go(-1);
                                   return false;" />
                </div>

                <div id="apiResults" style="float: left; clear: both"></div>
                <div id="successmessage" style="float: left; clear: both"></div>
                <div id="errormessage" style="float: left; clear: both"></div>

                <div style="float: left; clear: both">

                     <form id="form-createtransactiontype"  action="../../DAL/CreateTransactionType.php" method="post" enctype="multipart/form-data">

                        <fieldset>
                            <legend>Create Transaction Type</legend>

                            <div id="column-div" class="clearboth">

                                <article class="col1">
                                    <div class="pad">

                                        <div>
                                            <label for="txtshortCode">Short Code</label> <input
                                                id="txtshortCode" placeholder="Short Code" autofocus
                                                autocomplete type="text"
                                                title="Transaction type short code; used by narrative formatter"></input>
                                        </div>

                                        <div>
                                            <label for="txtdescription">Description</label> <input
                                                id="txtdescription" placeholder="Description" type="text"
                                                autocomplete title="Describes the transaction"></input>
                                        </div>

                                        <div>
                                            <label for="cbodebitCredit">Debit Credit</label> <select
                                                id="cbodebitCredit" style="width: 95%;"
                                                title="[D|C] Determines how to treate the amount for Main and Contra transactions. When set to 1) D - the amount in Main transaction is -ve and the amount in Contra transaction is +ve 2) C - opposite of 1 above">
                                                <option value="" selected="selected">(Select Debit
                                                    Credit)</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label for="cbotieredTableId">Tiered Table</label> <select
                                                id="cbotieredTableId" style="width: 95%;"
                                                title="Identifies the table to be used by either Tiered or Lookup computation.">
                                                <option value="" selected="selected">(Select
                                                    Tiered Table)</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label for="cbotxnTypeView">Transaction Type View</label> <select
                                                id="cbotxnTypeView" style="width: 95%;"
                                                title="[0|1|2] For future use. Used to draw the screen for dialog use. 0 - Draw View">
                                                <option value="" selected="selected">(Select
                                                    Transaction Type View)</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label for="cbotxnClass">Transaction Class</label> <select
                                                id="cbotxnClass" style="width: 95%;" title="For future use.">
                                                <option value="" selected="selected">(Select
                                                    Transaction Class)</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label for="txtamountExpression">Amount Expression</label> <input
                                                id="txtamountExpression" placeholder="Amount Expression"
                                                autocomplete type="text"
                                                title="For future use: An expression that evaluates to an amount value."></input>
                                        </div>

                                        <div>
                                            <label for="cbodialogFlag">Dialog Flag</label> <select
                                                id="cbodialogFlag" style="width: 95%;"
                                                title="[0|1|2]For future use. 0 - Transaction can be used both in background(System) or Dialog(user) 1 - Dialog only 2 - System only">
                                                <option value="" selected="selected">(Select
                                                    Dialog Flag)</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label for="cbonarrativeFlag">Narrative Flag</label> <select
                                                id="cbonarrativeFlag" style="width: 95%;"
                                                title="For future use.">
                                                <option value="" selected="selected"></input>(Select
                                                    Narrative Flag)
                                                </option>
                                            </select>
                                        </div>

                                        <div>
                                            <label for="cbochargeWho">Charge Who</label> <select
                                                id="cbochargeWho" style="width: 95%;"
                                                title=" D|C. If D, the account being debited is charged commission otherwise the credit account is charged">
                                                <option value="" selected="selected">(Select
                                                    Charge Who)</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label for="chkstatFlag">Statement Flag</label> <input
                                                id="chkstatFlag" placeholder="Statement Flag" type="checkbox"
                                                title="[S|] S- the transaction will appear in the statement">
                                        </div>

                                        <div>
                                            <label for="txtvalueDateOffset">Value Date Offset</label> <input
                                                id="txtvalueDateOffset" placeholder="Value Date Offset"
                                                type="number" min="0"
                                                title="The number of days amount remains uncleared. The value should be positive. Added to the postdate to get valuedate"></input>
                                        </div>

                                        <div>
                                            <label for="chkforcePost">Force Post</label> <input
                                                id="chkforcePost" placeholder="Force Post" type="checkbox"
                                                title=" When set, the transaction shall be posted without checking LimitFlag or PassFlag of the account. i.e can post even to blocked/disabled/overdrawn accounts."></input>
                                        </div>

                                        <div>
                                            <label for="chkcanSuspend">Can Suspend</label> <input
                                                id="chkcanSuspend" placeholder="Can Suspend" type="checkbox"
                                                title="When set, if an account used in this transaction type is does not exist, the value is posted in the suspenseCrAccount or suspenseDrAccount defined here. The suspenseDrAccount & suspenseCrAccount accounts are not tested for existence When Not Set, an exception is thrown"></input>
                                        </div>

                                        <div id="divSuspense">
                                            <div>
                                                <label for="txtsuspenseCrAccount">Suspense Credit
                                                    Account</label> <input id="txtsuspenseCrAccount"
                                                                       placeholder="Suspense Credit Account" type="number" min="0"
                                                                       title="Account to suspend a credit transaction."></input>
                                            </div>

                                            <div>
                                                <label for="txtsuspenseDrAccount">Suspense Debit
                                                    Account</label><input id="txtsuspenseDrAccount"
                                                                      placeholder="Suspense Debit Account" type="number" min="0"
                                                                      title="Account to suspend a debit transaction."></input>
                                            </div>
                                        </div>

                                    </div>
                                </article>

                                <article class="col2">
                                    <div class="pad">

                                        <div>
                                            <label for="chkchargeCommission">Charge Commission</label> <input
                                                id="chkchargeCommission" placeholder="Charge Commission"
                                                type="checkbox"
                                                title="When set, commission is computed and posted otherwise it is not"></input>
                                        </div>

                                        <div id="divCommission">
                                            <div>
                                                <label for="chkchargeCommissionToTransaction">Charge
                                                    Commission To Transaction</label> <input
                                                    id="chkchargeCommissionToTransaction"
                                                    placeholder="Charge Commission To Transaction"
                                                    type="checkbox"
                                                    title="if true, the computed commission is removed from the transaction itself. 3 transactions are created instead of 4."></input>
                                            </div>

                                            <div>
                                                <label for="cbocommissionNarrativeFlag">Commission
                                                    Narrative Flag</label> <select id="cbocommissionNarrativeFlag"
                                                                               style="width: 95%;"
                                                                               title="Determines which narrative formatting method to use.">
                                                    <option value="" selected="selected">(Select
                                                        Commission Narrative Flag)</option>
                                                </select>
                                            </div>

                                            <div>
                                                <label for="cbocommComputationMethod">Commission
                                                    Computation Method</label> <select id="cbocommComputationMethod"
                                                                                   style="width: 95%;"
                                                                                   title="[L|T\F] L = Lookup commission from a table. T = Compute tiered value from a Tieredtable F = Flate rate">
                                                    <option value="" selected="selected">(Select
                                                        Commission Computation Method)</option>
                                                </select>
                                            </div>

                                            <div>
                                                <label for="cbodrCommCalcMethod">Debit Commission
                                                    Calculation Method</label> <select id="cbodrCommCalcMethod"
                                                                                   style="width: 95%;" title="For future use.">
                                                    <option value="" selected="selected">(Select
                                                        Debit Commission Calculation Method)</option>
                                                </select>
                                            </div>

                                            <div>
                                                <label for="cbocrCommCalcMethod">Credit Commission
                                                    Calculation Method</label> <select id="cbocrCommCalcMethod"
                                                                                   style="width: 95%;" title="For future use.">
                                                    <option value="" selected="selected">(Select
                                                        Credit Commission Calculation Method)</option>
                                                </select>
                                            </div>

                                            <div>
                                                <label for="txtcommissionDrAccount">Commission Debit
                                                    Account</label><input id="txtcommissionDrAccount"
                                                                      placeholder="Commission Debit Account" type="number" min="0"
                                                                      title="For future use."></input>
                                            </div>

                                            <div>
                                                <label for="txtcommissionCrAccount">Commission Credit
                                                    Account</label> <input id="txtcommissionCrAccount"
                                                                       placeholder="Commission Credit Account" type="number"
                                                                       min="0"
                                                                       title="The account where commission is credited. It defaults to  Config['COMMISSIONACCOUNT'] if not set."></input>
                                            </div>

                                            <div>
                                                <label for="chkcommissionDrAnotherAccount">Commission
                                                    Debit Another Account</label> <input
                                                    id="chkcommissionDrAnotherAccount"
                                                    placeholder="Commission Debit Another Account"
                                                    type="checkbox" title="For future use."></input>
                                            </div>

                                            <div>
                                                <label for="cbocommissionTransactionType">Commission
                                                    Transaction Type</label> <select id="cbocommissionTransactionType"
                                                                                 style="width: 95%;"
                                                                                 title=" Used to post commission transaction if this transaction canCharge commission. If not set, defaults to Config.GetTransactionType('COMMISSIONTRANSACTIONTYPE')">
                                                    <option value="" selected="selected">(Select
                                                        Commission Transaction Type)</option>
                                                </select>
                                            </div>

                                            <div>
                                                <label for="txtcommissionAmountExpression">Commission
                                                    Amount Expression</label> <input id="txtcommissionAmountExpression"
                                                                                 placeholder="Commission Amount Expression" type="text"  autocomplete
                                                                                 title=" For future use: An expression that evaluates to an amount value."></input>
                                            </div>

                                            <div>
                                                <label for="txtcommissionMainNarrative">Commission
                                                    Main Narrative</label> <input id="txtcommissionMainNarrative"
                                                                              placeholder="Commission Main Narrative" type="text"  autocomplete
                                                                              title="A formatter string with placeholders for formatting the main commission narrative. The allowable place holders are in the format {abstractMoneyTransaction.*} where *= abstractMoneyTransaction properties Defaults to 'Comm {ShortCode}'"></input>
                                            </div>

                                            <div>
                                                <label for="txtcommissionContraNarrative">Commission
                                                    Contra Narrative</label> <input id="txtcommissionContraNarrative"
                                                                                placeholder="Commission Contra Narrative" type="text"  autocomplete
                                                                                title="A formatter string with placeholders for formatting the contra commission narrative. The allowable place holders are in the format {abstractMoneyTransaction.*} where *= abstractMoneyTransaction properties Defaults to '{ShortCode} Comm{DebitAccount}'"></input>
                                            </div>

                                            <div>
                                                <label for="txtcommissionAmount">Commission Amount</label> <input
                                                    id="txtcommissionAmount" placeholder="Commission Amount"
                                                    type="number" min="0"
                                                    title="Commission amount used in Flatrate method. Can be an absolute or percentage. Interpretation is determined by {absolute} field"></input>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="chkabsolute">Absolute</label> <input
                                                id="chkabsolute" placeholder="Absolute" type="checkbox"
                                                title="When true, the commission amount in the {commissionAmount} field is absolute and not a percentage"></input>
                                        </div>

                                    </div>
                                </article>

                                <article class="col3">
                                    <div class="pad">

                                        <div>
                                            <label for="txtdefaultAmount">Default Amount</label> <input
                                                id="txtdefaultAmount" placeholder="Default Amount"
                                                type="number" min="0"
                                                title="For future use. Default amount for the transaction"></input>
                                        </div>

                                        <div>
                                            <label for="txtdefaultMainAccount">Default Main
                                                Account</label> <input id="txtdefaultMainAccount"
                                                                   placeholder="Default Main Account" type="number" min="0"
                                                                   title="Default main account for the transaction. If set or withdrawal transaction, it overrides the Config[CASHACCOUNT]"></input>
                                        </div>

                                        <div>
                                            <label for="txtdefaultContraAccount">Default Contra
                                                Account</label> <input id="txtdefaultContraAccount"
                                                                   placeholder="Default Contra Account" type="number" min="0"
                                                                   title="For future use. Default contra account for the transaction."></input>
                                        </div>

                                        <div>
                                            <label for="txtdefaultMainNarrative">Default Main
                                                Narrative</label> <input id="txtdefaultMainNarrative"
                                                                     placeholder="Default Main Narrative" type="text"  autocomplete
                                                                     title="A formatter string with placeholders for formatting the main narrative. The allowable place holders are in the format {abstractMoneyTransaction.*} where *= abstractMoneyTransaction properties Defaults to '{ShortCode}' that evaluates to the shortcode of the transaction"></input>
                                        </div>

                                        <div>
                                            <label for="txtdefaultContraNarrative">Default Contra
                                                Narrative</label> <input id="txtdefaultContraNarrative"
                                                                     placeholder="Default Contra Narrative" type="text"  autocomplete
                                                                     title="A formatter string with placeholders for formatting the contra narrative. The allowable place holders are in the format {abstractMoneyTransaction.*} where *= abstractMoneyTransaction properties Defaults to '{ShortCode}' that evaluates to the shortcode of the transaction"></input>
                                        </div>

                                    </div>
                                </article>

                            </div>

                        </fieldset>


                    </form>

                </div>

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

            $(document).ready(function () {
                $("#btnCreate").removeAttr('style');
                $("#btnCreate").removeAttr('disabled');
                $("#btnCreate").val('Create');
            });

            $("#btnCreate").on("click", function (e) {

                e.preventDefault();

                var errormsg = '';
                $('#errorList').remove();
                $('#error-display-div').empty();
                errormsg += '<ul id="errorList">';
                var error_free = true;

                // Validate the entries 
                var _chargeWho = document.getElementById('cbochargeWho').value;
                var _debitCredit = document.getElementById('cbodebitCredit').value;
                var _description = document.getElementById('txtdescription').value;
                var _shortCode = document.getElementById('txtshortCode').value;
                var _tieredTableId = document.getElementById('cbotieredTableId').value;
                var _valueDateOffset = document.getElementById('txtvalueDateOffset').value;

                if (_shortCode.length == 0) {
                    errormsg += '<li>' + " Short Code cannot be null " + '</li>';
                    error_free = false;
                }
                if (_description.length == 0) {
                    errormsg += '<li>' + " Description cannot be null " + '</li>';
                    error_free = false;
                }
                if (_debitCredit.length == 0 || _debitCredit == -1) {
                    errormsg += '<li>' + " Select DebitCredit " + '</li>';
                    error_free = false;
                }
                if (_tieredTableId.length == 0 || _tieredTableId == -1) {
                    errormsg += '<li>' + " Select Tiered Table " + '</li>';
                    error_free = false;
                }
                if (_chargeWho.length == 0 || _chargeWho == -1) {
                    errormsg += '<li>' + " Select Charge Who " + '</li>';
                    error_free = false;
                }
                if (_valueDateOffset.length != 0 && _valueDateOffset < 0) {
                    errormsg += '<li>' + " value Date Offset must be a positive number "
                            + '</li>';
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
                    $('#errorList').remove();
                    $('#error-display-div').empty();
                    $("#form-createtransactiontype").submit();
                }
            });

        </script>


    </body>


</html>
