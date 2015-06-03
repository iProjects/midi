﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Create CoA Detail | Fanikiwa - Administrator</title>
<link href="/Images/Dollar.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" href="/Content/Site.css" type="text/css" />
<script src="/Scripts/jquery-2.0.3.js" type="text/javascript"></script>
<script src="/Scripts/MainMenu.js"></script>
<script src="/Scripts/fanikiwa.js"></script>
<script src="/Scripts/CustomScripts.js" type="text/javascript"></script>
<script src="/Scripts/CreateCoaDet.js"></script>


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
				<h2 class="page-title">Create Chart Of Account Detail</h2>
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
						<legend>Create Chart Of Account Detail</legend>

						<div id="column-div" class="clearboth">

							<article class="col1">
								<div class="pad">

									<div>
										<label for="txtshortCode">Short Code</label> <input
											id="txtshortCode" placeholder="Short Code" type="text"
											autocomplete autofocus></input>
									</div>

									<div>
										<label for="txtdescription">Description</label> <input
											id="txtdescription" placeholder="Description" type="text"
											autocomplete></input>
									</div>

									<div>
										<label for="txtcoaLevel">Coa Level</label> <input
											id="txtcoaLevel" placeholder="Coa Level" type="number"
											min="0"></input>
									</div>

									<div>
										<label for="txtrorder">ROrder</label> <input id="txtrorder"
											placeholder="ROrder" type="number" min="0"></input>
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
		fanikiwa.coadetendpoint.createcoadet.init(GETROOT());
	}
</script>

	<script src="https://apis.google.com/js/client.js?onload=init"></script>



</body>


</html>
