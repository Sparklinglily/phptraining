<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <form  method="POST"  action= "login_process.php" >
  <label> Username</label>: <input type="text" name="username" id = "" placeholder= "Enter your username"><br/><br/>

  <label> Password</label>: <input name="pw"  id = "" type= "password" > <br/>
  <label> User Type</label>: 
  <select name = "role_type_id" >

  <option value="<?php echo 1?>">Admin</option>
  <option value="<?php echo 2?>">Students</option>
  <option value="<?php echo 3?>">Registry</option>
  <option value="<?php echo 4?>">Bursary</option>
  <option value=""> Others </option>

</select><br/>
 <input type="submit"  value= "Login">

  </form>
  
</body>
</html>