<?php 

//правильное подключение тут
  $servername = "dileks-air";  
  $username = "root";  
  $password = "root";
  $table = "form_data";
  // $mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");
  $connection = mysqli_connect ($servername , $username , $password, $table) or die("unable to connect to host");

//правильный запрос тут. 
// $result = mysqli_query($mysqli, "SELECT * FROM //название таблицы тут");
  // $sql = "SELECT * FROM contacts (name_col, phone_col, email_col) VALUES ('$name', '$phone', '$email')";
  $sql = "SELECT * FROM contacts";
  $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

  var_dump($data);