<?php 
// Connect to database
$servername = "sql311.epizy.com";
$username = "epiz_33999353";
$password = "H4MAJzdD7n78jB";
$dbname = "epiz_33999353_letsbowl";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert form data into database
$email = $_POST['email'];
$userpass = $_POST['userpass'];

$sql = "SELECT * FROM users WHERE email = 'email' AND userpass = 'userpass';";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  $profile = $sql;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("Location: ./index.html");
?>
