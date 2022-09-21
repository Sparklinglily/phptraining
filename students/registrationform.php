<?php
$nameErr=$emailErr = $genderErr = $commentErr = $websiteErr= "";
$name=$email = $gender = $comment = $website= "";

function test_input($data){
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);

  return $data;

}
if ($_SERVER["REQUEST_METHOD"]=="POST") {
  if (empty(test_input($_POST["name"]))) {
  $nameErr= "Name field is required";

}else{
  $name= test_input($_POST["name"]);
}
if(empty(test_input($_POST["email"]))){
  $emailErr= "Email field is required";

}else{
  $email= test_input($_POST["email"]);
}
if(empty(test_input($_POST["comment"]))){
  $commentErr= "comment field is required";

}else{
  $comment= test_input($_POST["comment"]);
}

if(empty(test_input($_POST["gender"]))){
  $genderErr= "Gender field is required";

}else{
  $gender= test_input($_POST["gender"]);
}
if(empty(test_input($_POST["website"]))){
  $websiteErr= "website field is required";

}else{
  $website= test_input($_POST["website"]);
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    .error{
      color:red;

    }
  </style>
 
  <title>Document</title>
</head>
<body>

  <form  method="POST"  action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" >
  <span class= "error">  <?php echo $nameErr?> *</br> </span>
    <label> Name</label>: <input type="text" name="name" id = "" value = "<?php echo $name?>"><br/>
<span class= "error">  <?php echo $emailErr?> *</br>  </span>
    <label>Email</label>: <input name="email"  id = "" value = "<?php echo $email?>"> <br/>
    <span class= "error">  <?php echo $genderErr?> *</br> </span>
    <label> gender</label>: <select type="text" name="gender" id = "">
      <option value="">male</option>
      <option value="">female</option>
    </select> <br/>
    <span class= "error">  <?php echo $commentErr?> *</br>  </span>
  
    <label>Comment</label>: <textarea name ="comment"  id = ""> </textarea><br/>

    <span class= "error">  <?php echo $websiteErr?> *</br>  </span>
    <label>Website</label>: <input name="website"  id = ""  > <br/>
  
    <input type="submit"  value= "Submit">

    
  
</body>
</html>

