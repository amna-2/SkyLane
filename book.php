<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <!-- swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- font font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>

  <section class="header">
    <a href="home.php" class="logo">SkyLane</a>
    <nav class="navbar"> - <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">package</a>
      <a href="book.php">Book</a>
      <a href="privacypolicy.php">Privacy Policy</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>



  </section>

  <div class="heading" style="background: url(images/head-img-book.jpg) ">
    <h1 style="padding-top:6rem;">Book Now</h1>
  </div>



  <!-- booking section -->

  <section class="booking">
    <h1 class="heading-title">Book Your Trip Now!</h1>
    <form action="book_form.php" method="post" class="book-form">
      <div class="flex">
        <div class="inputbox">
          <span>Name*: </span>
          <input type="text" placeholder="Enter Your Name" name="name">

        </div>

        <div class="inputbox">
          <span>Email*: </span>
          <input type="email" placeholder="Enter Your email" name="email">

        </div>

        <div class="inputbox">
          <span>Phone* : </span>
          <input type="number" placeholder="Enter Your Number" name="phone">

        </div>

        <div class="inputbox">
          <span>Address* : </span>
          <input type="text" placeholder="Enter Your Address" name="address">

        </div>

        <!-- <div class="inputbox">
            <span>Destination : </span>
            <input type="text" placeholder="Place You Want To visit" name="location">

          </div> -->





        <div class="inputbox">
          <span>Destination: </span>
          <select name="location" id="destination" onchange="calculatePrice()">
            <option value="" disabled selected>Select a destination</option>
            <option value="100">Washington DC,UK</option>
            <option value="100">Eiffel Tower, Paris</option>
            <option value="200">Great Wall of China</option>
            <option value="150">Taj Mahal, India</option>
            <option value="300">Grand Canyon, USA</option>
            <option value="250">Sydney Opera House, Australia</option>
            <option value="180">Machu Picchu, Peru</option>
            <option value="220">Santorini, Greece</option>
            <option value="400">Aurora Borealis, Iceland</option>
            <option value="320">Mount Fuji, Japan</option>
            <option value="350">Banff National Park, Canada</option>
            <option value="140">Christ the Redeemer, Brazil</option>
            <option value="110">Angkor Wat, Cambodia</option>
            <option value="130">Petra, Jordan</option>
            <option value="210">Burj Khalifa, Dubai</option>
            <option value="170">Statue of Liberty, USA</option>
            <option value="240">Colosseum, Rome</option>
            <option value="280">Pyramids of Giza, Egypt</option>
            <option value="200">Victoria Falls, Zambia/Zimbabwe</option>
            <option value="310">Great Barrier Reef, Australia</option>
            <option value="150">Yellowstone National Park, USA</option>
            <option value="230">Stonehenge, England</option>
            <option value="260">Plitvice Lakes, Croatia</option>
            <option value="300">Iguazu Falls, Argentina/Brazil</option>
            <option value="180">Blue Lagoon, Iceland</option>
            <option value="140">Golden Gate Bridge, USA</option>
            <option value="200">Neuschwanstein Castle, Germany</option>
            <option value="170">Table Mountain, South Africa</option>
            <option value="190">Cinque Terre, Italy</option>
            <option value="350">Galapagos Islands, Ecuador</option>
            <option value="270">Hagia Sophia, Turkey</option>
            <option value="190">Big Ben, London</option>
          </select>
        </div>






        <div class="inputbox">
          <span>People* : </span>
          <input type="number" placeholder="Number of Guests" name="guests" id="guests" onchange="calculatePrice()">

        </div>

        <div class="inputbox">
          <span>Arrival (7 days after today) : </span>
          <input type="date" name="arrivals" id="arrival" min="<?=date('y-m-d',strtotime('+7 day'))?>" onchange="calculatePrice()">
        </div>

        <div class="inputbox">
          <span>leaving : </span>
          <input type="date" name="leaving" id="leaving" onchange="calculatePrice()">
        </div>


        <!-- price display -->

        <!-- <div class="price-display">
          <input type="number" name="total-price1" id="total-price1" >

          <h2  >Total Price: $ <span id="total-price" >0</span> </h2>
        </div> -->



        <div class="price-display">
          <!-- Input to store total price for submission -->
          <!-- <input type="number" name="total-price1" id="total-price1" hidden> -->

          <!-- Visible display of total price -->
          <h2>Total Price: $ <span id="total-price">0</span></h2>
        </div>






        <!-- <div class="inputbox"> 
                <span>Price (per day): </span>
                <input type="text" id="price" name="price" readonly>
         </div>

         <div class="inputbox">
                <span>Total Price: </span>
                <input type="text" id="totalPrice" name="totalPrice" readonly>
          </div> -->




        <input type="submit" value="submit" class="btn" name="send">


      </div>

    </form>

  </section>




















  <!-- footer -->
  <section class="footer">
    <div class="box-container">

      <div class="box">
        <h3>Quick Links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i>Home</a>
        <a href="about.php"> <i class="fas fa-angle-right"></i>About</a>
        <a href="package.php"> <i class="fas fa-angle-right"></i>package</a>
        <a href="book.php"> <i class="fas fa-angle-right"></i>Book</a>


      </div>
      <div class="box">
        <h3>Extra Links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i>Ask Questions</a>
        <a href="#"> <i class="fas fa-angle-right"></i>About Us</a>
        <a href="privacypolicy.php"> <i class="fas fa-angle-right"></i>Privacy Policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i>Terms of Use</a>

      </div>
      <div class="box">
        <h3>Contact Information</h3>
        <a href="#"> <i class="fas fa-phone"></i>03049201700</a>
        <a href="#"> <i class="fas fa-phone"></i>03019401700</a>
        <a href="#"> <i class="fas fa-envelope"></i> amnahashmi83@gmail.com</a>
        <a href="#"> <i class="fas fa-map"></i> Multan, Pakistan- 60600</a>


      </div>
      <div class="box">
        <h3>Follow us</h3>
        <a href="#"><i class="fab fa-facebook-f">facebook</i></a>
        <a href="#"><i class="fab fa-twitter">twitter</i></a>
        <a href="#"><i class="fab fa-instagram">instagram</i></a>
        <a href="#"><i class="fab fa-linkedIn">linkedIn</i></a>
      </div>






    </div>
    <div class="credit">Created by <span>Amna & Fatima</span> |all rights are reserved! </div>







  </section>










  <!-- swiper js -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- custom js -->
  <script src="js//script.js"></script>

</body>

</html>