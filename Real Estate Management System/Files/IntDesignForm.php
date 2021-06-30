<?php

$name="";
$err_name="";
$email="";
$err_email="";
$number="";
$err_number="";
$code="";
$err_code="";
$tos="";
$err_tos="";
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
   
		if(empty($_POST["service"]))
   {
	  $hasError=true; 
	  $err_tos="*select service";
   }
   else
   {
	 $tos=$_POST["service"];  
   }

   
   
if(!$hasError)
{
echo $_POST["name"]."<br>";	
echo $_POST["email"]."<br>";		
echo $_POST["service"]."<br>";	
echo $_POST["submit"]."<br>";
echo $_POST["code"]."<br>";	
echo $_POST["number"]."<br>";
}

 
}
?>



<html>
 <head>
  <title>Interior Design Form</title>
 </head>
  <body>
    <fieldset>
	  <legend><h2>Interior design registration</h2></legend>
       <form action="" method="post">
  <table border="3" align="Center">
                <tr>
                    <td align="right" ><span>Name</span></td>
                    <td><input type="text" name="name">
					<span style="color:red"><?php echo $err_name; ?></span>
					</td>
                   
                </tr>
                <tr>
                    <td align="right" ><span>Email</span></td>
                    <td><input type="text" name="email"> <span style="color:red"><?php echo $err_email; ?></span>
                    </td>
                </tr>
                <tr>
                        <td align="right" ><span>Phone</span></td>
                        <td>: <input type="text"  placeholder ="code" size="3" name="code">	<span style="color:red"><?php echo $err_code; ?></span> - 
							 <input type="text"  placeholder ="Number" size="9" name="number" ><span style="color:red"><?php echo $err_number; ?></span>
                         </td>
                </tr>
   <tr><td>Service</td>
   <td><select name="type of service">
   <option>type of service</option>
   <?php
         $service = array("Renovate","Remodel","Decorate");
		  foreach($service as $v){
		echo "<option>$v</option>";
								}
	?>
   </td></tr>
                <tr>
						<td align="right"><input type="submit" name="submit" ></td>
				</tr>
  </table> 	  
  </form>  
  </fieldset>
 </body>
</html>