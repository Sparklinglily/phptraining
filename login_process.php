<?php

session_start();
     echo $username = $_POST['username'];
     $_SESSION["USERNAME"]=$username;
      echo $pw = $_POST['pw'];
      echo $role_type_id = $_POST['role_type_id'];


      switch($role_type_id) 
      {
              case 1:
                header("Location:admin/admin_dashboard.php");
                break;
              case 2:
                header("Location:students/students_dashboard.php");
                break;
              case 3:
                header("Location:registry/registry_dashboard.php");
                break;
              case 4:
                header("Location:bursary/bursary_dashboard.php");
                break;
                default:
                echo "you do not hav an account with us";
      


              }

 ?>