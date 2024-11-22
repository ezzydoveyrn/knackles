<?php
  session_start();
  require_once("configuration/config.php");
?>
<?php
  require_once("class/headerHome.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>user logged in</title>
</head>
<body>
  <!-----------------------------Session Section-------------------------------------->
  <?php
    $email = $_SESSION["email"];
    
    $sql = "SELECT * FROM users WHERE  email = '$email'";

      $result =  mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $author = $row["name"]; 
      }
  ?>
  <!----------------------------------- POSTS SECTION ---------------------------------->


  <?php
    echo"
      <h1>Welcome to knackles</h1>
    ";
    require_once("post.php");
  ?>

  <?php
    require_once("includes/general/other/footer.php");
  ?>
</body>
</html>
<?php
  mysqli_close($conn);
?>
