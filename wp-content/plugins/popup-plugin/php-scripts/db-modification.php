<?php

// the code for creating a connection with the database
  $servername = "dileks-air";  
  $username = "root";  
  $password = "root";
  $table = "form_data";
  $connection = mysqli_connect ($servername , $username , $password, $table) or die("unable to connect to host");  
  // $sql = mysqli_select_db ('test', $connection) or die("unable to connect to database"); 

  $name =  $_REQUEST['name_col'];
  $phone =  $_REQUEST['phone_col'];
  $email =  $_REQUEST['email_col'];

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "INSERT INTO contacts (name_col, phone_col, email_col) VALUES ('$name', '$phone', '$email')";
    if(mysqli_query($connection, $sql)) {
      echo "Success";
    } else {
    echo "Error of querie " . $sql . "<br>" . mysqli_error($connection);
    }
  }

  // $sql = "INSERT INTO contacts (name_col, phone_col, email_col) VALUES ('$name', '$phone', '$email')";

  // if ($connection == false){
  //   print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
  // }
  // else {
  //   print("Соединение установлено успешно");
  //   mysqli_query($connection, $sql);
  // }

  // if(mysqli_query($connection, $sql)) {
  //   echo "Success";
  // } else {
  //   echo "Error of querie " . $sql . "<br>" . mysqli_error($connection);
  // }
//fetching data from the fields
  // $first_name =  $_REQUEST['first_name'];
  // $last_name = $_REQUEST['last_name'];
  // $phone = $_REQUEST['phone'];
  // $email = $_REQUEST['email'];

  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        // $conn = mysqli_connect("localhost", "root", "", "staff");
          
        // Check connection
        // if($conn === false){
        //     die("ERROR: Could not connect. " 
        //         . mysqli_connect_error());
        // }
          
        // Taking all 5 values from the form data(input)
        // $first_name =  $_REQUEST['first_name'];
        // $last_name = $_REQUEST['last_name'];
        // $gender =  $_REQUEST['gender'];
        // $address = $_REQUEST['address'];
        // $email = $_REQUEST['email'];
          
        // Performing insert query execution
        // here our table name is college

        // $sql = "INSERT INTO contacts (id_col, name_col, phone_col, email_col) VALUES (1, $name, $phone, $email)";
        // $sql = "INSERT INTO contacts (id_col, name_col) VALUES (1, $name)";
        // $sql = "INSERT INTO contacts VALUES ($name)";



        // $sql = "INSERT INTO contacts (Id, Name, Phone, Email) VALUES (7, $name, $phone, $email)";

           // INSERT INTO dataTable (date, supplierName, warehouseInfo, productInfo, quantityInfo, sumInfo) VALUES (?,?,?,?,?,?)

  // mysqli_query($connection, $sql);
          
        mysqli_close($connection);
        // print('test_finish');
          
        ?>
