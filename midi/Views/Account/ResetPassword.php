﻿<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Account Recovery | Fanikiwa - Peer-to-Peer Lending</title>
<link href="/Images/Dollar.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" href="/Content/Site.css" type="text/css" />
<script src="/Scripts/jquery-2.0.3.js" type="text/javascript"></script>
<script src="/Scripts/fanikiwa.js"></script>
<script src="/Scripts/ResetPassword.js"></script>
<script src="/Scripts/loginutil.js"></script>

</head>


<body>

	<header>

		<div id="div-site-title">

			<div class="site-title">
				<span title="Fanikiwa"> Fanikiwa </span>
			</div>

			<div class="site-title">
				<span title="Peer - To - Peer Lending">Peer - To - Peer
					Lending</span>
			</div>

		</div>

		<div id="MainMenu"></div>
		<div id="SubMenu"></div>


		<div id="div-login">
			<section id="login">
				<text> Welcome To Fanikiwa </text>
			</section>
		</div>

	</header>




	<div id="body">


		<section class="content-wrapper main-content clear-fix">

			<div id="error-display-div" class="displaynone"></div>

			<hgroup class="title">
				<h2 class="page-title">Forgot your password?</h2>
			</hgroup>

			<div style="float: left; clear: both;">
				<span style="font-size: 20px;">Select a recovery method below</span>
			</div>

			<div id="resetpasswordheader" style="float: left; clear: both">

				<article class="col1">
					<div class="pad">

						<div style="float: left; clear: both;">
							<div>
								<label for="rdoemail">Enter your recovery email address*</label>
								<input id="rdoemail" name="idType" type="radio"></input>
							</div>
						</div>

						<div id="div-emailaddress" class="displaynone"
							style="float: left; clear: both">

							<form action="javascript:void(0);">

								<fieldset>
									<legend>Reset Password</legend>

									<article class="col1" style="width: 100%;">
										<div class="pad">

											<div style="float: left; clear: both;">
												<span style="font-size: 15px;">To reset your
													password, enter the email address you use to sign in to
													Fanikiwa.<br /> This can be your Gmail address, your
													Google Apps email address, or another email address
													associated with your account.
												</span>
											</div>

											<div style="float: left; clear: both; padding-top: 15px;">
												<label for="txtEmail">Email(user@domain.com)</label> <input
													id="txtEmail" autocomplete
													placeholder="Email(user@domain.com)" autofocus type="text"></input>
											</div>

										</div>
									</article>

									<div style="float: left; clear: both">
										<input id="btnresetwithemail" type="submit"
											value="Loading please wait..."
											style="cursor: wait; background-color: grey; color: red;"
											disabled />
									</div>

								</fieldset>


							</form>

						</div>

					</div>
				</article>

				<article class="col2">
					<div class="pad">

						<div style="float: left; clear: both;">
							<div>
								<label for="rdophonenumber">Enter your recovery phone
									number*</label> <input id="rdophonenumber" name="idType" type="radio"></input>
							</div>
						</div>

						<div id="div-phonenumber" class="displaynone"
							style="float: left; clear: both">

							<form action="javascript:void(0);">

								<fieldset>
									<legend>Reset Password</legend>

									<article class="col1" style="width: 100%;">
										<div class="pad">

											<div style="float: left; clear: both;">
												<span style="font-size: 15px;">We'll send you a
													verification code to confirm access to this phone number.<br />
													Standard text messaging rates apply.
												</span>
											</div>

											<div style="float: left; clear: both;">
												<label for="txtphonenumber">Phone Number*</label> <input
													id="txtphonenumber" placeholder="Phone Number" type="text"></input>
											</div>

											<div style="float: left; clear: both;">
												<label for="txtsurname">Enter the name on the
													account(Surname)*</label> <input id="txtsurname"
													placeholder="Surname" type="text"></input>
											</div>

										</div>
									</article>

									<div style="float: left; clear: both">
										<input id="btnresetwithtelephone" type="submit"
											value="Loading please wait..."
											style="cursor: wait; background-color: grey; color: red;"
											disabled />
									</div>

								</fieldset>

							</form>

						</div>


					</div>
				</article>

			</div>

			<div id="apiResults" style="float: left; clear: both"></div>
			<div id="successmessage" style="float: left; clear: both"></div>
			<div id="errormessage" style="float: left; clear: both"></div>

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
			fanikiwa.userprofile.ResetPassword.init(GETROOT());
		}
	</script>

	<script src="https://apis.google.com/js/client.js?onload=init"></script>






</body>


</html>
