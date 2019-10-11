<html>
<head>
<style type="text/css">
  form{
    align-content: center;
  }
  table{
    
  }



</style>
    <script>
        
  function checkForm(form)
  {
    if(form.username.value == "") {
      document.getElementById("i1").innerHTML="Name cannot be blank";
      form.username.focus();
      return false;
    }
    else
    document.getElementById("i1").innerHTML="";
    
    re = /^\w+$/;
    if(!re.test(form.username.value)) {
      document.getElementById("i1").innerHTML="Error: Username must contain only letters, numbers and underscores!";
      form.username.focus();
      return false;
    }
    else
    document.getElementById("i1").innerHTML="";
    
    if(form.pwd1.value == "") 
    {
    document.getElementById("i2").innerHTML="Error: Password cannot be blank";
        form.pwd1.focus();
        return false;
      }
      else document.getElementById("i2").innerHTML="";
    
    
      if(form.pwd1.value.length < 6) {
        document.getElementById("i2").innerHTML="Error: Password must contain at least six characters!";
        form.pwd1.focus();
        return false;
      }
      else document.getElementById("i2").innerHTML="";
      
      if(form.pwd1.value == form.username.value) {
        document.getElementById("i2").innerHTML="Error: Password must be different from Username!";
        form.pwd1.focus();
        return false;
      }
      else document.getElementById("i2").innerHTML="";
      
      re = /[0-9]/;
      if(!re.test(form.pwd1.value)) {
        document.getElementById("i2").innerHTML="Error: password must contain at least one number (0-9)!";
        form.pwd1.focus();
        return false;
      }
      else document.getElementById("i2").innerHTML="";
      
      re = /[a-z]/;
      if(!re.test(form.pwd1.value)) {
     document.getElementById("i2").innerHTML="Error: password must contain at least one lowercase letter (a-z)!";
        form.pwd1.focus();
        return false;
      }
      else document.getElementById("i2").innerHTML="";
      
      re = /[A-Z]/;
      if(!re.test(form.pwd1.value)) {
      document.getElementById("i2").innerHTML="Error: password must contain at least one uppercase letter (A-Z)!";
        form.pwd1.focus();
        return false;
      }
     if(form.pwd1.value != form.pwd2.value) {
      document.getElementById("i3").innerHTML="Error: Password do not match";
      form.pwd1.focus();
      return false;
    }
    else document.getElementById("i3").innerHTML="";
    
  
    re = /^\d{10}$/;
      if(!re.test(form.mobile.value)) {
      document.getElementById("i5").innerHTML="Error: Enter a valid Mobile number";
        form.mobile.focus();
        return false;
      }
      else document.getElementById("i5").innerHTML="";
  }



    </script>
</head>
    <body>
        
        
       <div>
<form  onsubmit="return checkForm(this);" 
      method="post" action="request.php">
<table cellspacing="5">
<tr>
<td>Username: </td><td><input type="text" name="username" size="50">&nbsp;<span id="i1"></span></td>
</tr>
<tr>
<td>Password: </td><td><input type="password" name="pwd1" size="50">&nbsp;<span id="i2"></span></td>
</tr>
<tr>
<td>
Confirm Password: </td><td><input type="password" name="pwd2" size="50">&nbsp;<span id="i3"></span></td>
</tr>
<tr>
<td>

    Email: </td><td><input type="email" name="email" size="50">&nbsp;<span id="i4" ></span></td>
</tr>
<tr>
  <td>
    <select>Subject</select>
  <option>cse</option>
  <option>php</option>
  </td>
</tr>
<tr>
<td>
Mobile no: </td><td><input type="text" name="mobile" size="50">&nbsp;<span id="i5"></span></td>
</tr>
<tr>
<td><input colspan="2" type="submit" value="Register"></td></tr>
</table>

    </form>
    </div>    </body>
</html>

