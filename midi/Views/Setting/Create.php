<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Create Setting | Maasai Integrated Development Initiatives</title>
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
				<h2 class="page-title">Create Setting</h2>
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
						<legend>Create Setting</legend>

						<article class="col1">
							<div class="pad">

								<div>
									<label for="txtproperty">Property</label> <input autocomplete
										id="txtproperty" placeholder="Property" type="text" autofocus></input>
								</div>

								<div>
									<label for="txtvalue">Value</label> <input autocomplete
										id="txtvalue" placeholder="Value" type="text"></input>
								</div>

								<div>
									<label for="txtgroupName">Group Name</label> <input
										autocomplete id="txtgroupName" placeholder="Group Name"
										type="text"></input>
								</div>

							</div>
						</article>

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

        </script>



    </body>


</html>
