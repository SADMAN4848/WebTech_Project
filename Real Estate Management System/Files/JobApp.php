<?php

$name="";
$err_name="";
$nid="";
$err_nid="";
$email="";
$err_email="";
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
$zip="";
$err_zip="";
$day="";
$err_day="";
$month="";
$err_month="";
$year="";
$err_year="";
$gender="";
$err_gender="";
$exp="";
$err_exp="";
$hasError=false;
 
 
 



 


if($_SERVER["REQUEST_METHOD"]=="POST")
	
	{
		if(empty($_POST["name"]))
   {
	  $hasError=true; 
	  $err_name="*name required";
   }
   elseif(strlen($_POST["name"])<6)
   {
	  $hasError=true;  
	  $err_name="*Name Must be at least 6 characters";
   }
   else
   {
	 $name=$_POST["name"];  
   }
  
   
   		if(empty($_POST["nid"]))
   {
	  $hasError=true; 
	  $err_nid="*nid required";
   }
   else
   {
	 $bio=$_POST["nid"];  
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
	 $bio=$_POST["number"];  
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
   
   
   
   if(!isset($_POST["gender"]))
   {
	 $hasError=true;   
	$err_gender="*gender name required"; 
   }
   else
   {
	 $gender=$_POST["gender"];   
   }
   
   
  
   
   
if(!$hasError)
{
echo $_POST["name"]."<br>";	
echo $_POST["nid"]."<br>";
echo $_POST["email"]."<br>";	
echo $_POST["code"]."<br>";	
echo $_POST["number"]."<br>";	
echo $_POST["street"]."<br>";	
echo $_POST["city"]."<br>";	
echo $_POST["state"]."<br>";	
echo $_POST["zip"]."<br>";	
echo $_POST["day"]."<br>";	
echo $_POST["month"]."<br>";	
echo $_POST["year"]."<br>";	
echo $_POST["gender"]."<br>";
	

	
}

 
}	

?>


<html>
<head>
    <title>Job Application Form</title>
</head>
<body>
<fieldset>
<legend><h2>Applicant Details</h2></legend>
<form action="" method="post">
<table>
 

                <tr>
                    <td align="right" ><span>Name</span></td>
                    <td>: <input type="text" name="name">
					<span style="color:red"><?php echo $err_name; ?></span>
					</td>
                   
                </tr>
				<tr>
                    <td align="right"  ><span>Nid</span></td>
                    <td>: <input type="text" name="nid"> 
				 <span style="color:red"><?php echo $err_nid; ?></span>
                      </td>
                </tr>

                <tr>
                <td align="right" ><span>Email</span></td>
                    <td>: <input type="text" name="email"> <span style="color:red"><?php echo $err_email; ?></span>
                   </td>
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
                <td align="right">Birth Date</td>
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
						<td align="right"><span>Gender</span></td>
						<td>:<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female
                          <span style="color:red"><?php echo $err_gender; ?></span> </td>
				</tr>

              
                
					<tr>
						<td align="right"><input type="submit" name="submit" ></td>
				</tr>




 </table>
 </form>
        
</fieldset>
   

</body>
</html>