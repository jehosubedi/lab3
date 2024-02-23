<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="style-php.css">
</head>
<body>  

<?php
// PHP validation code goes here
$name = $email = $website = $comment = $gender = "";
$nameErr = $emailErr = $websiteErr = $genderErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // Additional validation rules for name can be added here
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // Additional validation rules for email can be added here
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // Additional validation rules for website can be added here
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
    // Additional validation rules for comment can be added here
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
    // Additional validation rules for gender can be added here
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="container">
  <h2>PHP Form Validation Example</h2>
  <p><span class="error">* required field</span></p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    <label for="email">E-mail:</label>
    <input type="text" name="email" id="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    <label for="website">Website:</label>
    <input type="text" name="website" id="website" value="<?php echo $website;?>">
    <span class="error"><?php echo $websiteErr;?></span>
    <br><br>
    <label for="comment">Comment:</label>
    <textarea name="comment" id="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
    <br><br>
    <label for="gender">Gender:</label>
    <input type="radio" name="gender" id="female" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">
    <label for="female">Female</label>
    <input type="radio" name="gender" id="male" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">
    <label for="male">Male</label>
    <input type="radio" name="gender" id="other" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">
    <label for="other">Other</label>
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">  
  </form>
</div>

<?php
// Displaying user input goes here
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "<div class='container'>";
  echo "<h2>User Input:</h2>";
  echo "<p class='success'>Form submitted successfully!</p>";
  echo "<p><strong>Name:</strong> " . $name . "</p>";
  echo "<p><strong>Email:</strong> " . $email . "</p>";
  echo "<p><strong>Website:</strong> " . $website . "</p>";
  echo "<p><strong>Comment:</strong> " . $comment . "</p>";
  echo "<p><strong>Gender:</strong> " . $gender . "</p>";
  echo "</div>";
}
?>

</body>
</html>
