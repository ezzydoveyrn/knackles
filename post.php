<form action="welcome.php" method="post" enctype="multipart/form-data">
  <input type="file" name="file">
  <textarea name="note"></textarea>
  <input type="submit" name="post" value="POST">
  <?php
    if(isset($_POST["post"])){
      $file = $_FILES['file'];

      $fileName = $_FILES['file']['name'];
      $fileTmpName = $_FILES['file']['tmp_name'];
      $fileSize = $_FILES['file']['size'];
      $fileError = $_FILES['file']['error'];
      $fileType = $_FILES['file']['type'];


      $fileExt = explode('.', $fileName); //extention
      $fileActualExt = strtolower(end($fileExt));

      $allowed = array('jpg', 'jpeg', 'png', 'pdf');

      if (in_array($fileActualExt, $allowed)) {
       if($fileError === 0){
        if($fileSize < 500000){
          $fileNameNew = uniqid('', true).".".$fileActualExt;
          $fileDestination = 'uploads/'.$fileNameNew;

          move_uploaded_file($fileTmpName, $fileDestination);

          header("Location: welcome.php?uploadsuccess");

        }
        else{
          echo"your file is too big";
        }

       }
       else{
        echo"there was an error";
       }
      }
      else{
        echo"can't be uploaded check file type";
      }








      $note = filter_input(INPUT_POST, "note", FILTER_SANITIZE_SPECIAL_CHARS);

      $sql = "INSERT INTO posts (image, author, note) VALUES ('$fileNameNew', '$author', '$note')";
      mysqli_query($conn, $sql);
    }
  ?>
</form>
<?php
  if($author){
    $sql = "SELECT * FROM posts WHERE author ='$author'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["image"];
      }
    }
  }
?>
