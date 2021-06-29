<?php
$P_location = "";
$err_P_location = ""; 
$P_area = "";
$err_P_area = ""; 
$P_type = "";
$err_P_type = ""; 
$P_id = "";
$err_P_id = ""; 
$P_price = "";
$err_P_price = ""; 

$hasError = false;

if($_SERVER["REQUEST_METHOD"] == "POST")
{

		if(empty($_POST["P_location"]))
   {
	  $hasError=true; 
	  $err_P_id="Select a property location";
   }
   else
   {
	 $P_location=$_POST["P_location"];  
   }

		if(empty($_POST["P_area"]))
   {
	  $hasError=true; 
	  $err_P_area="Property area required";
   }
    elseif(is_numeric($_POST["P_area"])==false){
                $err_P_area="*Please enter area size at digit";
            }
   else
   {
	 $P_area=$_POST["P_type"];  
   } 
		if(empty($_POST["P_type"]))
   {
	  $hasError=true; 
	  $err_P_type="Select property type";
   }
   else
   {
	 $P_type=$_POST["P_type"];  
   }
		if(empty($_POST["P_id"]))
   {
	  $hasError=true; 
	  $err_P_id="Property id required";
   }
    elseif(is_numeric($_POST["P_id"])==false){
                $err_P_id="*Please enter Property id at digit";
            }
		if(empty($_POST["P_price"]))
   {
	  $hasError=true; 
	  $err_P_price="Property price required";
   }
    elseif(is_numeric($_POST["P_price"])==false){
                $err_P_price="*Please enter property price at digit";
            }

   
 	if(!$hasError)
	{
	echo $_POST["P_location"]."<br>";
	echo $_POST["P_area"]."<br>";
    echo $_POST["P_type"]."<br>";
	echo $_POST["P_id"]."<br>";
	echo $_POST["P_price"]."<br>";
	}
	
}

?>  
   
 
   
<html>
	<body>
		<form action="" method="post">
		<h1>Property for Rent</h1>
			<table>
			
				<tr>
					<td>Property Location</td>
					<td>
					
					<select name="P_location">
						<option selected disabled>Select Location</option>
						<option>Mirpur</option>
						<option>Mohammadpur</option>
						<option>Uttara</option>
						<option>Banani</option>
						<option>Gulshan</option>
						<option>Dhanmondi</option>
						<option>Baridhara</option>
						<option>Bashundahara</option>
						<option>Nikunjo</option>
						<option>Kuril</option>
						<option>Mogbazar</option>
						<option>Rampura</option>
						<span style="color:red"><?php echo $err_P_location; ?></span>					
					</td>
				</tr>
				<tr>
                    <td>Property Area</td>				
				    <td>: <input type="text"  placeholder ="Enter your property area size" name="P_area">
					<span style="color:red"><?php echo $err_P_area; ?></span>
                    </td>
					
				</tr>
				
				<tr>
					<td>Property Type</td>
					<td>
					
					<select name="P_type">
						<option selected disabled>Select Type</option>
						<option>Apparment</option>
						<option>House</option>
						<option>Duplex</option>
						<option>Plot</option>
						<span style="color:red"><?php echo $err_P_type; ?></span>					
					</td>
				</tr>
				
				<tr>
					<td>Property Id</td>
					<td>:<input name="P_id" type="text" placeholder="Enter property id"></td>
					<span style="color:red"><?php echo $err_P_id; ?></span>
				</tr>
				</tr>
				
				<tr>
					<td>Property Price</td>
					<td>:<input name="P_price" type="text" placeholder="Enter Property Price"></td>
					<span style="color:red"><?php echo $err_P_price; ?></span>
				</tr>
				
				
				<tr>
					<td><input type="submit" value="Submit"></td>
				</tr>
				
			</table>
			
		</form>
	</body>
</html>