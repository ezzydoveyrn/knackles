    <?php
      require_once("configuration/config.php");
    ?>
    
    <form action="home.php" method="post" enctype="multipart/form-data">
      <label for="fname">First name</label>
      <input required type="text" name="fname" id="fname" placeholder="Your First name ">
      <label for="lname">Last name</label>
      <input required type="text" name="lname" id="lname" placeholder="Your Last name ">
      <label for="email">Email</label>
      <input required type="text" name="email" id="email" placeholder="Your Email ">
      <label for="password">Password</label>
      <input required type="password" name="password" id="password" placeholder="input your Password ">
      <label for="pnumber">Phone </label>
      <input required type="number" name="pnumber" id="pnumber" placeholder="Your Phone number">


      <input required type="submit" name="signup" value="Sign UP" id="button">
      <p>--------------- OR ---------------</p>
      <p>Already a member? <a href="index.php">Sign IN</a></p>

      <div style="width: 100%; text-align: center; border: 3px solid red; border-radius: 10px; font-size: 16px;">
        <?php
        include_once("user/signup.php");

        mysqli_close($conn);
        ?>
      </div>
    </form>
    