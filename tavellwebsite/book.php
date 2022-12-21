
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- custon css  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts -->
    <section class="header">
        <a href="home.php" class="logo">Travel</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- header section ends -->
<?php
if(isset($_GET['submitee']) && $_GET['submitee']=='true'){
    echo "<div class='alert fs-3 m-0 alert-success alert-dismissible fade show' role='alert'>
    <strong>successfully !</strong> your booking completed
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
}

?>

<div class="heading" style="background: url(images/header-bg-3.png);"> 
    <h1>Book now</h1>
</div>

<!-- booking section -->

<section class="booking">
    <h1 class="heading-title">book your trips</h1>
    <form action="" method="post" class="book-form" id="form">

    <div class="flex">
        <div class="inputbox">
            <span>name :</span>
            <input type="text" class="rignt__input" placeholder="enter your name" name="name" id="name">
            <p class='help'></p>
            
        </div>
        <div class="inputbox">
            <span>email :</span>
            <input type="email" placeholder="enter your email address" name="email" id="email">
           
             <p class='help'></p>
        </div>
        <div class="inputbox">
            <span>phone :</span>
            <input type="number" placeholder="enter your phone number" name="phone" id="phone">
             <p class='help'></p>
        </div>
        <div class="inputbox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address" id="address">
             <p class='help'></p>
        </div>
        <div class="inputbox">
            <span>where to go :</span>
            <input type="text" placeholder="place where to visit" name="location" id="location">
             <p class='help'></p>
        </div>
        <div class="inputbox">
            <span>How many :</span>
            <input type="text" placeholder="How many guest" name="guest" id="guest">
             <p class='help'></p>
        </div>
        <div class="inputbox">
            <span>arivals :</span>
            <input type="date"  name="arivals" id="arivals">
             <p class='help'></p>
        </div>
        <div class="inputbox">
            <span>leaving :</span>
            <input type="date"  name="leaving" id="leaving">
             <p class='help'></p>
        </div>
    </div>
    <input type="submit" value="submit" class="btn" name="send" id="submit">
    </form>
</section>




























    <!-- footer section starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-right"></i> about</a>
                <a href="package.php"><i class="fas fa-right"></i> package</a>
                <a href="book.php"><i class="fas fa-right"></i> book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-right"></i> ask question</a>
                <a href="#"><i class="fas fa-right"></i> about us</a>
                <a href="#"><i class="fas fa-right"></i> privacy policy</a>
                <a href="#"><i class="fas fa-right"></i> terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +8801820245632</a>
                <a href="#"><i class="fas fa-phone"></i> +8801957280038</a>
                <a href="#"><i class="fas fa-envelop"></i> jawadhossainmahi@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Lalpur, Fatulla , Narayanganj, Bangladesh </a>
            </div>

            <div class="box">
                <h3>Follow us</h3>
               <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
               <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
               <a href="#"><i class="fab fa-instragram"></i> instragram</a>
               <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
            </div>
        </div>

    <div class="credit">created by <span> mr. hossain designer</span>|| all rights reseverd!</div>
    </section>
    <!-- footer section ends -->




    <!-- swiper js link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- custom js -->
    <script src="js/form_error.js"></script>
    <script src="js/script.js"></script>
</body>

</html>