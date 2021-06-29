<?php
	$name='';
	$err_name="";
	$email="";
	$err_email="";
	$code="";
	$err_code="";
	$number="";
	$err_number="";
	$status="";
	$err_status="";
	$time="";
	$err_time="";
	$P_location='';
	$err_P_location="";
	$P_Type="";
	$err_P_Type="";
	$hasError=false;
	
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["name"])){
		$hasError=true;
		$err_name="Name Required";
	}
	else{
		$name=$_POST["name"];
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
                $err_code="*Please enter only number";
            }
	else
	{
	 $code=$_POST["code"];  
	}
   
   
	if(empty($_POST["number"]))
	{
	  $hasError=true; 
	  $err_phone="*number required";
	}
    elseif(is_numeric($_POST["number"])==false){
      $err_phone="*Please enter only number";
            }
	else
	{
	 $number=$_POST["number"];  
	}
	
	if(empty($_POST["status"]))
	{
	  $hasError=true; 
	  $err_status="*status required";
	}
   else
	{
	 $status=$_POST["status"];  
	}
	
	if(!isset($_POST["time"]))
    {
	$hasError=true;   
	$err_time="*time required"; 
    }
	else
    {
	 $time=$_POST["time"];   
    }
	
	if(empty($_POST["P_location"]))
	{
	  $hasError=true; 
	  $err_P_location="*Location required";
	}
   else
	{
	 $P_location=$_POST["P_location"];  
	}
	
	if(!isset($_POST["P_Type"]))
    {
	$hasError=true;   
	$err_P_Type="*property type required"; 
    }
	else
    {
	 $P_Type=$_POST["P_Type"];   
    }
	echo $_POST["name"]."<br>";	
	echo $_POST["email"]."<br>";	
	echo $_POST["code"]."<br>";	
	echo $_POST["number"]."<br>";	
	echo $_POST["status"]."<br>";	
	echo $_POST["time"]."<br>";	
	echo $_POST["P_location"]."<br>";	
	echo $_POST["P_Type"]."<br>";	
}
?>
<html>
	<body style="background-color:silver;">
	<fieldset>
	<legend><h1>Apply for Home Loan</h1></legend>
		<form action="" method="post">
		
			<table>
				<tr>
                    <td align="right" ><span>Name</span></td>
                    <td>: <input type="text" placeholder ="Enter name" name="name">
					<span style="color:red"><?php echo $err_name; ?></span>
					</td>
                   
                </tr>
				<tr>
                <td align="right" ><span>Email</span></td>
                    <td>: <input type="text" placeholder ="Enter email" name="email"> <span style="color:red"><?php echo $err_email; ?></span>
                   </td>
                </tr>
				<tr>
                        <td align="right" ><span>Phone</span></td>
                        <td>: <input type="text"  placeholder ="code" size="3" name="code">	<span style="color:red"><?php echo $err_code; ?></span> - 
							 <input type="text"  placeholder ="Number" size="9" name="number" ><span style="color:red"><?php echo $err_number; ?></span>
                         </td>
                 </tr>
				 <td align="right">What is your buying Status? </td>
						<td>: <select name="status"  >
								<option selected disabled>Select status</option>
								
								<?php
								    $status = array("I am thinking about buying","Touring open houses","Making offer on a property","I've signed a purchase contact");
									foreach($status as $v){
										echo "<option>$v</option>";
										
									}
								?>
							</select>
							<span style="color:red"><?php echo $err_status; ?></span>
						</td>
				</tr>
				<tr>
						<td align="right"><span>When are you looking to buy</span></td>
						<td>:<input type="radio" value="0-3" name="time">0-3 Months<input type="radio" value="4-6" name="time">4-6 Months<input type="radio" value="7+" name="time">7 Months+<input type="radio" value="NotSure" name="time">Not Sure
                          <span style="color:red"><?php echo $err_time; ?></span> </td>
				</tr>
				
				<tr>
					<td align="right"><span>Preferred Location:</span></td>
					<td>
					<select name="P_location"  >
								<option selected disabled>Choose One</option>
								
								<?php
								    $P_location = array("Mirpur","Mohammadpur","Uttara","Banani","Gulshan","Dhanmondi","Baridhara","Bashundahara","Nikunjo","Kuril","Mogbazar","Rampura");
									foreach($P_location as $v){
										echo "<option>$v</option>";
										
									}
								?>
							</select>
							<span style="color:red"><?php echo $err_P_location; ?></span>
							
				
				</tr>
				
				<tr>
					<td align="right"><span>Property Type</span></td>
					<td>:<input type="radio" value="Apartment" name="P_Type">Apartment<input type="radio" value="House" name="P_Type">House<input type="radio" value="Plot" name="P_Type">Plot<input type="radio" value="Duplex" name="P_Type">Duplex<input type="radio" value="Farm" name="P_Type">Farm
                    <span style="color:red"><?php echo $err_P_Type; ?></span> </td>
				</tr>
				<tr>
					<td align="right"><input type="submit" value="Apply"></td>
				</tr>
				
			</table>
			
		</form>
		</fieldset>
	</body>
</html>