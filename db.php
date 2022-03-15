<?php
    

// $servername = "http://127.0.0.1";
// $database = "MySQL";
// $username = "MeshDi";
// $password = "M07072020eshDi*";


if(isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["email"]) && isset($_POST["tel"])){
  
  $u_name = $_POST["name"];
  $u_surname = $_POST["surname"];
  $u_email = $_POST["email"];
  $u_tel = $_POST["tel"];


  define('DB_HOST', "127.0.0.1:3306");
  define('DB_USER', "MeshDi");
  define('DB_PASSWORD', "madi");
  define('DB_NAME',"ajax_test");

  $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  if ($conn->connect_error) {
    die('Ошибка : ('. $conn->connect_errno .') '. $conn->connect_error);
  }
  mysqli_set_charset($conn, "utf8");

  $sql = "INSERT INTO user_info VALUES(null,'$u_name','$u_surname','$u_email','$u_tel')";
  $result = mysqli_query($conn,$sql);
  // var_dump($result);
  
  // if ($result == true){
  //   echo "Информация занесена в базу данных";
  // }
  // else{
  //   echo "Информация не занесена в базу данных";
  //   echo mysqli_error($conn);
  // } 
  return $result;
  mysqli_close($conn);
  
}
  
  
?>