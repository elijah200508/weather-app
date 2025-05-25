<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clothes </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.lordicon.com/lordicon.js"></script>

  <link rel="stylesheet" href="index.css">
</head>
<body >

  <header>

      <div class="logo"><h1>Dept.<sub>Clothes</sub></h1></div>
      <nav>
      <ul>
        <li class="active"><a href="#"  >Home</a></li>
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
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
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
        <div id="logout">
        <li><a href="login.php">Logout &nbsp;&nbsp;<i class="fa-solid fa-right-from-bracket"></i></a></li>
        </div>
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
<!---->
  <div class="intro">

    <div>
      <h1>Cloth for the Clothless</h1>
    </div>
    <button>Shop Now</button>

  </div>

  <div class="second_intro">
    <div class="first"><h2>Welcome to Dept Clothes where style meets substance.</h2>
      <p> Discover thoughtfully curated collections designed to inspire confidence, celebrate individuality, and keep you 
        effortlessly stylish for every occasion. Whether you're chasing everyday comfort or standout pieces that turn heads, we’ve got 
        you covered. Step into your new favorite wardrobe fashion-forward, timeless, and unapologetically you.</p>

        <div class="button"><button class="firstB"><a href="about.html">Who we are</a></button> <button class="secondB"><a href="contact.html">Connect with Us</a></button></div>
        
    </div>
    <div class="second">

    </div>
  </div>
  
  <!--Aside starts-->
  <aside>    
<div class="container">
  <div class="card">
    <img src="images/shirtshoe.jpg" alt="Product 1">
    <h2>Kicks & Tees</h2>
    <p class="price">$19.99</p>
    <button class="cart_button">Add &nbsp;<i class="fa-solid fa-cart-plus"></i></button>
  </div>
  <div class="card">
    <img src="images/ladywear.jpg" alt="Product 2">
    <h2>Heeluxe</h2>
    <p class="price">$29.99</p>
    <button class="cart_button">Add &nbsp;<i class="fa-solid fa-cart-plus"></i></button>
  </div>
  <div class="card">
    <img src="images/shitrlines.jpg" alt="Product 3">
    <h2>Pairfect Fit</h2>
    <p class="price">$39.99</p>
    <button class="cart_button">Add &nbsp;<i class="fa-solid fa-cart-plus"></i></button>
  </div>
  <div class="card">
    <img src="images/hangs.jpg" alt="Product 4">
    <h2>Step Chic</h2>
    <p class="price">$49.99</p>
    <button class="cart_button">Add &nbsp;<i class="fa-solid fa-cart-plus"></i></button>
  </div>
  <div class="card">
    <img src="images/shirtshoe.jpg" alt="Product 1">
    <h2>Kicks & Tees</h2>
    <p class="price">$19.99</p>
    <button class="cart_button">Add &nbsp;<i class="fa-solid fa-cart-plus"></i></button>
  </div>
  <div class="card">
    <img src="images/ladywear.jpg" alt="Product 2">
    <h2>Heeluxe</h2>
    <p class="price">$29.99</p>
    <button class="cart_button">Add &nbsp;<i class="fa-solid fa-cart-plus"></i></button>
  </div>
  <div class="card">
    <img src="images/shitrlines.jpg" alt="Product 3">
    <h2>Pairfect Fit</h2>
    <p class="price">$39.99</p>
    <button class="cart_button">Add &nbsp;<i class="fa-solid fa-cart-plus"></i></button>
  </div>
  <div class="card">
    <img src="images/hangs.jpg" alt="Product 4">
    <h2>Step Chic</h2>
    <p class="price">$49.99</p>
    <button class="cart_button">Add &nbsp;<i class="fa-solid fa-cart-plus"></i></button>
  </div>
</div>
<br>

<article class="onEverything">
  <div class="first"> <p><span>10% OFF </span> <br> ON NEW ARRIVALS</p></div>
  <div class="second"><p>USE CODE : GGKD6719</p><br> <button>Shop Now</button></div>
 </article>

<br><br><br><br>

<!--Catergories-->

<!-- <h1 style="margin-left: 28px;">Categories</h1> -->
<div class="categories">
  <div class="card1">
    <img src="images/men.jpg" alt="Product 1">
    <h2>Men</h2>
  </div>
  <div class="card1">
    <img src="images/yellow.jpg" alt="Product 2">
    <h2>Women</h2>
  </div>
  <div class="card1">
    <img src="images/whitehangs.jpg" alt="Product 3">
    <h2>Accessories</h2>
  </div>

</div>

<br><br>

<!---->
<div class="help-container">
 
</div>
  </aside>
  <!--Aside ends there-->
  <article class="features">
    <div class="feature">
      <lord-icon
    src="https://cdn.lordicon.com/byupthur.json"
    trigger="hover"
    stroke="bold"
    style="width:150px;height:80px">
</lord-icon>
      <h2>Fast Delivery Worldwide</h2>
      <div class="cont">
        <p class="popup">At Dept <sub>Clothes</sub>  we understand the excitement of receiving your order promptly. That's why we offer fast and reliable shipping to ensure your products arrive quickly and in perfect condition. With streamlined processes and trusted delivery partners, you can track your order 
          every step of the way. Our commitment is to get your items to you efficiently, so you can start enjoying them without delay.</p></div>
      
    </div>
    <div class="feature">
      <lord-icon
    src="https://cdn.lordicon.com/ggirntso.json"
    trigger="hover"
    stroke="bold"
    style="width:150px;height:80px">
</lord-icon>
      <h2>Easy Shopping and Checkout</h2>
      <div class="cont">
        <p class="popup">At Dept <sub>Clothes</sub> we are dedicated to providing exceptional services that cater to your needs. Our team is here to assist you with personalized support, expert advice, and prompt solutions. Whether you need help with product selection, have questions about your order, or require any post-purchase assistance, we're just a call or click away. We strive to ensure a seamless 
         and satisfying experience from start to finish, making sure you receive the best care and attention every step of the way.</p></div>
      
    </div>
    <div class="feature">
      <lord-icon
    src="https://cdn.lordicon.com/anwjdbhf.json"
    trigger="hover"
    stroke="bold"
    style="width:150px;height:80px">
</lord-icon>
      <h2>Delivery within 2 Days with Accra</h2>

      <div class="cont">
        <p class="popup">At Dept <sub>Clothes</sub>  we believe that top-notch quality shouldn’t come with a hefty price tag. That’s why we offer a wide range of products at affordable prices, ensuring that you get exceptional value without compromising on quality. Our competitive pricing is 
          'designed to make premium products accessible to everyone, so you can enjoy the best without stretching your budget.</p></div>
    </div>
  </article>

  <!--footer section-->
  <footer>
    <div class="mensoles">
      <h2>Dept. <sub>Clothes</sub></h2>
      <div class="social">
        <i class="fa-brands fa-facebook" style="color: blue;"></i><br>
        <i class="fa-brands fa-instagram" style="color: rgb(226, 52, 226);"></i><br>
        <i class="fa-brands fa-x-twitter" style="color: rgb(11, 11, 45);"></i><br>
        <i class="fa-brands fa-square-youtube" style="color: red;"></i><br>
        <i class="fa-brands fa-tiktok" style="color: navy; text-shadow: 2px 4px black;"></i><br>
      </div>
        <br><p style="font-weight: bolder;">@dept_clothes_officialgh on all socials</p>
    </div>

    <div class="categories1">
  <h3>Categories</h3> <br><br>
  <p>Men Clothing</p>  <br>
  <p>Women Clothing</p>  <br>
  <p>Kid's Clothing</p>  <br>
  
    </div>

    <div class="resources">
      <h3>Resources</h3> <br><br>
      <p>About Us</p><br>
      <p>Contact</p> <br>
      <p>Help</p>
    </div>

    <div class="subscribe">
      <h1>Subscribe</h1>
      <input type="email" placeholder="E-mail"> <br><br>
      <button>SEND</button>
    </div>
   </footer>


 

</body>
</html>

