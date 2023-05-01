<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>About Us</title>
    <link rel="icon" href="images/logo.jpeg">
    <link rel="stylesheet" href = "css/style.css">

    <style>

        .about-main{
                width: 100%;
                height: 2200px;
                position: relative;
                background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(images/background2.jpg);
                background-attachment: fixed;
                background-size: cover;
                background-position: center;        
        }
        .about-menu a{
               font-weight:900px;
                color:bisque;
        }
      
        .navbar-brand{
                color:bisque;
        }



        .floating-btn{
      width : 80px;
      height : 80px;
      background: bisque;
      display: flex;
      align-items: center;
      justify-content : center;
      text-decoration: none;
      border-radius : 50%;
      color: black;
      font-size : 20px; 
      box-shadow: 2px 2px 5px rgba(0,0,0,0.25);
      position:fixed;
      right : 20px;
      bottom:40%;
      transition : background 0.25s;
    }

    .floating-btn:hover{
      color: black;
    }


    .floating-btn:active{
      background: BROWN ;
  
    }


.container {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}

.container img {vertical-align: middle;margin: 50px;}

.container .content {
  position: absolute;
  bottom: 50px;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 97%;
  left: 60px;
  padding: 20px;
}
</style>




  </head>
  <body>

    <section class = "about-main">
      <nav>
        <a class="navbar-brand" href="index.php" style="margin-right: 30%;">
          <img src = "images/logo.jpeg" width = "90" height = "90" /> B&M
        </a>

        <ul class= "about-menu">
          <li><a href="index.php"  >Home</a><li>
          <li><a href="about.php" class = "active">About</a><li>
          <li><a href="services.php">Services</a><li>
          <li><a href="news.php">News</a><li>
          <li><a href="contacts.php">Contacts</a><li>
          <li><a href="user.php">Register</a><li>
          <li><a href="commonpage.php">Clients</a><li>
        </ul>
      </nav>

      <a href="modal.php" class="material-icons floating-btn">LOGIN</a>
    
<h2 style='color:bisque'>Welcome to our tourism company, where we specialize in providing unforgettable travel experiences for adventurers and explorers alike!

Whether you're seeking a relaxing getaway or an adrenaline-fueled adventure, we've got you covered! </h2>


<div class="container">
  <img src="images/img1.jpeg" alt="Notebook" style="width:100%;">
  <div class="content">
    
    <p> Our team of experienced travel experts will work with you to design the perfect itinerary to suit your interests and preferences, ensuring that every moment of your trip is memorable and enjoyable.</p>
  </div>
</div>

<div class="container">
  <img src="images/beach.jpeg" alt="Notebook" style="width:100%;">
  <div class="content">
    
    <p>With our extensive network of partners and suppliers, we can offer you access to the world's most beautiful and exciting destinations, from tropical paradises to snow-capped mountains and everything in between. Whether you're looking to immerse yourself in a new culture, explore stunning natural landscapes, or simply unwind and recharge, we've got the perfect destination for you.</p>
  </div>
</div>

<div class="container">
  <img src="images/img13.jpeg" alt="Notebook" style="width:100%;">
  <div class="content">
    
    <p>We take pride in our commitment to sustainability and responsible tourism practices, ensuring that our trips have a positive impact on local communities and the environment. We also offer a range of customizable travel options, from solo adventures to group tours, to cater to your individual needs and preferences.

So why wait? Let us help you plan your dream vacation today and discover the world in a whole new way! Contact us now to learn more about our exciting travel packages and start planning your next adventure!</p>
  </div>
</div>
</section>
    </body>
    </html>