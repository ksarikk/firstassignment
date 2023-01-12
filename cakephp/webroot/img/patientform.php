<?php
if($_FILES["file"]["type"]!= "image/png") {
    echo "Sorry, only PNG files are allowed.";
    $uploadOk = 0;
  }
  $filename = $_POST['name'] . $imageFileType;
  if ($_FILES["file"]["size"] > 5000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
  }
  
  if($uploadOk == 1){
      if(move_uploaded_file($_FILES["file"]['tmp_name'],$target.$filename))
      {
          echo "file uploaded";
      }
      else
      {
          echo "error";
      }
  }
?>  