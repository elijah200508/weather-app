<?php

include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName= $_POST['firstName'];
    $lastName= $_POST['lastName'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $password= md5($password);
    
    $checkEmail= "SELECT * FROM signup WHERE email= '$email'";
    $result= $conn->query($checkEmail);
    if($result->num_rows > 0){
        $exists= "⚠️&nbsp;&nbsp;Email already exists! Try another email.."; 
    }
    else{
        $insertQuery="INSERT INTO signup(fName,lName,email,password)
                       VALUES ('$firstName','$lastName','$email','$password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: login.php");
                exit();
            }
            else{
                echo "Error:".$conn->error;
            }
     }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Page</title>
  <link rel="stylesheet" href="signup.css">
</head>
<body>
  <div class="signup-container">
    <h2>Sign Up</h2>
    <?php if (!empty($exists)) : ?>
          <p style="color: red; background-color: #fff; font-weight: 800; border-radius: 2px; font-size: 12px;
           box-shadow: 0 0 2px black; padding: 18px; border-radius: 15px;transition: all 0.3s ease-in-out;">
           <?php echo $exists; ?></p>
      <?php endif; ?>
    <form action="#" method="POST">
      <input type="text" name="firstName" placeholder="First Name" required>
      <input type="text" name="lastName" placeholder="Last Name" required>
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="password" name="password" placeholder="Password" required><br><br>
      <button type="submit" name="signUp">Create Account</button>
    </form>
  </div>
</body>
</html>
