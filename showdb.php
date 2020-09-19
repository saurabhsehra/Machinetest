<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lifestyle_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT  first_name, last_name,DoB,phone,gender,hobbies FROM users_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  "  Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
    echo "DoB: ".$row["DoB"] ."<br>";
    echo "phone: ".$row["phone"]."<br>";
    echo "gender: " .$row["gender"]."<br>";
    echo "hobbies: ".$row["hobbies"]."<br>"; 
  }
} else {
  echo "0 results";
}
$conn->close();
?>