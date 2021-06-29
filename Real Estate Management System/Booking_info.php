<?php
    $name="";
    $err_name="";
    $phone="";
    $err_phone="";
    $email="";
    $err_email="";
    $address="";
    $err_address="";
    $nid="";
    $err_nid="";
	$other="";
	$err_other="";
	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
 
 
    
    $hasError = false;
    
     
if($_SERVER["REQUEST_METHOD"]=="POST")
    
    {
        if(empty($_POST["name"])){
            $hasError = true;
            $err_name = "*Name Required";
        }
        else if(strlen($_POST["name"]) <= 2){
            $hasError = true;
            $err_name = "*Name must be greater than 2 characters";
        }
        else{
            $name = $_POST["name"];
        }
		if(empty($_POST["phone"]))
		{
			$hasError=true; 
			$err_phone="*Phone number required";
		}
		else if(is_numeric($_POST["phone"])==false){
            $err_phone="*Please enter numeric number";
        }
		else if(strlen($_POST["phone"]) < 12){
			$hasError = true;
			$err_phone = "*Phone number must be 11 digits";
		}
		else
		{
			$phone=$_POST["phone"];  
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
       
        if(empty($_POST["address"])){
            $hasError = true;
            $err_address = "*Address required";
        }
        else{
            $address = $_POST["address"];
        }
    
        if(empty($_POST["nid"])){
            $hasError = true;
            $err_nid = "*NID number required";
        }
		else if(is_numeric($_POST["nid"])==false){
            $err_phone="*Please enter numeric number";
        }
        else if(strlen($_POST["nid"]) < 11){
            $hasError = true;
            $err_nid = "*NID number must be 10 digits";
        }
        else{
            $nid = $_POST["nid"];
        }
		if(empty($_POST["other"])){
			$hasError = true;
			$err_other = "*Optional";
		}
		else{
			$other = $_POST["other"];
		}
		if(empty($_POST["day"]))
		{
			$hasError=true; 
			$err_day="*day required";
		}
		else
		{
	        $day=$_POST["day"];  
		}
		if(empty($_POST["month"]))
		{
			$hasError=true; 
			$err_month="*month required";
		}
		else
		{
			$month=$_POST["month"];  
		}
		if(empty($_POST["year"]))
		{
			$hasError=true; 
			$err_year="*year required";
		}
		else
		{
			$year=$_POST["year"];  
		}
     
    
    if(!$hasError)
    {
        echo $_POST["name"]."<br>";
        echo $_POST["phone"]."<br>";
        echo $_POST["email"]."<br>";
        echo $_POST["address"]."<br>";
        echo $_POST["nid"]."<br>";
		echo $_POST["other"]."<br>";
		echo $_POST["day"]."<br>";
		echo $_POST["month"]."<br>";
		echo $_POST["year"]."<br>";
    }
    
}
?>


<html>
<head>
	<title>Booking Information</title>
</head>
    <body>
	<fieldset>
	<legend><h2>Booking Information</h2></legend>
        <form action="" method="POST">
            <table>
                <tr>
                    <td align="right">Name:</td>
                    <td><input name="name" type="text">
                    <span><?php echo $err_name;?></span></td>
                </tr>
                <tr>
                    <td align="right">Phone:</td>
                    <td><input name="phone" type="text">
                    <span><?php echo $err_phone;?></span></td>
                </tr>
                <tr>
                    <td align="right">Email:</td>
                    <td><input name="email" type="text">
                    <span><?php echo $err_email;?></span></td>
                </tr>
                <tr>
                    <td align="right">Address:</td>
                    <td><input name="address" type="text">
                    <span><?php echo $err_address;?></span></td>
                </tr>
                <tr>
                    <td align="right">NID:</td>
                    <td><input name="nid" type="text">
                    <span><?php echo $err_nid;?></span></td>
                </tr>
					<td align="right">Other <br>Info:</td>
					<td><textarea name="other"></textarea>
					<span><?php echo $err_other;?></span></td>
				<tr>
					<td align="right">
				</tr>
				 <tr>
                <td align="right">Booking Date:</td>
					<td><select name="day">
					<option>Day</option>
						<?php
							for($i=1;$i<=31;$i++){
								echo "<option>$i</option>";	
							}
						?>
						</select><span><?php echo $err_day;?></span>
						<select name="month">
						<option>Month</option>
							<?php
								$month = array("January","February","March","April","May","June","July","August","September","October","November","December");
								foreach($month as $v){
									echo "<option>$v</option>";
								}
							?>
							</select>
							<span><?php echo $err_month;?></span>
                            <select name="year">
								<option>Year</option>
								<?php
									for($i=1990;$i<=2021;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select>
							 <span><?php echo $err_year;?></span>
							</td>
							</tr>
                    <td align="right"></td>
                    <td><input type="Submit" value="Submit"></td>
                </tr>
            </table>
        </form>
		</fieldset>
    </body>
</html>