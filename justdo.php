<?php
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])){
      $nameErr = "the name is required";
  } else {
  $name = test_input($_POST["name"]);
  if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed";
}
  }

  if (empty($_POST["email"])){
      $emailErr = "the email is required";
  } else {
  $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
  }

  if (empty($_POST["gender"])){
      $genderErr = "the gender is required";
  } else {
  $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["comment"])){
      $commentErr = "the comment is required";
  } else {
  $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["website"])){
      $websiteErr = "the website is required";
  } else {
  $website = test_input($_POST["website"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Simple Form</h2>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  Name: <input type="text" name="name"><br>
        <span style="color:blue;"><?php echo $nameErr; ?></span><br>
  Email: <input type="text" name="email"><br>
        <span style="color:blue;"><?php echo $emailErr; ?></span><br>
  Website: <input type="text" name="website"><br>
         <span style="color:blue;"><?php echo $websiteErr; ?></span><br>
  Comment: <textarea name="comment"></textarea><br>
         <span style="color:blue;"><?php echo $websiteErr; ?></span><br>
  
  Gender:
  <input type="radio" name="gender" value="Male">Male
  <input type="radio" name="gender" value="Female">Female<br>
       <span style="color:blue;"><?php echo $genderErr; ?></span><br>
        
  
  <input type="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";
echo "Website: " . $website . "<br>";
echo "Comment: " . $comment . "<br>";
echo "Gender: " . $gender . "<br>";
?>

</body>
</html>