<!DOCTYPE html>
<html>
<head>
	<title>valid page</title>
</head>
<body>
<div>
 <h2><center> Login or Sign in</center> </H2>
      <form method="POST" action="login_valid.php">
          
          Username:<input type="text" name="t1"><br>
          Password:<input type="password" name="t2"><br>
          URL:<input type="URL" name="url"><br>                                     <!-- do it using filter also -->
          IP:<input type="text" name="ip"><br>
          MAC:<input type="text" name="mac"><br>                  
          Email:<input type="email" name="em"><br>
         Gender: <input type="radio" name="r1">Male
         <input type="radio" name="r1" >Female
         <input type="radio" name="r1">Others<br><br>
          <input type="submit" value="submit" name="submit">
          <br><br><br>
         <!--  <a href="registerhere.php">REGISTER Here...</a>
          --> </form>

          <?php
     //     echo "<pre>";
    // print_r(filter_list());           //give all datails of filters


        if(isset($_POST['submit']))
        {

        	
        	//echo "btn clicked";
        	$a=$_POST['t1'];
        	   	$b=$_POST['t2'];
        	   	$e=$_POST['em'];
                 $i=$_POST['ip'];
                  $m=$_POST['mac'];

  	//........username.........

        	if (empty($a)) {
        		//echo "<script>alert('Fil up the username field')</script>";

        		echo "Fil up the username field<br>";
      
        	}
        	if (strlen($a)<6 && !preg_match("/^[a-zA-Z]$/",$a)) {
        		echo "invalid username...please entered atleast 6 alphabet<br><br>";
        	}


            //..........password.............

            //re for password........('/^(?=.*\d) (?=.*[A-Za-z]) [0-9A-Za-z!@#$%]{8-13}$/')
              if (empty($b)) {

        		echo "Fil up the password field<br>";
        	}
        	

        	if ( !preg_match("#[a-z]+#",$b)) {

        		echo "pass contain 1 small<br> ";
        	}
        	if ( !preg_match("#[A-Z]+#",$b)) {

        		echo "pass contain 1 cap <br>";
        	}
        	if ( !preg_match("#[0-9]+#",$b)) {

        		echo "pass contain 1 number <br>";
        	}
        	if (strlen($b)<5 && !preg_match("/^[0-9]$/",$b)) {
        		echo "invalid pass...please entered atleast 6 digit<br><br>";

        		
        	}



       //.........IP...........
         if(!filter_var($i,FILTER_VALIDATE_IP)){
        		echo "enter valid ip<br><br>";
        	}

       
       //.........MAC...........
         if(!filter_var($i,FILTER_VALIDATE_MAC)){
        		echo "enter valid mac<br><br>";
        	}

        	

        	
        	// ........email...........

        	if (empty($e)) {

        		echo "email not empty<br><br>";
        	}

        	//..........using filter email

        	// if(!filter_var($e,FILTER_VALIDATE_EMAIL)){
        	// 	echo "<br>enter valid mail";
        	// }

        	//..........URL.........



if (!isset($_POST['r1'])) {
        		echo "<br>please select gender";

        		
        	}

        }


      
          ?>
          
</div>
</body>
</html>