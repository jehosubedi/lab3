<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Add your processing logic here, such as sending an email or storing in a database

    // For demonstration purposes, let's just print the data
    echo "Full Name: $fullName<br>";
    echo "Email: $email<br>";
    echo "Contact No: $phone<br>";
    echo "Message: $message<br>";
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (`fullName`, `email`, `phone`, `message`)
VALUES ('$fullName', '$email', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>