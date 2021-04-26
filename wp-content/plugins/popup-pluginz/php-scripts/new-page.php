<?php 

//правильное подключение тут
  $servername = "dileks-air";  
  $username = "root";  
  $password = "root";
  $table = "form_data";
  // $mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");
  $connection = mysqli_connect ($servername , $username , $password, $table) or die("unable to connect to host");

//правильный запрос тут. 
  $result = mysqli_query($connection, "SELECT * FROM contacts");
  // $sql = "SELECT * FROM contacts (name_col, phone_col, email_col) VALUES ('$name', '$phone', '$email')";
  // $sql = "SELECT * FROM contacts";
  $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

  //var_dump($data);
  foreach ($data as $val) {
  printf("ID: %d | \t Name: %s | \t Phone: %s | \t Email: %s", $val['id_col'], $val['name_col'], $val['phone_col'], $val['email_col'] . "<br>");
}
?>