<?php

  $servername = "dileks-air";  
  $username = "root";  
  $password = "root";
  $table = "form_data";
  $connection = mysqli_connect ($servername , $username , $password, $table) or die("unable to connect to host");  

  $name =  $_REQUEST['name_col'];
  $phone =  $_REQUEST['phone_col'];
  $email =  $_REQUEST['email_col'];

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($name) && isset($phone) && isset($email)) {
      $sql = "INSERT INTO contacts (name_col, phone_col, email_col) VALUES ('$name', '$phone', '$email')";
      if(mysqli_query($connection, $sql)) {
        echo "Success";
      } else {
        echo "Error of querie " . $sql . "<br>" . mysqli_error($connection);
      }
    }
  }
  mysqli_close($connection);
?>
