<!DOCTYPE html>
<html>
<head>
	<title>valid page</title>
</head>
<body>
<div>
 <h2><center> Login or Sign in</center> </H2>
      <form method="POST" action="p1.php">
          
          Username:<input type="text" name="un"><br>
          Password:<input type="password" name="ps"><br>
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

        <!--   <?php
        // echo "<pre>";
  //   print_r(filter_list());           //give all datails of filters


     //   if(isset($_POST['submit']))
        {

      //  	extract($_POST);
      //    echo "<br><br>User name is:".$un;
}

//if (empty($un)) {
            
         //   echo "Fil up the username field <br> ";
      
       //   }
?> -->