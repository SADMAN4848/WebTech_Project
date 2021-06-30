<?php
$first_name = "";
$err_first_name = ""; 
$last_name = "";
$err_last_name = ""; 
$cvv = "";
$err_cvv = ""; 
$card = "";
$err_card = ""; 
$bank = "";
$err_bank = ""; 
$branch = "";
$err_branch = ""; 
$validity = "";
$err_validity = ""; 
$P_id = "";
$err_P_id = ""; 

$hasError = false;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["first_name"]))
	{
		$hasError = true;
		$err_first_name = "First name required";
	}
	else if(strlen($_POST["first_name"])<= 2)
	{
		$hasError = true;
		$err_first_name = "First name must be greater than 2 characters";
	}
	else
	{
		$first_name = $_POST["first_name"];
	}
	
		if(!$hasError)
	{
	echo $_POST["first_name"]."<br>";
	}
	
		if(empty($_POST["last_name"]))
	{
		$hasError = true;
		$err_last_name = "Last name required";
	}
	else if(strlen($_POST["last_name"])<= 2)
	{
		$hasError = true;
		$err_last_name = "Last name must be greater than 2 characters";
	}
	else
	{
		$last_name = $_POST["last_name"];
	}
		if(empty($_POST["cvv"]))
   {
	  $hasError=true; 
	  $err_cvv="CVV required";
   }
    elseif(is_numeric($_POST["cvv"])==false){
                $err_cvv="*Please enter digit";
            }
   else
   {
	 $cvv=$_POST["cvv"];  
   }
	
		if(empty($_POST["card"]))
   {
	  $hasError=true; 
	  $err_card="Card required";
   }
    elseif(is_numeric($_POST["card"])==false){
                $err_card="*Please enter digit";
            }
   else
   {
	 $card=$_POST["card"];  
   }	
		if(empty($_POST["bank"]))
   {
	  $hasError=true; 
	  $err_bank="Select a bank";
   }
   else
   {
	 $bank=$_POST["bank"];  
   }
   	
		if(empty($_POST["branch"]))
   {
	  $hasError=true; 
	  $err_branch="Select a branch";
   }
   else
   {
	 $branch=$_POST["branch"];  
   }	
		if(empty($_POST["validity"]))
   {
	  $hasError=true; 
	  $err_validity="Validity required";
   }
    elseif(is_numeric($_POST["validity"])==false){
                $err_cvv="Please enter the validity";
            }
   else
   {
	 $validity=$_POST["validity"];  
   }	
		if(empty($_POST["P_id"]))
   {
	  $hasError=true; 
	  $err_P_id="Select a property id";
   }
   else
   {
	 $P_id=$_POST["P_id"];  
   }	
	
	
	
	if(!$hasError)
	{
	echo $_POST["first_name"]."<br>";
	echo $_POST["last_name"]."<br>";
    echo $_POST["card"]."<br>";
	echo $_POST["bank"]."<br>";
	echo $_POST["branch"]."<br>";
	echo $_POST["validity"]."<br>";
	echo $_POST["P_id"]."<br>";
	}

	
}

?>
	

<html>
	<body>
		<form action="" method="post">
		<h1>Payment</h1>
			<table>
                <tr>
                    <td>First Name</td>
                    <td>: <input type="text"  placeholder="Enter your first name" name="first_name">
					<span style="color:red"><?php echo $err_first_name; ?></span>
					</td>
                </tr>
				
                <tr>
                    <td>Last Name</td>
                    <td>: <input type="text"  placeholder="Enter your last name" name="last_name">
					<span style="color:red"><?php echo $err_last_name; ?></span>
					</td>
                </tr>
				
				<tr>
				
                    <td>CVV</td>				
				    <td>: <input type="text"  placeholder ="Enter your CVV" name="cvv">
					<span style="color:red"><?php echo $err_cvv; ?></span>
                    </td>
				</tr>
				
				<tr>
                    <td>Card</td>				
				    <td>: <input type="text"  placeholder ="Enter your card number" size="" name="card">
					<span style="color:red"><?php echo $err_card; ?></span>
                    </td>
					
				</tr>
				<tr>
					<td>Bank Name</td>
					<td>
					
					<select name="bank">
						<option selected disabled>Select Bank</option>
						<option>Dhaka Bank Limited</option>
						<option>United Commertial Bank Limited</option>
						<option>Uttara Bank</option>
						<option>Brac Bank</option>
						<option>Shonali Bank</option>
						<option>Agrani Bank</option>					
						<span style="color:red"><?php echo $err_bank; ?></span>					
					</td>
				</tr>
				
				<tr>
					<td>Branch</td>
					<td>
					
					<select name="branch">
						<option selected disabled>Select Branch</option>
						<option>Mohammadpur</option>
						<option>Mirpur</option>
						<option>Uttara</option>
						<option>Dhanmondi</option>
						<option>Banani</option>
						<option>Gulshan</option>
						<option>Baridhara</option>
						<option>Bashundahara</option>
						<option>Nikunjo</option>
						<option>Kuril</option>
						<option>Mogbazar</option>
						<option>Rampura</option>
						<span style="color:red"><?php echo $err_branch; ?></span>						
					</td>
				</tr>
				
				<tr>
					<td>Validity</td>
					<td>:<input name="validity" type="text" placeholder="dd/mm/yyyy"></td>
					<span style="color:red"><?php echo $err_validity; ?></span>
				</tr>

				
				<tr>

					<td>Property id</td>
					<td><select name="P_id">
						<option selected disabled>Select Property id</option>
						<?php
							for ($x = 1; $x <= 1000; $x++) {
							echo "<option selected>$x</option>";
							}
						?>
						<span style="color:red"><?php echo $err_P_id; ?></span>
					</td>
				</tr>
				
				<tr>
					<td><input type="submit" value="Confirm"></td>
				</tr>
				
			</table>
			
		</form>
	</body>
</html>