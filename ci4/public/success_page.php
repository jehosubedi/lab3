<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Add your processing logic here, such as sending an email or storing in a database
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

$sql = "INSERT INTO MyGuests (fullName, email, phone, message)
VALUES ($fullName, $email, $phone, $message)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="Logo.png"/>
    <title>Success</title>
    <link rel="stylesheet" href="css/success.css">
    <script
      src="https://kit.fontawesome.com/6ca42555ea.js"
      crossorigin="anonymous"></script>
    <!--CSS FILES-->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/skins/color-1.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
</head>
<body>
    <!-- Cursor -->
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <!-- Add the modal dialog -->
    <div id="myModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h1>Form Successfully Submitted!</h1>
        </div>
        <div class="modal-body">
            <p>Thank you for submitting the form. We appreciate your response.</p>
        </div>
        <div class="modal-footer">
            <button class="btn" onclick="goBack()">Go Back</button>
        </div>
    </div>
    </div>

    <script>
        function goBack() {
            // Navigate back to the home page
            window.location.href = "index.php";
        }
        // Show the modal dialog when the page loads
        window.addEventListener("load", function() {
            document.getElementById("myModal").style.display = "block";
        });
    </script>
    <script src="js/cursor.js"></script>
</body>
</html>