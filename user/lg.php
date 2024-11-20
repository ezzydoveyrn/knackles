<?php
if(isset($_POST["login"])){
  $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
  $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

  if(empty($email)){
    echo"Email field is empty";
  }
  elseif(empty($password)){
    echo"Password field is empty";
  }
  else{
    try{
      $sql = "SELECT * FROM users WHERE  email = '$email'";

      $result =  mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        if($row["password"] === $password){
          $_SESSION["email"] = "$email";
          echo"
          <script>
            alert('logged in successfully');
            window.location ='welcome.php';
          </script>
          "; 
        }
        else{
          echo"your password don't match";
        }
      }
      else{
        echo"user not found";
      }
    }
    catch(mysqli_sql_exception){
      echo"user exists";
    }
  }
}
?>