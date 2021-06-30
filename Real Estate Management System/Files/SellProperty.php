<?php
	$ownerName='';
	$err_ownerName="";
	$ownerEmail='';
	$err_ownerEmail="";
	$P_location='';
	$err_P_location="";
	$P_Area='';
	$err_P_Area="";
	$P_Type="";
	$err_P_Type="";
	$P_id="";
	$err_P_id="";
	$P_price="";
	$err_P_price="";
	$email="";
	$err_email="";
	$gender="";
	$err_gender="";
	$code="";
	$err_code="";
	$phone="";
	$err_phone="";
	
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
	
	if(empty($_POST["P_location"]))
   {
	  $hasError=true; 
	  $err_P_location="*location required";
   }
   else
   {
	 $P_location=$_POST["P_location"];  
   }
   
   if(empty($_POST["P_Area"]))
	{
	  $hasError=true; 
	  $err_P_Area="*number required";
	}
    elseif(is_numeric($_POST["P_Area"])==false){
      $err_P_Area="*Please enter only number";
            }
	else
	{
	 $P_Area=$_POST["P_Area"];  
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
	
	if(empty($_POST["P_id"]))
	{
	  $hasError=true; 
	  $err_P_id="*Property ID required";
	}
   else
	{
	 $P_id=$_POST["P_id"];  
	}
	
	if(empty($_POST["P_price"]))
	{
	  $hasError=true; 
	  $err_P_price="*number required";
	}
    elseif(is_numeric($_POST["P_price"])==false){
      $err_P_price="*Please enter only number";
            }
	else
	{
	 $P_price=$_POST["P_price"];  
	}
	echo $_POST["ownerName"]."<br>";
	echo $_POST["ownerEmail"]."<br>";
	echo $_POST["P_location"]."<br>";
	echo $_POST["P_Area"]."<br>";
	echo $_POST["P_Type"]."<br>";
	echo $_POST["P_id"]."<br>";
	echo $_POST["P_price"]."<br>";
	echo $_POST["email"]."<br>";
	echo $_POST["gender"]."<br>";
	echo $_POST["code"]."<br>";
	echo $_POST["phone"]."<br>";
}
?>


<html>
	<body style="background-color:silver;">
	<fieldset>
		<legend><h1>Sell Property</h1></legend>
		<form action="" method="post">
			<table>
			
				<tr>
                    <td align="right" ><span>Property Owner</span></td>
                    <td>: <input type="text" placeholder ="Enter name" name="ownerName">
					<span style="color:red"><?php echo $err_ownerName; ?></span>
					</td>
                   
                </tr>
				<tr>
                <td align="right" ><span>Owner's Email</span></td>
                    <td>: <input type="text" placeholder ="Enter email" name="ownerEmail"> <span style="color:red"><?php echo $err_ownerEmail; ?></span>
                   </td>
                </tr>
				
				<tr>
					<td align="right"><span>Property Location:</span></td>
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
					<td align="right"><span>Property Area</span></td>
					<td>:<input name="P_Area" type="text" placeholder="Square feet"><span style="color:red"><?php echo $err_P_Area; ?></span></td>
					
				</tr>
				
				<tr>
					<td align="right"><span>Property Type</span></td>
					<td>:<input type="radio" value="Apartment" name="P_Type">Apartment<input type="radio" value="House" name="P_Type">House<input type="radio" value="Plot" name="P_Type">Plot<input type="radio" value="Duplex" name="P_Type">Duplex<input type="radio" value="Farm" name="P_Type">Farm
                    <span style="color:red"><?php echo $err_P_Type; ?></span> </td>
				</tr>
				
				<tr>
					<td align="right"><span>Property Id</span></td>
					<td>:<input name="P_id" type="text" placeholder="Enter property id"><span style="color:red"><?php echo $err_P_id; ?></span></td>
					
				</tr>
								
				<tr>
					<td align="right"><span>Property Price</span></td>
					<td>:<input name="P_price" type="text" placeholder="Enter Property Price"><span style="color:red"><?php echo $err_P_price; ?></span></td>
					
				</tr>
				
				
				<tr>
					<td align="right"><input type="submit" value="Submit"></td>
				</tr>
				
			</table>
			
		</form>
	</body>
</html>