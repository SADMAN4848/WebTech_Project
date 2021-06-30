<?php
	$email="";
	$err_email="";
	$password="";
	$err_password="";
	$hasError=false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
	
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
	
	else if(!strpos($_POST,$char["password"])){
		$hasError=true;
		$err_password="*Shouldn't contain special character";
	}
	else if(!strpos($_POST,$char2["password"])){
		$hasError=true;
		$err_password="*Shouldn't contain special character";
	}
	
	else{
		$password=$_POST["password"];
	}
	echo $_POST["email"]."<br>";
	echo $_POST["password"]."<br>";
}
?>


<html>
	<body style="background-color:silver;">
	<fieldset>
		<legend><h1>Sign in</h1></legend>
		<form action="" method="post">
			<table>
			<tr>
				<td align="right" ><span>Email</span></td>
				<td>: <input type="text" name="email"> <span style="color:red"><?php echo $err_email; ?></span>
                </td>
            </tr>
			
			<tr>
                <td align="right" ><span>Password</span></td>
                <td>: <input type="password" name="password"> 
				<span style="color:red"><?php echo $err_password; ?></span>
				</td>
            </tr>
			
			<tr>
					<td colspan="2" align="right"><input type="submit" value="Sign in"></td>
			</tr>
			</table>
			
		</form>
		</fieldset>
	</body>
</html>