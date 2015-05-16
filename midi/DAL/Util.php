<?php

		require_once (dirname(__FILE__)."/../mailer/class.phpmailer.php");
		include ("db_connect.php");
		
		$date = date('Y-m-d');
		
		//echo $date;
		
		$SQLQuery = "SELECT id FROM t_participants WHERE date_created = '$date' and winner = 0 ";
		//echo $SQLQuery;
		$result = mysql_query($SQLQuery) or die (mysql_error());
		$ids_array = array();
		$i = 0;
		while($row = mysql_fetch_array($result)){
			$ids_array[] = $row['id'];
			$i++;
		}
		
		$rand_num = rand(0,$i-1);
		echo $i." ".$rand_num;
		if(0 != $i){
			echo "here ".$ids_array[$rand_num]; 
		}
		else{
			echo "No record";
		}
		
		$sql = "SELECT msisdn FROM t_participants WHERE id = '$ids_array[$rand_num]'";
		$query = mysql_query($sql) or die (mysql_error());  
		$select = mysql_fetch_array($query, MYSQL_ASSOC);  
		$number = $select['msisdn']; 
		echo $number;
		
		$msisdn=$number;
		$daily_winner=1;
		$weekly_winner=0;
		$monthly_winner=0;
		// Insert data
		$sql_insert = "INSERT INTO t_winners(msisdn, daily_winner, weekly_winner, monthly_winner) VALUES ('$msisdn','$daily_winner','$weekly_winner','$monthly_winner')";
		$query_insert = mysql_query($sql_insert,$conn) or die (mysql_error());		
		
		    echo "Insert successful";
		    
		$sql_update = "UPDATE t_participants SET winner = 1 WHERE id = '$ids_array[$rand_num]'";
		$update = mysql_query( $sql_update, $conn );
		if(! $update )
		{
		  die('Could not update data: ' . mysql_error());
		}
		echo "Updated data successfully\n";
		
		mysql_close($conn);
		
		$mail = new PHPMailer();
		try{
		$mail->IsSMTP();                                      // set mailer to use SMTP
		$mail->Host = "bizsms.co.ke";  // specify main and backup server
		$mail->SMTPAuth = true;     // turn on SMTP authentication
		$mail->Username = "report@bizsms.co.ke"; //SMTP username
		$mail->Password = "report123ke"; // SMTP password
		$mail->From = "report@bizsms.co.ke";
		$mail->FromName = "WINNER";
		$queryEmail = "SELECT name,email FROM t_email_recipients WHERE deleted = 0";
		$resultEmail = mysql_query($queryEmail,$conn);
		while($rowEmail = mysql_fetch_array($resultEmail)){
			$recipient_name = $rowEmail['name'];
			$emailAdd = $rowEmail['email'];
			$mail->AddAddress($emailAdd,$recipient_name);
		}
		//$mail->AddBCC("sylvestermwambeke@gmail.com","Sylvester Mwambeke");
		$mail->AddReplyTo("info@bizsms.co.ke","Info");
		$mail->WordWrap = 50;                                 // set word wrap to 50 characters
		//$mail->AddAttachment(dirname(__FILE__)."/".$filename);         // add attachments
		//$mail->AddAttachment("C:\xampp\htdocs\bulk_report\Reports"."/".$filename);    // optional name
		$mail->IsHTML(true);                                  // set email format to HTML
		$mail->Subject = 'WINNER   '.$date;
		$mail->Body    = 'The winner is the owner of mobile number '.$number;
		$mail->AltBody = 'The winner is the owner of mobile number '.$number;
		if(!$mail->Send())
		{
		   echo "<br />Message could not be sent. <br />";
		   echo "<br />Mailer Error: " . $mail->ErrorInfo." <br />";
		}
		else{
			echo "<br />Email for has been sent!<br />";
		}
		}
		catch (phpmailerException $e) {
		  echo $e->errorMessage(); //Pretty error messages from PHPMailer
		} catch (Exception $e) {
		  echo $e->getMessage(); //Boring error messages from anything else!
		}
		
?>