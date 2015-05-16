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
<script src="../Scripts/fanikiwa.js"></script> 


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
				<h2 class="page-title">Register</h2>
			</hgroup>

                        <form action="../DAL/Register.php" method="post">

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

		<div class="content-wrapper">
			<div class="float-left"></div>
		</div>


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




	<script type="text/javascript">
		  
	</script>


	

</body>


</html>
