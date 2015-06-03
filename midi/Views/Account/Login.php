<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Login - Maasai Integrated Development Initiatives</title>
<link href="../Images/Dollar.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" href="../Content/Site.css" type="text/css" />
<script src="../Scripts/jquery-2.0.3.js" type="text/javascript"></script>
<script src="../Scripts/Utils.js"></script>
<script src="../Scripts/Login.js"></script>

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



	<div id="body">


		<section class="content-wrapper main-content clear-fix">

			<div id="error-display-div" class="displaynone"></div>


			<hgroup class="title">
				<h2 class="page-title">Login</h2>
			</hgroup>

                        <form action="../DAL/Login.php" method="post">

				<fieldset>
					<legend>Login</legend>

					<article class="col1">
						<div class="pad">

							<div>
								<label for="txtEmail">Email</label> <input id="txtEmail"
									placeholder="Email" autofocus autocomplete type="text"></input>
							</div>

							<div>
								<label for="txtPassword">Password</label> <input
									id="txtPassword" placeholder="Password" type="password"></input>
							</div>


						</div>
					</article>


					<div style="float: left; clear: both">
                                            <input  id="btnLogin" type="submit" value="Login" /> Not Registered Click <a id="btnRegisterForm"
							href="../Views/Register.php" style="cursor: pointer;">Here
						</a> To Register
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

		<div class="content-wrapper clearboth">
			<div class="float-left">
				<p style="font-size: 15px">Copyright &copy; Software Providers
					Limited. All Rights Reserved.</p>
			</div>
		</div>


		<div class="content-wrapper clearboth">
			<div></div>
		</div>


	</footer>

	<script>
		 
	</script>
	  


</body>


</html>
