<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="accessories.css">
  <title>Accessories</title>
</head>
<body>

  
  <header>

    <div class="logo"><h1>Dept.<sub>Clothes</sub></h1></div>
    <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li class="drop-products">
        <a href="#" class="active"> </i> Shop </a><!--for the products where it has a dropdown as follows-->
        <div class="drop">
        <div class="dropdown">
        <ul>
          <li><a href="men.html">Men</a></li>
          <li><a href="women.html">Women</a></li>
          <li><a href="accessroies.html">Accessories</a></li>
        </ul>
      </li>
      <li><a href="about.html">About</a></li>
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
    <section class="men-products">
      <h1>Accessories</h1>
      <div class="product-grid">
        <div class="product">
          <img src="images/Blue&Bag.jpg" alt="Product 1">
          <h2>Product 1</h2>
          <p>Price: $50</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product">
          <img src="images/BlackHeadset.jpg" alt="Product 2">
          <h2>Product 2</h2>
          <p>Price: $70</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product">
          <img src="images/Cap.jpg" alt="Product 3">
          <h2>Product 3</h2>
          <p>Price: $90</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>

        
        <div class="product">
          <img src="images/ColorfulWatch.jpg" alt="Product 3">
          <h2>Product 3</h2>
          <p>Price: $90</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>

        
        <div class="product">
          <img src="images/EarRings.jpg" alt="Product 3">
          <h2>Product 3</h2>
          <p>Price: $90</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>

        
        <div class="product">
          <img src="images/Fullset&Glass.jpg" alt="Product 3">
          <h2>Product 3</h2>
          <p>Price: $90</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>

        
        <div class="product">
          <img src="images/FullSet.jpg" alt="Product 3">
          <h2>Product 3</h2>
          <p>Price: $90</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>

        
        <div class="product">
          <img src="images/GoldWatch.jpg" alt="Product 3">
          <h2>Product 3</h2>
          <p>Price: $90</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>

        
        <div class="product">
          <img src="images/HeadPhone.jpg" alt="Product 3">
          <h2>Product 3</h2>
          <p>Price: $90</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        
        
         <div class="product">
          <img src="images/LadiesBag&Heel.jpg" alt="Product 3">
          <h2>Product 3</h2>
          <p>Price: $90</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>

        
        <div class="product">
          <img src="images/Neckless.jpg" alt="Product 3">
          <h2>Product 3</h2>
          <p>Price: $90</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>

        
        <div class="product">
          <img src="images/Playful.jpg" alt="Product 3">
          <h2>Product 3</h2>
          <p>Price: $90</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        
        
         <div class="product">
          <img src="images/Shoe&Belt.jpg" alt="Product 3">
          <h2>Product 3</h2>
          <p>Price: $90</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>

        
        <div class="product">
          <img src="images/Watch.jpg" alt="Product 3">
          <h2>Product 3</h2>
          <p>Price: $90</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>

        
        <div class="product">
          <img src="images/SunGlass.jpg" alt="Product 3">
          <h2>Product 3</h2>
          <p>Price: $90</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>

        
        
        
  
</body>
</html>