<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="about.css">
  <title>About Dept Cloths</title>
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
      <li class="active"><a href="about.html">About</a></li>
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
      </div>  </nav>
</header>
  <main>
    <section class="about">


      <h1>Behind the brand</h1>
      <p>Welcome to our clothing store! We're passionate about providing high-quality, stylish clothing for men,women, kids and accessories. Our mission is to help our customers look and feel their best.</p>
      <p>We believe in sustainability and strive to reduce our environmental impact. Our clothing is made from eco-friendly materials and produced with care and attention to detail.</p>
      <p>At Dept, fashion isn’t just about looking good, it’s about expressing who you are. Our collections are designed with a keen eye for detail, combining effortless style with a modern edge. Whether you’re dressing up for a night out or keeping it casual during the day, Dept offers versatile pieces that blend contemporary trends with timeless appeal. From tailored silhouettes to laid-back essentials, we believe in creating fashion that feels as good as it looks.

      </p><p>Rooted in creativity and confidence, Dept is more than just a clothing label, it’s a reflection of individuality. Our mission is to empower you to wear what you love and feel great doing it. With sustainability and quality at the heart of our design process, every piece is made to last season after season, moment after moment. Step into Dept, and discover style that’s made to move with you.</p>
      <p>At Dept, we take pride in delivering more than just fashion, we deliver craftsmanship. Every piece in our collection is made with premium materials, thoughtful design, and a commitment to lasting quality. From the stitching to the final fit, we ensure our clothing not only looks great but also stands the test of time. Whether you're shopping for everyday essentials or standout styles, you can trust that you're getting garments built for both comfort and durability.

We also understand that when you find something you love, you want it fast. That’s why we’ve streamlined our shipping process to offer quick, reliable delivery straight to your doorstep. With Dept, you won’t have to wait long to elevate your wardrobe enjoy high-quality fashion, delivered fast and hassle-free.

</p>
      <div class="team">
        <h2>Meet Our Team</h2>
        <div class="team-members">
          <div class="team-member">
            <img src="images/men.jpg" alt="Team Member 1">
            <h3>Elijah Akuffo</h3>
            <p>Founder & CEO</p>
          </div>
          <div class="team-member">
            <img src="images/buycloth.jpg" alt="Team Member 2">
            <h3>David Anane</h3>
            <p>VP of Marketing</p>
          </div>


          <div class="team-member">
            <img src="images/buycloth.jpg" alt="Team Member 2">
            <h3>Papa Serebouh</h3>
            <p>Supervisor</p>
          </div>
          <div class="team-member">
            <img src="images/buycloth.jpg" alt="Team Member 2">
            <h3>Timothy Gassinu</h3>
            <p>Operations Manager</p>
          </div>
        </div>
      </div>


    </section>
  </main>
</main>
<footer>
  <p>&copy; 2025 Dept.<sub>Clothes</sub> Store</p>
</footer>
  
</body>
</html>