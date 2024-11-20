<?php
if(isset($_POST["signup"])){
  $fname = filter_input(INPUT_POST, "fname", FILTER_SANITIZE_SPECIAL_CHARS);
  $lname = filter_input(INPUT_POST, "lname", FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
  $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
  $phone = filter_input(INPUT_POST, "pnumber", FILTER_SANITIZE_SPECIAL_CHARS);

  if(empty($fname)){
    echo"First name field is empty";
  }
  elseif(empty($lname)){
    echo"Last name field is empty";
  }
  elseif(empty($email)){
    echo"Email field is empty";
  }
  elseif(empty($password)){
    echo"Password field is empty";
  }
  elseif(empty($phone)){
    echo"Phone field is empty";
  }
  else{
    $fullname = "{$fname} {$lname}";
    try{
      $sql = "INSERT INTO users (name, email, password, phone) VALUES ('$fullname', '$email', '$password', '$phone')";

      mysqli_query($conn, $sql);

      echo"<script>window.location ='index.php';</script>";
    }
    catch(mysqli_sql_exception){
      echo"user exists";
    }
  }
}
?>