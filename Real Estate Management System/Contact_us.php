<?php
	$name="";
	$err_name="";
	$email="";
	$err_email="";
	$feedback="";
	$err_feedback="";
	$rate="";
	$err_rate="";
	
	$hasError=false;
	
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(empty($_POST["name"])){
            $hasError = true;
            $err_name = "*Name Required";
        }
        else if(strlen($_POST["name"]) <= 12){
            $hasError = true;
            $err_name = "*Name must be less than 12 characters";
        }
        else{
            $name = $_POST["name"];
        }
		if(empty($_POST["email"])){
               $err_email="*Please enter email";
            }
        else{
            $s=strpos($_POST["email"],"@");
            if($s!=false){
                $t=strpos($_POST["email"],".", $s+1);
                if($t!=false){
                    $email=$_POST["email"];
                }
                else{
                    $err_email="*Invalid email";
                }
            }
            else{
                $err_email="*Invalid email";
            }
        }
		if(empty($_POST["feedback"])){
            $hasError = true;
            $err_feedback = "*Optional";
        }
        else{
            $feedback = $_POST["feedback"];
        }
		if(empty($_POST["rate"]))
		{
			$hasError=true; 
			$err_rate="*Rate required";
		}
		else
		{
			$rate=$_POST["rate"];  
		}
		
		
		if(!$hasError){
			echo $_POST["name"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["feedback"]."<br>";
			echo $_POST["rate"]."<br>";
		}
	}
?>










<html>
<head>
	<title>Complete the form below to let us know how we can improve <br>our site.</title>
</head>
	<body>
		<fieldset>
		<legend><h2><i>Complete the form below to let us know how we can improve <br>our site.</i></h2></legend>
		<form action="" method="POST">
			<table>
				<tr>
					<td align="center"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Full Name: *</td>
					<td><br><input name="name"type="text">
					<span><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td align="center"><br>Email Address: *</td>
					<td><br><input name="email"type="text">
					<span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td align="center"><br></td>
					<td><br><textarea placeholder="Your Feedback" name="feedback"></textarea>
					<span><?php echo $err_feedback;?></span></td>
				</tr>
				<tr>
					<td align="center"><br><br></td>
					<td>
						<select name="rate">
							<option selected disabled>Please rate our site</option>
							<option>Best</option>
							<option>Good</option>
							<option>Satisfactory</option>
							<option>Terrible</option>
						</select>	
					<span><?php echo $err_rate;?></span></td>
				</tr>
					<td align="center"></td>
					<td><input type="submit" value="Send Feedback ->"></td>
				</tr>
			</table>
		</fieldset>	
	</body>
</html>