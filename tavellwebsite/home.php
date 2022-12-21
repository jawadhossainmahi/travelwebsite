<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- custon css  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


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

    <!-- home section starts -->
    <div class=" home">
        <div class="swiper home-slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url(images/home-slide-1.jpg) no-repeat;">
                    <div class="content">
                        <span>
                            explore, discover, travel
                        </span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat;">
                    <div class="content">
                        <span>
                            explore, discover, travel
                        </span>
                        <h3>discover around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat;">
                    <div class="content">
                        <span>
                            explore, discover, travel
                        </span>
                        <h3>make your tour worldwide</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <!-- home section ends -->



    <!-- services section starts -->


    <section class="services">
        <div class="heading-title">our services</div>
        <div class="box-container">
            <div class="box">
                <img src="images/icon-1.png" alt="">
                <h3>adventure</h3>
            </div>
            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>tour guide</h3>
            </div>
            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>treaking</h3>
            </div>
            <div class="box">
                <img src="images/icon-4.png" alt="">
                <h3>camp fire</h3>
            </div>
            <div class="box">
                <img src="images/icon-5.png" alt="">
                <h3>off road</h3>
            </div>
            <div class="box">
                <img src="images/icon-6.png" alt="">
                <h3>camping</h3>
            </div>

        </div>
    </section>

    <!-- services section ends-->


    <!-- home  about section starts  -->

    <section class="home-about">
        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum ad nihil vel saepe quidem porro eveniet quos, quod magnam, ipsum, voluptates officiis. Odit sequi incidunt eligendi minima commodi iste ab?</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <!-- home  about section ends   -->

    <!-- home package section starts -->
    <section class="home-packages">
        <h1 class="heading"> Our packeges</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adeventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, similique!</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adeventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, similique!</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adeventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, similique!</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

        </div>
        <div class="load-more"><a href="package.php" class="btn">load-more</a></div>
    </section>
    <!-- home package section ends -->


    
    <!-- home offer section starts -->


    <section class="home-offer">
        <div class="content">
            <h3>upto 50% of</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis obcaecati modi inventore voluptate magnam necessitatibus!</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </section>
    <!-- home offer section ends -->























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
    <!-- custom js -->
    <script src="js/script.js"></script>

</body>

</html>