<?php
    $name="";
    $err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	$conpassword="";
    $err_con_password="";
	$email="";
    $err_email="";
	$address="";
    $err_address="";
	$number="";
	$err_number="";
	$nid="";
	$err_nid="";
	$gender="";
	$err_gender="";
	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	$profession="";
	$err_profession="";
 
   
    $hasError = false;
    
     
if($_SERVER["REQUEST_METHOD"]=="POST")
    
    {
        if(empty($_POST["name"])){
            $hasError = true;
            $err_name = "*Name Required";
        }
        else if(strlen($_POST["name"]) < 12){
            $hasError = true;
            $err_name = "*Name must be less than 12 characters";
        }
        else{
            $name = $_POST["name"];
        }
		 if(empty($_POST["username"])){
            $hasError = true;
            $err_username = "*Userame Required";
        }
        else if(strlen($_POST["username"]) < 12){
            $hasError = true;
            $err_username = "*Name must be less than 12 characters";
        }
        else{
            $username = $_POST["username"];
        }
		if(empty($_POST["password"])){
			$hasError = true;
			$err_password = "*Password Required";
		}
		else if(strlen($_POST["password"]) <= 4){
			$hasError = true;
			$err_password = "*Password must be at least 4 characters";
		}
		else{
			$password = $_POST["password"];
		}
		if(empty($_POST["confirm_password"])){
			$hasError = true;
			$err_con_password = "*Password Required";
		}
		else if(strlen($_POST["confirm_password"]) <= 4){
			$hasError = true;
			$err_con_password = "*Password must be at least 4 characters";
		}
		else{
			$conpassword = $_POST["confirm_password"];
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
		if(empty($_POST["number"]))
		{
			$hasError=true; 
			$err_number="*Phone number required";
		}
		else if(is_numeric($_POST["number"])==false){
            $err_number="*Please enter numeric number";
        }
		else if(strlen($_POST["number"]) < 12){
			$hasError = true;
			$err_number = "*Phone number must be 11 digits";
		}
		else
		{
			$number=$_POST["number"];  
		}
		
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender = "*Gender Required";
		}
		else{
			$gender = $_POST["gender"];
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
		if(empty($_POST["profession"]))
		{
			$hasError=true; 
			$err_profession="*Profession required";
		}
		else
		{
			$profession=$_POST["profession"];  
		}
     
    
    if(!$hasError)
    {
        echo $_POST["name"]."<br>";
        echo $_POST["username"]."<br>";
        echo $_POST["password"]."<br>";
        echo $_POST["confirm_password"]."<br>";
        echo $_POST["email"]."<br>";
		echo $_POST["address"]."<br>";
		echo $_POST["number"]."<br>";
		echo $_POST["nid"]."<br>";
		echo $_POST["gender"]."<br>";
		echo $_POST["day"]."<br>";
		echo $_POST["month"]."<br>";
		echo $_POST["year"]."<br>";
		echo $_POST["profession"]."<br>";
    }
    
}
?>
























<html>
	<head>
		<title>Signup for Buyer/Tenant</title>
	</head>
		<body>
			<fieldset>
				<legend><h2>Signup for Buyer/Tenant</h2></legend>
					<form action="" method="post">
						<table>
							<tr>
								<td align="right">Name:</td>
								<td><input type="text" name="name">
								<span><?php echo $err_name;?></span></td>
							</tr>
							<tr>
								<td align="right">Username:</td>
								<td><input name="username" type="text">
								<span><?php echo $err_username;?></span></td>
							</tr>
							<tr>
								<td align="right">Password:</td>
								<td><input name="password" type="password">
								<span><?php echo $err_password;?></span></td>
							</tr>
							<tr>
								<td align="right">Confirm Password:</td>
								<td><input name="confirm_password" type="password">
								<span><?php echo $err_con_password;?></span></td>
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
								<td align="right">Contact Number:</td>
								<td><input name="number" type="text">
								<span><?php echo $err_number;?></span></td>
							</tr>
							<tr>
								<td align="right">NID:</td>
								<td><input name="nid" type="text">
								<span><?php echo $err_nid;?></span></td>
							</tr>
							<tr>
								<td align="right">Gender:</td>
								<td><input type="radio" value="Male" name="gender"> Male <input type="radio" value="Female" name="gender"> Female
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $err_gender;?></span></td>
							</tr>
							<tr>
								<td align="right">Date of Birth:</td>
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
							<tr>
								<td align="right"><br><br></td>
								<td>
								<select name="profession">
								<option selected disabled>Profession:</option>
								<option>Government Service</option>
								<option>Private Service</option>
								<option>Retired</option>
								<option>Teacher</option>
								</select>	
								<span><?php echo $err_profession;?></span></td>
							</tr>
							<tr>
							<td align="right"></td>
							<td><input type="submit" value="submit"></td>
							</tr>
					</table>
				</form>
			</fieldset>
		</body>
	</html>