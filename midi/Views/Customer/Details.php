﻿<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Customer Details | Fanikiwa - Administrator</title>
<link href="/Images/Dollar.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" href="/Content/Site.css" type="text/css" />
<script src="/Scripts/jquery-2.0.3.js" type="text/javascript"></script>
<script src="/Scripts/MainMenu.js"></script>
<script src="/Scripts/fanikiwa.js"></script>
<script src="/Scripts/CustomScripts.js" type="text/javascript"></script>
<script src="/Scripts/DetailCustomer.js"></script>


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
				<h2 class="page-title">Customer Details</h2>
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
						<legend>Customer Details</legend>

						<div id="column-div" class="clearboth">

							<article class="col1">
								<div class="pad">

									<div>
										<label for="txtcustomerId">ID</label> <input
											id="txtcustomerId" placeholder="ID" type="number" min="0"
											disabled autofocus></input>
									</div>

									<div>
										<label for="txtname">Name</label> <input id="txtname"
											placeholder="Name" type="text" disabled></input>
									</div>

									<div>
										<label for="txtemail">Email</label> <input id="txtemail"
											placeholder="Email" type="text" disabled></input>
									</div>

									<div>
										<label for="txttelephone">Telephone</label> <input
											id="txttelephone" placeholder="Telephone" type="text"
											disabled></input>
									</div>

									<div>
										<label for="txtaddress">Address</label> <input id="txtaddress"
											placeholder="Address" type="text" disabled></input>
									</div>

									<div>
										<label for="txtcustomerNo">Customer No</label> <input
											id="txtcustomerNo" placeholder="Customer No" type="text"
											disabled></input>
									</div>

									<div>
										<label for="cboorganization">Organization</label><select
											id="cboorganization" style="width: 95%;" disabled>
											<option value="" selected="selected">(Select
												Organization)</option>
										</select>
									</div>

									<div>
										<label for="txtmemberId">Member Id</label> <input
											id="txtmemberId" placeholder="Member Id" type="text" disabled></input>
									</div>

								</div>
							</article>

							<article class="col2">
								<div class="pad">

									<div>
										<label for="txtbillToName">Bill To Name</label> <input
											id="txtbillToName" placeholder="Bill To Name" type="text"
											disabled></input>
									</div>

									<div>
										<label for="txtbillToEmail">Bill To Email</label> <input
											id="txtbillToEmail" placeholder="Bill To Email" type="text"
											disabled></input>
									</div>

									<div>
										<label for="txtbillToTelephone">Bill To Telephone</label> <input
											id="txtbillToTelephone" placeholder="Bill To Telephone"
											type="text" disabled></input>
									</div>

									<div>
										<label for="txtbillToAddress">Bill To Address</label> <input
											id="txtbillToAddress" placeholder="Bill To Address"
											type="text" disabled></input>
									</div>

									<div>
										<label for="txtbranch">Branch</label> <input id="txtbranch"
											placeholder="Branch" type="text" disabled></input>
									</div>

									<div>
										<label for="dtpcreatedDate">Created Date</label> <input
											id="dtpcreatedDate" placeholder="Created Date" type="date"
											disabled></input>
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
		fanikiwa.customerendpoint.customerdetail.init(GETROOT());
	}
</script>

	<script src="https://apis.google.com/js/client.js?onload=init"></script>



</body>


</html>
