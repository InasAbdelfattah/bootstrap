<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/font/css/font-awesome.css" rel="stylesheet">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	<style>
    .header {
        color: #36A0FF;
        font-size: 27px;
        padding: 10px;
    }

    .bigicon {
        font-size: 30px;
        color: #36A0FF;
    }
</style>
<?php
      $name = $address = $email = $credit =$username=$password=$cpass="";
      if ($_SERVER["REQUEST_METHOD"] == "POST")  
        {  
		  $name = test_input($_POST["name"]);
		  $email = test_input($_POST["email"]);
		  $credit= test_input($_POST["credit"]);
		  $username = test_input($_POST["username"]);  
		  $password= test_input($_POST["password"]); 
		  $cpass=test_input($_POST['cpassword']);   	     
		  $address=test_input($_POST['address']);  
		   
	    } 
	    function test_input($data)  
        {  
		  $data = trim($data);  
		  $data = stripslashes($data);  
		  $data = htmlspecialchars($data);  
		  return $data;
		 }

  
      $nameerr=$emailerr=$crediterr=$usererr=$passerr=$cpasserr=$adderr="";
      $name1=$email1=$credit1=$user1=$pass1=$cpass1=$add1="";
      if ($_SERVER["REQUEST_METHOD"] == "POST") {  
          $valid = true;
            if(!empty($_POST["name"])) 
            {  
     			
			     $name1 = test_input($_POST["name"]);  
			           // check if name only contains letters and whitespace  
			     if (!preg_match("/^[a-zA-Z ]*$/",$name))  
			      {  
			   		 $nameerr = "<span class='glyphicon glyphicon-remove'> Invalid Name</span>";  
			    	 $valid=false;  
			       }  
			 } 
			   
			 if (!empty($_POST["email"])) 
			     {  
				     
            
				     $email1 = test_input($_POST["email"]);  
				           // check if e-mail address syntax is valid  
				     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))  
				    {  
				       $emailerr = "<span class='glyphicon glyphicon-info-sign'> Invalid Email Format</span>";  
				       $valid=false;  
				     }  
                 }
           
             if(!empty($_POST["credit"]))
             {
             	
             	$credit1=test_input($_POST["credit"]);
             	if(!preg_match("/^\d+$/",$credit))
             	{
             		$crediterr="<span class='glyphicon glyphicon-exclamation-sign'> Invalid credit<br/><br/> <font color='#007fff'>(Credit must be number)</font></span>";
             		$valid=false;

             	}
             }
             if (empty($_POST["username"])) 
             {  
			     $usererr = "specify your username";  
			     $valid=false;  
			  }  
            else 
            {  
               $user1 = test_input($_POST["username"]);  
            }  
            if (empty($_POST["password"])) 
            {  
               $passerr = "specify your password";  
               $valid=false;  
             }  
           else
            {  
              $pass1 = test_input($_POST["password"]);  
            } 
            if(empty($_POST['cpassword']))
             {
             	$cpasserr="confirm your passwprd";
             	$valid=false;
             } 
             else
             {
             	if($_POST['cpassword']!=$_POST['password'])
             	{
             	   $cpasserr="<span class='glyphicon glyphicon-warning-sign'> Password Does Not Match</span>";
             	   $valid=false;
                }
                else
                {
                	$cpass1=test_input($_POST["cpassword"]);
                }
             }
             if (empty($_POST["address"]))
			       {  
				   $adderr = "Missing Address";  
				   $valid=false;  
				     }  
			 else 
				   {  
				     $add1 = test_input($_POST["address"]);  
				     // check if name only contains letters and whitespace  
				     if (!preg_match("/^[a-zA-Z ]*$/",$address))  
				      {  
				        $adderr = "Only letters and white space allowed";  
				        $valid=false;  
				       }  
				    }
    }
   
     if(@$valid==true)
     {
     	
     	$conn=mysqli_connect("localhost","root","iti","babyshop");
     	@$n=$_POST['name'];
     	@$user=$_POST['username'];
     	@$pa=$_POST['password'];
     	@$cpa=$_POST['cpassword'];
     	@$em=$_POST['email'];
     	@$cr=$_POST['credit'];
     	@$ad=$_POST['address'];
     	@$birthd=$_POST['birthdate'];
     	@$interest=$_POST['interest'];
     	
            $query=mysqli_query($conn,"insert into users (name,username,password,birthdate,email,credit,address,interests) values('$n','$user','$pa','$birthd','$em','$cr','$ad','$interest')");
     	    echo $query;
     	    header("location:myAccount.php");
     	
     	
     	mysqli_close($conn); 
     
     }

   ?>		


</head>
<body>
   

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <fieldset>
                        <legend class="text-center header">Please Register Here</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-6">
                                <input id="name" name="name" type="text" placeholder="Name*" class="form-control" value="<?php echo htmlspecialchars($name);?>" required>
                                
                            </div>
                            <span><font color="#ff0080"><?php echo "&nbsp&nbsp&nbsp".$nameerr;?></font></span>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-6">
                                <input id="username" name="username" type="text" placeholder="username*" class="form-control" required>
                            </div>
                           
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-key bigicon"></i></span>
                            <div class="col-md-6">
                                <input id="password" name="password" type="password" placeholder="password*" class="form-control" value="<?php echo htmlspecialchars($password);?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-key bigicon"></i></span>
                            <div class="col-md-6">
                                <input id="cpassword" name="cpassword" type="password" placeholder="Confirm Password*" class="form-control" value="<?php echo htmlspecialchars($cpass);?>" required>
                            </div>
                            <span><font color="#ff0080"><?php echo "&nbsp&nbsp&nbsp".$cpasserr;?></font></span>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-at bigicon"></i></span>
                            <div class="col-md-6">
                                <input id="email" name="email" type="text" placeholder="Email Address*" class="form-control" value="<?php echo htmlspecialchars($email);?>" required>
                            </div>
                            <span><font color="#ff0080"><?php echo "&nbsp&nbsp&nbsp".$emailerr;?></font></span>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-credit-card bigicon"></i></span>
                            <div class="col-md-6">
                                <input id="credit" name="credit" type="text" placeholder="Credit*" class="form-control" value="<?php echo htmlspecialchars($credit);?>" required>
                            </div>
                            <span><font color="#ff0080"><?php echo "&nbsp&nbsp&nbsp".$crediterr;?></font></span>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-6">
                                <input id="address" name="address" type="text" placeholder="Address*" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-birthday-cake bigicon"></i></span>
                            <div class="col-md-6">
                                <input id="birthdate" name="birthdate" type="date" placeholder="Birthdate" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-6">
                                <textarea class="form-control" id="interest" name="interest" placeholder="Enter your Interests for us here." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-info btn-lg" name="submit" onclick="myFunction()">Create Account</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>



</body>
</html>