    <?php
      session_start();
      require_once("configuration/config.php");
    ?>
    
    <form action="index.php" method="post">
      <label for="email">Email</label>
      <input type="text" name="email" id="email" placeholder="Your Email ">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" placeholder="Input your Password ">

      <input type="submit" name="login" value="Login" id="button">
      <p>--------------- OR ---------------</p>
      <p>Not a Member? <a href="home.php">Sign UP</a></p>
      <div style="width: 100%; text-align: center; border: 3px solid red; border-radius: 10px; font-size: 16px;">
        <?php
        include_once("user/lg.php");

        mysqli_close($conn);
        ?>
    </form>