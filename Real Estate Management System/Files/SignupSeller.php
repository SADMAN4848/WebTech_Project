<?php
$name = "";
$err_name = ""; 
$username = "";
$err_username = ""; 
$id = "";
$err_id = ""; 
$password = "";
$err_password = ""; 
$confirm_password = "";
$err_confirm_password = ""; 
$email = "";
$err_email = ""; 
$gender = "";
$err_gender = ""; 
$code = "";
$err_code = ""; 
$number = "";
$err_number = ""; 
$nid = "";
$err_nid = "";
$street = "";
$err_street = "";
$city = "";
$err_city = "";
$state = "";
$err_state = "";
$zip = "";
$err_zip = "";
$day = "";
$err_day = "";
$month = "";
$err_month = "";
$year = "";
$err_year = "";
$err_profession="";
$profs = array("Service","Business","Teaching");

$hasError = false;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["name"]))
	{
		$hasError = true;
		$err_name = "Name required";
	}
	else if(strlen($_POST["name"])<= 2)
	{
		$hasError = true;
		$err_name = "Name must be greater than 2 characters";
	}
	else
	{
		$name = $_POST["name"];
	}
	
	if(empty($_POST["username"]))
	{
	  $hasError=true; 
	  $err_username="*user name required";
	}
	elseif(strlen($_POST["username"])<6)
	{
	  $hasError=true;  
	  $err_username="*User name Must be at least 6 characters";
	}
	else
	{
	 $username=$_POST["username"];  
	 
	}
		if(empty($_POST["id"]))
	{
	  $hasError=true; 
	  $err_id="ID required";
	}
    elseif(is_numeric($_POST["id"])==false){
                $err_id="*Please enter digit";
            }
	else
	{
	 $id=$_POST["id"];  
   }
	if(empty($_POST["password"]))
	{
		$hasError = true;
		$err_password = "Password required";
	}

	else if((strlen($_POST["password"])< 8))
	{
		$hasError = true;
		$err_password = "Password requires minimum 8 characters";
	}
	if((strlen($_POST["password"])>= 8))
	{
	
	$passwordvariable = $_POST["password"];
	$uppercase = preg_match('@[A-Z]@',$passwordvariable);
	$lowercase = preg_match('@[a-z]@',$passwordvariable);
	if(!$uppercase)
	{
	$hasError = true;
	$err_password = "Password requires uppercase letters";
	}
	else if(!$lowercase)
	{
	$hasError = true;
	$err_password = "Password requires lowercase letters";
	}
	if(strpos($_POST["password"],'#') == false && (strpos($_POST["password"],'?') == false))
	{
		$hasError = true;
		$err_password = "Password requires minimum 1 '#' and '?'";
	}
	
	
	else
	{
		$password = $_POST["password"];
	}
	}

	if(empty($_POST["confirm_password"]))
	{
		$hasError = true;
		$err_confirm_password = "Password required again";
	}

	else if((strlen($_POST["confirm_password"])< 8))
	{
		$hasError = true;
		$err_confirm_password = "Password requires minimum 8 characters";
	}
	if((strlen($_POST["confirm_password"])>= 8))
	{
	
	$passwordvariable = $_POST["confirm_password"];
	$uppercase = preg_match('@[A-Z]@',$passwordvariable);
	$lowercase = preg_match('@[a-z]@',$passwordvariable);
	if(!$uppercase)
	{
	$hasError = true;
	$err_confirm_password = "Password requires uppercase letters";
	}
	else if(!$lowercase)
	{
	$hasError = true;
	$err_confirm_password = "Password requires lowercase letters";
	}
	if(strpos($_POST["confirm_password"],'#') == false && (strpos($_POST["confirm_password"],'?') == false))
	{
		$hasError = true;
		$err_confirm_password = "Password requires minimum 1 '#' and '?'";
	}
	
	
	else
	{
		$confirm_password = $_POST["confirm_password"];
	}
	}
	
    if(empty($_POST["email"])){
    $err_email="*Please enter email";
    }

    else
	{
    $s=strpos($_POST["email"],"@");
    if($s!=false)
	{
    $t=strpos($_POST["email"],".", $s+1);
    if($t!=false)
	{
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

  if(!isset($_POST["gender"]))
   {
	 $hasError=true;   
	$err_gender="*gender name required"; 
   }
   else
   {
	 $gender=$_POST["gender"];   
   }
		if(empty($_POST["code"]))
   {
	  $hasError=true; 
	  $err_code="*code required";
   }
   
    elseif(is_numeric($_POST["code"])==false){
                $err_code="*Please enter digit";
            }
   else
   {
	 $code=$_POST["code"];  
   }
   
   
		if(empty($_POST["number"]))
   {
	  $hasError=true; 
	  $err_number="*number required";
   }
    elseif(is_numeric($_POST["number"])==false){
                $err_number="*Please enter digit";
            }
   else
   {
	 $number=$_POST["number"];  
   }
		if(empty($_POST["nid"]))
   {
	  $hasError=true; 
	  $err_nid="NID required";
   }
    elseif(is_numeric($_POST["nid"])==false){
                $err_nid="*Please enter digit";
            }
   else
   {
	 $nid=$_POST["nid"];  
   }
		if(empty($_POST["street"]))
   {
	  $hasError=true; 
	  $err_street="*street required";
   }
   else
   {
	 $bio=$_POST["street"];  
   }
   
		if(empty($_POST["city"]))
   {
	  $hasError=true; 
	  $err_city="*city required";
   }
   else
   {
	 $city=$_POST["city"];  
   }
   
   
		if(empty($_POST["state"]))
   {
	  $hasError=true; 
	  $err_state="*state required";
   }
   else
   {
	 $state=$_POST["state"];  
   }
   
   
		if(empty($_POST["zip"]))
   {
	  $hasError=true; 
	  $err_zip="*zip required";
   }
   else if(is_numeric($_POST["zip"])==false){
                $err_zip="*Zip number must be digit";
            }
   else
   {
	 $zip=$_POST["zip"];  
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


	echo $_POST["name"]."<br>";
	echo $_POST["username"]."<br>";
    echo $_POST["id"]."<br>";
	echo $_POST["password"]."<br>";
	echo $_POST["confirm_password"]."<br>";
	echo $_POST["email"]."<br>";
	echo $_POST["gender"]."<br>";
	echo $_POST["code"]."<br>";
	echo $_POST["number"]."<br>";
	echo $_POST["nid"]."<br>";
	echo $_POST["street"]."<br>";
	echo $_POST["city"]."<br>";
	echo $_POST["state"]."<br>";
	echo $_POST["zip"]."<br>";
	echo $_POST["day"]."<br>";
	echo $_POST["month"]."<br>";
	echo $_POST["year"]."<br>";
	echo $_POST["profession"]."<br>";
	
}

?>


<html>
	<body>
		<form action="" method="post">
		<h1>Seller Sign Up</h1>
			<table>
				<tr>
                    <td>Name</td>
                    <td>: <input type="text"  placeholder="Enter your name" name="name">
					<span style="color:red"><?php echo $err_name; ?></span>
					</td>
					
				</tr>
				<tr>
                    <td>Username</td>
                    <td>: <input type="text" placeholder="Enter your username" name="username">
					<span style="color:red"><?php echo $err_username; ?></span>
					</td>
                </tr>
					
				</tr>
				<tr>
                    <td>ID</td>				
				    <td>: <input type="text"  placeholder ="Enter your ID" name="id">
					<span style="color:red"><?php echo $err_id; ?></span>
                    </td>
				<tr>
	                <td>Password</td>
	                <td>:<input type="password" placeholder="Enter your password" name="password">
	                <span style="color:red"><?php echo $err_password; ?></span>
					</td>
				</tr>
					
				<tr>
	                <td>Confirm Password</td>
	                <td>:<input type="password" placeholder="Enter your password again" name="confirm_password">
	                <span style="color:red"><?php echo $err_confirm_password; ?></span>
					</td>
				</tr>
                <tr>
                <td>Email</td>
                    <td>: <input type="text" placeholder="Enter your email" name="email"> 
					<span style="color:red"><?php echo $err_email; ?></span>
                   </td>
                </tr>
                <tr>
						<td>Gender</td>
						<td>:<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female
                          <span style="color:red"><?php echo $err_gender; ?></span> 
						</td>
				</tr>
				<tr>
                        <td>Phone</td>
                        <td>: <input type="text"  placeholder ="code" size="3" name="code">	<span style="color:red"><?php echo $err_code; ?></span> - 
							 <input type="text"  placeholder ="Number" size="9" name="number" ><span style="color:red"><?php echo $err_number; ?></span>
                        </td>
                 </tr>
				<tr>
                    <td>NID</td>				
				    <td>: <input type="text"  placeholder ="Enter your NID" name="nid">
					<span style="color:red"><?php echo $err_nid; ?></span>
                    </td>
				<tr>
				<tr>
                <tr>
                    <td rowspan="3"><span>Address</span></td>
                    <td>: <input type="text" placeholder="Street Address"   name="street"> 
				 	<span style="color:red"><?php echo $err_street; ?></span>
                     </td>
                </tr>

                <tr>
                    <td>: <input type="text" placeholder="City"   name="city" size="3">
					 	<span style="color:red"><?php echo $err_city; ?></span>
                 
                    
                
                    - <input type="text" placeholder="State"   name="state" size = "10">
				 	<span style="color:red"><?php echo $err_state; ?></span>
                     </td>
                
                </tr>

                <tr>
                    <td>: <input type="text" placeholder="Postal/Zip code"   name="zip"> 
						<span style="color:red"><?php echo $err_zip; ?></span>	 
                   </td>
                </tr>
				 <tr>
                <td>Birth Date</td>
						<td>:
							<select name="day"    >
								<option>Day</option>
								
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select><span style="color:red"><?php echo $err_day; ?></span>
							<select name="month"  >
								<option>Month</option>
								
								<?php
								    $month = array("January","February","March","April","May","June","July","August","September","October","November","December");
									foreach($month as $v){
										echo "<option>$v</option>";
										
									}
								?>
							</select>
							<span style="color:red"><?php echo $err_month; ?></span>
                            <select name="year"  >
								<option>Year</option>
								
								<?php
									for($i=1990;$i<=2021;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select>
							 <span style="color:red"><?php echo $err_year; ?></span>
							</td>
							</tr>
				
				
				<tr>
					<td>Profession</td>
					<td>:<select name="profession">
							<option selected disabled>--Select--</option>
							<?php
								foreach($profs as $p){
									if($p == $profession)
										echo "<option selected>$p</option>";
									else
										echo "<option>$p</option>";
								}
							?>
						</select> <br><span><?php echo $err_profession;?></span>
					</td>
				</tr>
				<tr>
					<td><input type="submit" value="Sign Up"></td>
				</tr>
				
			</table>
			
		</form>
	</body>
</html>