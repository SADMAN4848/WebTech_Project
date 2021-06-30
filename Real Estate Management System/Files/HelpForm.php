<?php

$name="";
$err_name="";
$email="";
$err_email="";
$ustatus="";
$err_ustatus="";
$err_query="";
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
    


   

   
   if(!isset($_POST["ustatus"]))
   {
	 $hasError=true;   
	$err_ustatus="*please select an option"; 
   }
   else
   {
	 $ustatus=$_POST["status"];   
   }
   
    
		if(empty($_POST["query"]))
   {
	  $hasError=true; 
	  $err_u="*query required";
   }
   else
   {
	 $query=$_POST["query"];  
   }
   
   
if(!$hasError)
{
echo $_POST["name"]."<br>";		
echo $_POST["email"]."<br>";	
echo $_POST["ustatus"]."<br>";
	

foreach($cbox as $aboutprint)
{
	echo "$aboutprint<br>";
}
	
echo $_POST["query"]."<br>";	
echo $_POST["submit"]."<br>";
}

 
}	

?>


<html>
<head>
    <title>Help Form</title>
</head>
<body>
<fieldset>
<legend><h2>Help</h2></legend>
<form action="" method="post">
<table>
 

                <tr>
                    <td align="right" ><span>Name</span></td>
                    <td>: <input type="text" name="name">
					<span style="color:red"><?php echo $err_name; ?></span>
					</td>
                   
                </tr>

                <tr>
                <td align="right" ><span>Email</span></td>
                    <td>: <input type="text" name="email"> <span style="color:red"><?php echo $err_email; ?></span>
                   </td>
                </tr>
				 
				  
							  
                <tr>
						<td align="right"><span>User Status</span></td>
						<td>:<input type="radio" value="Existing User" name="gender">Existing User<input type="radio" value="New User" name="User Status">New User
                          <span style="color:red"><?php echo $err_ustatus; ?></span> </td>
				</tr>

             
                
						<td align="right"><span>Query </span></td>
						<td>:<textarea name="query"></textarea>
               <span style="color:red"><?php echo $err_query; ?></span>
                        </td>
					</tr>
					<tr>
						<td align="right"><input type="submit" name="submit" ></td>
				</tr>




 </table>
 </form>
        
</fieldset>
   

</body>
</html>