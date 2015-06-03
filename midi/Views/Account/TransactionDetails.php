﻿<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Transaction Details | Fanikiwa - Administrator</title>
<link href="/Images/Dollar.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" href="/Content/Site.css" type="text/css" />
<script src="/Scripts/jquery-2.0.3.js" type="text/javascript"></script>
<script src="/Scripts/MainMenu.js"></script>
<script src="/Scripts/fanikiwa.js"></script>
<script src="/Scripts/CustomScripts.js" type="text/javascript"></script>
<script src="/Scripts/DetailTransactions.js"></script>


</head>


<body>

	<header>

		<div id="div-site-title">

			<div class="site-title">
				<span title="Fanikiwa"> Fanikiwa </span>
			</div>

			<div class="site-title">
				<span title="Administrator">Administrator</span>
			</div>

		</div>

		<div id="MainMenu"></div>
		<div id="SubMenu"></div>


		<div id="div-login">
			<section id="login">
				<text> Welcome To Fanikiwa, <a id="lnkloggedinuser"
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
				<h2 class="page-title">Transaction Details</h2>
			</hgroup>

			<div style="float: left; clear: both">
				<input type="button" value="Back"
					onclick="window.history.go(-1); return false;" />
			</div>

			<div id="apiResults" style="float: left; clear: both"></div>
			<div id="successmessage" style="float: left; clear: both"></div>
			<div id="errormessage" style="float: left; clear: both"></div>

			<div style="float: left; clear: both">

				<form action="javascript:void(0);">

					<fieldset>
						<legend>Transaction Details</legend>

						<div id="column-div" class="clearboth">

							<article class="col1">
								<div class="pad">

									<div>
										<label for="txttransactionID">ID</label> <input
											id="txttransactionID" placeholder="ID" disabled type="number"
											min="0" autofocus></input>
									</div>

									<div>
										<label for="txtamount">Amount</label> <input id="txtamount"
											placeholder="Amount" type="number" min="0" disabled></input>
									</div>

									<div>
										<label for="txtaccount">Account</label><input id="txtaccount"
											placeholder="Account" type="number" min="0" disabled></input>
									</div>

									<div>
										<label for="txttransactionType">Transaction Type</label><input
											id="txttransactionType" placeholder="Transaction Type"
											type="number" min="0" disabled></input>
									</div>

									<div>
										<label for="dtppostDate">Post Date</label> <input
											id="dtppostDate" placeholder="Post Date" type="date" disabled></input>
									</div>

									<div>
										<label for="txtvalueDate">Value Date</label><input
											id="txtvalueDate" placeholder="Value Date" type="date"
											disabled></input>
									</div>

									<div>
										<label for="dtprecordDate">Record Date</label> <input
											id="dtprecordDate" placeholder="Record Date" type="date"
											disabled></input>
									</div>

								</div>
							</article>

							<article class="col2">
								<div class="pad">

									<div>
										<label for="txtcontraReference">Contra Reference</label> <input
											id="txtcontraReference" placeholder="Contra Reference"
											type="text" disabled></input>
									</div>

									<div>
										<label for="txtnarrative">Narrative</label> <input
											id="txtnarrative" placeholder="Narrative" type="text"
											disabled></input>
									</div>

									<div>
										<label for="txtauthorizer">Authorizer</label> <input
											id="txtauthorizer" placeholder="Authorizer" type="text"
											disabled></input>
									</div>

									<div>
										<label for="txtuserID">user ID</label><input id="txtuserID"
											placeholder="User ID" type="text" disabled></input>
									</div>

									<div>
										<label for="txtreference">Reference</label><input
											id="txtreference" placeholder="Reference" type="text"
											disabled></input>
									</div>

									<div>
										<label for="txtforcePostFlag">Force Post Flag</label> <input
											id="txtforcePostFlag" placeholder="Force Post Flag"
											type="checkbox" disabled></input>
									</div>

									<div>
										<label for="txtstatementFlag">Statement Flag</label> <input
											id="txtstatementFlag" placeholder="Statement Flag"
											type="checkbox" disabled></input>
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
	function init() {
		fanikiwa.transactionendpoint.transactiondetails.init(GETROOT());
	}
</script>

	<script src="https://apis.google.com/js/client.js?onload=init"></script>



</body>


</html>
