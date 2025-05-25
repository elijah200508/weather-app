<?php

include 'connect.php';

if(isset($_POST['send'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $telephone= $_POST['telephone'];
    $message= $_POST['message'];
    

    $insertQuery="INSERT INTO contactus(name,email,telephone,message)
                    VALUES ('$name','$email','$telephone','$message')";
        if($conn->query($insertQuery)==TRUE){
          $success = "✅&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Your message has been sent. You will be contacted shortly. THANK YOU!";   
        }
        else{
            echo "There was an error::".$conn->error;
        }

     }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Contact Us</title>
  <link rel="stylesheet" href="contact.css">
</head>
<body>
<header>

<div class="logo"><h1>Dept.<sub>Clothes</sub></h1></div>
<nav>
<ul>
  <li><a href="index.php"  >Home</a></li>
  <li class="drop-products">
    <a href="#"> </i> Shop </a><!--for the products where it has a dropdown as follows-->
    <div class="drop">
    <div class="dropdown">
    <ul>
      <li><a href="men.html">Men</a></li>
      <li><a href="women.html">Women</a></li>
      <li><a href="accessroies.html">Accessories</a></li>
    </ul>
  </li>
  <li><a href="about.html">About</a></li>
  <li class="active"><a href="contact.php">Contact</a></li>
</ul>

<div style="display: flex; justify-content: space-evenly; gap: 30px;transition: all 0.5s ease; " class="emoji" class="icons"></div>
<ul>
<li class="user">
<i class="fa-solid fa-user-tie"></i>
<div class="drop2">
<div class="dropdown2">
<ul>
<li>
          <?php 
            if(isset($_SESSION['email'])){
              $email=$_SESSION['email'];
              $query=mysqli_query($conn, "SELECT signup.* FROM `signup` WHERE signup.email='$email'");
              while($row=mysqli_fetch_array($query)){
                  echo $row['fName'];
              }
            }
          ?>&nbsp;&nbsp;
          <i class="fa-solid fa-door-open"></i>
        </li>
  <div id="logout"><li> Logout &nbsp;&nbsp;<a href="login.php"><i class="fa-solid fa-right-from-bracket"></i></a></li></div>
</ul>
</li>
<li><i class="fa-solid fa-cart-shopping"></i></li>
<li><a href="help.html"><i class="fa-solid fa-question"></i></a></li>
</ul>
</div>


<div class="more"> <a href="#light_show"><i class="fa-solid fa-bars"></i></a></div>
      <div class="whole_light">
           <div class="lightbox" id="light_show">
        <a href="#" class="close" style="color: white;">CLOSE</a>
        <div class="lightbox_content">
          <a href="index.html">Home</a><hr><br>
          <a href="MenCloth.html">Men</a><hr><br>
          <a href="Women.html">Women</a><hr><br>
          <a href="Accessroies.html">Accessories</a><hr>
          <br><br>
          <a href="">Cart</a><hr><br>
          <a href="">help</a>
        </div>
      </div>
</nav>
</header>


  <main>
    <section class="contact">
      <h1>Get in Touch</h1>
      <p>We'd love to hear from you! Please fill out the form below to contact us.</p>
      <?php if (!empty($success)) : ?>
          <p style="color: green; background-color: #fff; font-weight: 800; border-radius: 2px;
           box-shadow: 0 0 2px black; padding: 18px; border-radius: 25px;transition: all 0.3s ease-in-out;">
           <?php echo $success; ?></p>
      <?php endif; ?>
      </div>
      <form method="POST" action="contact.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="  John"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="  example@gmail.com"><br><br>
        <label for="telephone">Telephone:</label>
        <input type="text" id="telephone" name="telephone"><br><br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" placeholder="  Type your requests here....."></textarea><br><br>
        <input type="submit" value="Send" name="send" id="send">
      </form>
      <div class="contact-info">
        <h2>Contact Information</h2>
        <p>Phone: 024-993-8018</p>
        <p>Email: [info@deptcloths.com](mailto:info@dept.cloths.com)</p>
        <p>Address: 2457/45 Accra Sakumono</p>
      </div>
    </section>
  </main>
  <footer>
    <p>&copy; 2025 Dept.<sub>Clothes</sub> Store</p>
  </footer>
  
</body>
</html>