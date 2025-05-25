<?php
include 'connect.php';

    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $password=md5($password) ;
        
        $sql="SELECT * FROM signup WHERE email='$email' and password='$password'";
        $result=$conn->query($sql);
        if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("Location: index.php");
        exit();
        }
        else{
            $fail= " ❌&nbsp; Incorrect Email or Password";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Clothing Store</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <h2>Login! Let's Go Shopping</h2>
            <?php if (!empty($fail)) : ?>
                <p style="color: red; background-color: #fff; font-weight: 800; border-radius: 2px; font-size: 12px;
                box-shadow: 0 0 2px black; padding: 18px; border-radius: 15px;transition: all 0.3s ease-in-out;
                margin-bottom: 9px;">
                <?php echo $fail; ?></p>
            <?php endif; ?>
            <form action="#" method="POST">
                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required placeholder="Enter your email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Enter your password" required>
                </div>
                <button type="submit" class="login-btn" name="login">Login</button>
                <div class="forgot-password">
                    <a href="#">Forgot Password?</a>
                </div>
            </form>
            <div class="signup-link">
                <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
            </div>
        </div>
    </div>
</body>
</html>
