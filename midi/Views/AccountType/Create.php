﻿<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Create Account | Fanikiwa - Administrator</title>
<link href="/Images/Dollar.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" href="/Content/Site.css" type="text/css" />
<script src="/Scripts/jquery-2.0.3.js" type="text/javascript"></script>
<script src="/Scripts/MainMenu.js"></script>
<script src="/Scripts/fanikiwa.js"></script>
<script src="/Scripts/CustomScripts.js" type="text/javascript"></script>
<script src="/Scripts/CreateAccount.js"></script>


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
				<h2 class="page-title">Create Account</h2>
			</hgroup>

			<div style="float: left; clear: both">
				<input id="btnCreate" type="submit" value="Loading please wait..."
					style="cursor: wait; background-color: grey; color: red;" disabled />
				<input type="button" value="Back"
					onclick="window.history.go(-1); return false;" />
			</div>

			<div id="apiResults" style="float: left; clear: both"></div>
			<div id="successmessage" style="float: left; clear: both"></div>
			<div id="errormessage" style="float: left; clear: both"></div>

			<div style="float: left; clear: both">

				<form action="javascript:void(0);">

					<fieldset>
						<legend>Create Account</legend>

						<div id="column-div" class="clearboth">

							<article class="col1">
								<div class="pad">

									<div>
										<label for="txtaccountName">Account Name</label> <input
											id="txtaccountName" placeholder="Account Name" type="text"
											autocomplete autofocus></input>
									</div>

									<div>
										<label for="txtaccountNo">Account No</label> <input
											id="txtaccountNo" placeholder="Account No" type="text"
											autocomplete></input>
									</div>

									<div>
										<label for="txtinterestRate">Interest Rate</label> <input
											id="txtinterestRate" placeholder="Interest Rate"
											type="number" min="0"></input>
									</div>

									<div>
										<label for="txtcustomer">Customer</label> <input
											id="txtcustomer" placeholder="Customer" type="number" min="0"></input>
									</div>

									<div>
										<label for="cbocoadet">Chart Of Account</label> <select
											id="cbocoadet" style="width: 95%;">
											<option value="" selected="selected">(Select Chart
												Of Account)</option>
										</select>
									</div>

									<div>
										<label for="cboaccounttype">Account Type</label> <select
											id="cboaccounttype" style="width: 95%;">
											<option value="" selected="selected">(Select Account
												Type)</option>
										</select>
									</div>

									<div>
										<label for="cbopassFlag">Pass Flag</label><select
											id="cbopassFlag" style="width: 95%;">
											<option value="" selected="selected">(Select Pass
												Flag)</option>
										</select>
									</div>

									<div>
										<label for="cbolimitFlag">Limit Flag</label><select
											id="cbolimitFlag" style="width: 95%;">
											<option value="" selected="selected">(Select Limit
												Flag)</option>
										</select>
									</div>

								</div>
							</article>

							<article class="col2">
								<div class="pad">

									<div>
										<label for="txtintPayAccount">Pay Account</label><input
											id="txtintPayAccount" placeholder="Pay Account" type="number"
											min="0"></input>
									</div>

									<div>
										<label for="cbointerestComputationMethod">Interest
											Computation Method</label><select id="cbointerestComputationMethod"
											style="width: 95%;">
											<option value="" selected="selected">(Select
												Interest Computation Method)</option>
										</select>
									</div>

									<div>
										<label for="cbointerestComputationTerm">Interest
											Computation Term</label><select id="cbointerestComputationTerm"
											style="width: 95%;">
											<option value="" selected="selected">(Select
												Interest Computation Term)</option>
										</select>
									</div>

									<div>
										<label for="cbointerestAccrualInterval">Interest
											Accrual Interval</label><select id="cbointerestAccrualInterval"
											style="width: 95%;">
											<option value="" selected="selected">(Select
												Interest Accrual Interval)</option>
										</select>
									</div>

									<div>
										<label for="cbointerestApplicationMethod">Interest
											Application Method</label><select id="cbointerestApplicationMethod"
											style="width: 95%;">
											<option value="" selected="selected">(Select
												Interest Application Method)</option>
										</select>
									</div>

									<div>
										<label for="txtaccruedInt">Accrued Interest</label> <input
											id="txtaccruedInt" placeholder="Accrued Interest"
											type="number" min="0"></input>
									</div>

									<div>
										<label for="txtinterestRateSusp">Interest Rate In
											Suspense</label> <input id="txtinterestRateSusp"
											placeholder="Interest Rate In Suspense" type="number" min="0"></input>
									</div>

									<div>
										<label for="txtaccruedIntInSusp">Accrued Interest In
											Suspense</label> <input id="txtaccruedIntInSusp"
											placeholder="Accrued Interest In Suspense" type="number"
											min="0"></input>
									</div>

									<div>
										<label for="txtlimitCheckFlag">Limit Check Flag</label> <input
											id="txtlimitCheckFlag" placeholder="Limit Check Flag"
											type="number" min="0" max="1"></input>
									</div>

								</div>
							</article>

							<article class="col3">
								<div class="pad">

									<div>
										<label for="dtpmaturityDate">Maturity Date</label> <input
											id="dtpmaturityDate" placeholder="Maturity Date" type="date"></input>
									</div>

									<div>
										<label for="dtplastIntAccrualDate">Last Interest
											Accrual Date</label> <input id="dtplastIntAccrualDate"
											placeholder="Last Interest Accrual Date" type="date"></input>
									</div>

									<div>
										<label for="dtpnextIntAccrualDate">Next Interest
											Accrual Date</label> <input id="dtpnextIntAccrualDate"
											placeholder="Next Interest Accrual Date" type="date"></input>
									</div>

									<div>
										<label for="dtplastIntAppDate">Last Interest
											Application Date</label> <input id="dtplastIntAppDate"
											placeholder="Last Interest Application Date" type="date"></input>
									</div>

									<div>
										<label for="dtpnextIntAppDate">Next Interest
											Application Date</label> <input id="dtpnextIntAppDate"
											placeholder="Next Interest Application Date" type="date"></input>
									</div>

									<div>
										<label for="txtbranch">Branch</label> <input autocomplete
											id="txtbranch" placeholder="Branch" type="text"></input>
									</div>

									<div>
										<label for="chkaccrueInSusp">Accrual In Suspense</label> <input
											id="chkaccrueInSusp" placeholder="Limit Check Flag"
											type="checkbox"></input>
									</div>

									<div>
										<label for="chkclosed">Closed</label> <input id="chkclosed"
											placeholder="Closed" type="checkbox"></input>
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
		fanikiwa.accountendpoint.createaccount.init(GETROOT());
	}
</script>

	<script src="https://apis.google.com/js/client.js?onload=init"></script>



</body>


</html>
