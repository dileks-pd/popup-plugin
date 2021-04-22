<?php

if (inset($_POST['name_col'])&&$_POST['phone_col']&&$_POST['email_col']){
// the code for creating a connection with the database
  $servername = "dileks-air";  
  $username = "root";  
  $password = "root";
  $base = "form_data"; //база
  $db_table = "contacts";
  $connection = mysqli_connect ($servername , $username , $password, $base) or die("unable to connect to host");  
  // $sql = mysqli_select_db ('test', $connection) or die("unable to connect to database"); 

  $name =  $_POST['name_col'];
  $phone = $_POST['phone_col'];
  $email = $_POST['email_col'];


$data = array( 'name' => $name, 'phone' => $phone, 'email' => $email); 
        // Подготавливаем SQL-запрос
        $query = $db->prepare("INSERT INTO $db_table (name, phone, email) values (:name, :phone, :email)");
        // Выполняем запрос с данными
        $query->execute($data);


 // $sql = "INSERT INTO contacts (name, phone, email) VALUES ('$name', '$phone', '$email')";

  if(mysqli_query($connection, $sql)) {
    echo "Success";
  } else {
    echo "Error of querie " . $sql . "<br>" . mysqli_error($connection);
  }
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
          }
        ?>
