<?php
	$name='';
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	$confirmPassword="";
	$err_confirmPassword="";
	$email="";
	$err_email="";
	$gender="";
	$err_gender="";
	$code="";
	$err_code="";
	$number="";
	$err_number="";
	$street="";
	$err_street="";
	$city="";
	$err_city="";
	$state="";
	$err_state="";
	$postal="";
	$err_postal="";
	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	$months = array("January","February","March","April","May","June","July","August","September","October","November","December");
	$hasError=false;
	
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	if(empty($_POST["name"])){
		$hasError=true;
		$err_name="Name Required";
	}
	else{
		$name=$_POST["name"];
	}
	
	if(empty($_POST["username"])){
		$hasError=true;
		$err_username="*Username Required";
	}
	else if(strlen($_POST["username"])<10){
		$hasError=true;
		$err_username="*Username length less than 10";
	}
	else{
		$username=$_POST["username"];
	}
	if(empty($_POST["password"])){
		$hasError=true;
		$err_password="*Password Required";
	}
	else if(strlen($_POST["password"])>8){
		$hasError=true;
		$err_password="*Password length must be greater than 8";
	}
	else if(is_numeric($_POST["password"])<1){
		$hasError=true;
		$err_password="*Password should contain at least 1 number";
	}
	
	else{
		$password=$_POST["password"];
	}
	
	if(empty($_POST["confirmPassword"])){
		$hasError=true;
		$err_confirmPassword="*Password Required";
	}
	else if($_POST["password"]!=$_POST["confirmPassword"]){
		$hasError=true;
		$err_confirmPassword="Password Mismatch";
	}
		
	else{
		$confirmPassword=$_POST["confirmPassword"];
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
                $err_code="*Please enter only number";
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
      $err_number="*Please enter only number";
            }
	else
	{
	 $number=$_POST["number"];  
	}
	
	if(empty($_POST["street"]))
   {
	  $hasError=true; 
	  $err_street="*street required";
   }
   else
   {
	 $street=$_POST["street"];  
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
   
   
	if(empty($_POST["postal"]))
   {
	  $hasError=true; 
	  $err_postal="*postal code required";
   }
   else if(is_numeric($_POST["postal"])==false){
                $err_postal="*Postal code must be number";
            }
   else
   {
	 $postal=$_POST["postal"];  
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
   echo $_POST["password"]."<br>";
   echo $_POST["confirmPassword"]."<br>";
   echo $_POST["email"]."<br>";
   echo $_POST["gender"]."<br>";
   echo $_POST["code"]."<br>";
   echo $_POST["number"]."<br>";
   echo $_POST["street"]."<br>";
   echo $_POST["city"]."<br>";
   echo $_POST["state"]."<br>";
   echo $_POST["postal"]."<br>";
   echo $_POST["day"]."<br>";
   echo $_POST["month"]."<br>";
   echo $_POST["year"]."<br>";
   
}
?>


<html>
	<body style="background-color:silver;">
	<fieldset>
		<legend><h1>Admin Sign Up</h1></legend>
		<form action="" method="post">
			<table>
				<tr>
                    <td align="right" ><span>Name</span></td>
                    <td>: <input type="text" name="name">
					<span style="color:red"><?php echo $err_name; ?></span>
					</td>
                   
                </tr>
				
                <tr>
                    <td align="right" ><span>Username</span></td>
                    <td>: <input type="text" name="username"><span style="color:red"><?php echo $err_username; ?></span> </td>
                </tr>

                <tr>
                    <td align="right"  ><span>Password</span></td>
                    <td>: <input type="password" name="password"> 
				 <span style="color:red"><?php echo $err_password; ?></span>
                      </td>
                </tr>
				<tr>
                    <td align="right"><span>Confirm Password</span></td>
                    <td>: <input type="password" name="cpassword">
					<span style="color:red"><?php echo $err_confirmPassword; ?></span>
                       </td>
                </tr>
				<tr>
                <td align="right" ><span>Email</span></td>
                    <td>: <input type="text" name="email"> <span style="color:red"><?php echo $err_email; ?></span>
                   </td>
                </tr>
				
				<tr>
						<td align="right"><span>Gender</span></td>
						<td>:<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female
                          <span style="color:red"><?php echo $err_gender; ?></span> </td>
				</tr>
				<tr>
                        <td align="right" ><span>Phone</span></td>
                        <td>: <input type="text"  placeholder ="code" size="3" name="code">	<span style="color:red"><?php echo $err_code; ?></span> - 
							 <input type="text"  placeholder ="Number" size="9" name="number" ><span style="color:red"><?php echo $err_number; ?></span>
                         </td>
                 </tr>
				
				<tr>
                    <td align="right" rowspan="3"><span>Address</span></td>
                    <td>: <input type="text" placeholder="Street Address"   name="street"> 
				 	<span style="color:red"><?php echo $err_street; ?></span>
                     </td>
                </tr>

                <tr>
                    <td>: <input type="text" placeholder="City"   name="city" size="3">
					 	<span style="color:red"><?php echo $err_city; ?></span>
                 
                    
                
                    - <input type="text" placeholder="State"   name="state" size = "9">
				 	<span style="color:red"><?php echo $err_state; ?></span>
                     </td>
                
                </tr>

                <tr>
                    <td>: <input type="text" placeholder="Postal/Zip code"   name="postal"> 
						<span style="color:red"><?php echo $err_postal; ?></span>	 
                   </td>
                </tr>
				<tr>
                <td align="right">Birth Date</td>
						<td>:
							<select name="day" >
								<option>Day</option>
								
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select><span style="color:red"><?php echo $err_day; ?></span>
							<select name="month">
								<option>Month</option>
								
								<?php
								foreach($months as $m){
									if($m == $month)
										echo "<option selected>$m</option>";
									else
										echo "<option>$m</option>";
								}
							?>
							</select>
							<span style="color:red"><?php echo $err_month; ?></span>
							
                            <select name="year">
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
					<td align="right"><input type="submit" value="Sign Up"></td>
				</tr>
				
			</table>
			
		</form>
		</fieldset>
	</body>
</html>