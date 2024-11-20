<?php
  include("includes/general/other/meta.php");
?>
<body>
  <header>
    <div class="sec1">
      <div class="img">
        <img src="images/logos/Logo.png" alt="Logo">
      </div>
      <div class="title">
        KNACKLES
      </div>
      <div class="images">
        <img src="images/generalicons/settings.svg" alt="" onclick="openSettings()">
      </div>
    </div>
    <div class="userSettings">
      <button onclick="closeSettings()" class="closeSett">X</button>
      <div class="profile"></div>
      <div class="infoMat">
        <a href="#">edit profile</a>
        <form action="welcome.php" method="post">
          <input type="submit" name="logout" value="Logout">
          <?php
            if(isset($_POST["logout"])){
              include_once("includes/general/other/lod.php");
              echo"
              <script>
                alert('successfully logged out');
                window.location ='index.php';
              </script>";
            }
          ?>
        </form>
      </div>
    </div>
  </header>
  <main>