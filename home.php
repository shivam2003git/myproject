<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours & Travels</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>

        <div id="menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <p>Travel Trek</p>

        <nav class="navbar">
            <a href="#home">home</a>
            <!-- <a href="book.php">book</a> -->
            <a href="packages.php">Packages</a>
            <a href="#services">services</a>
            <a href="#contact">contact</a>
        </nav>
        <a href="profile.php" id="login-btn" class="loginbar" style="background-color:white" >        
        <?php
        session_start();
        $username=$_SESSION['username'];
        
        $conn=mysqli_connect("localhost","root","","visitdatabase");
        $select=mysqli_query($conn,"SELECT * FROM `register` WHERE username='$username'");
        if(mysqli_num_rows($select)>0){
           $fetch=mysqli_fetch_assoc($select);
             if($fetch['image'] !== ""){
                 echo"<img src=".$fetch['image']." alt=''>";
                }
        }
        
        ?>    
        </a>
            <!-- <img src='human.png' alt='' width='50px' height='50px' id="homelogo"> -->
        
    </header>

    <section class="home" id="home">
        <div class="content">
            <h3>advanture is woethwhile</h3>
            <p>discover new place with us, advanture awaits</p>
            <a href="packages.php" class="btn">discover more</a>
        </div>
        <div class="controls">
            <span class="vid-btn active" data-src="video/one.mp4"></span>
            <span class="vid-btn" data-src="video/two.mp4"></span>
            <span class="vid-btn" data-src="video/three.mp4"></span>
            <span class="vid-btn" data-src="video/four.mp4"></span>
            <span class="vid-btn" data-src="video/five.mp4"></span>
        </div>
        <div class="video-container">
            <video src="video/one.mp4" id="video-slider" loop autoplay muted></video>
        </div>
    </section>


   
    <section class="packages" id="packages">
        <h1 class="heading">
            <span>p</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
           
        </h1>
        <div class="gallery-grid">
        <a href="images/taj.php" class="place-card" >
                <img src="images/taj-mahal.jpg" alt="Taj Mahal">
                <div class="place-info">
                    <h3>Taj Mahal</h3>
                    <p>One of the seven wonders of the world, symbol of eternal love</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Agra, Uttar Pradesh</p>
                    </div>
                </div>
            </a>
            <div class="place-card">
                <img src="images/gateway-india.jpg" alt="Gateway of India">
                <div class="place-info">
                    <h3>Gateway of India</h3>
                    <p>Iconic arch monument built in 20th century</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Mumbai, Maharashtra</p>
                    </div>
                </div>
            </div>
            <div class="place-card">
                <img src="images/goa-beaches.jpg" alt="Goa Beaches">
                <div class="place-info">
                    <h3>Goa Beaches</h3>
                    <p>Famous for pristine beaches and vibrant nightlife</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Goa</p>
                    </div>
                </div>
            </div>
            <div class="place-card">
                <img src="images/darjeeling.jpg" alt="Darjeeling">
                <div class="place-info">
                    <h3>Darjeeling</h3>
                    <p>Famous hill station known for tea plantations</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>West Bengal</p>
                    </div>
                </div>
            </div>
            <div class="place-card">
                <img src="images/shimla.jpg" alt="Shimla">
                <div class="place-info">
                    <h3>Shimla</h3>
                    <p>Popular hill station and former summer capital of British India</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Himachal Pradesh</p>
                    </div>
                </div>
            </div>
            <div class="place-card">
                <img src="images/manali.jpg" alt="Manali">
                <div class="place-info">
                    <h3>Manali</h3>
                    <p>Popular hill station known for adventure sports</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Himachal Pradesh</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="services" id="services">
        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>affordable hotels</h3>
                <p>The burden of the disease itself is to be pursued, the adipiscing of the developer. Having found out
                    the benefits of them, who has the pleasure of exercising as little as just the very corrupt!</p>

            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
                <p>The burden of the disease itself is to be pursued, the adipiscing of the developer. Having found out
                    the benefits of them, who has the pleasure of exercising as little as just the very corrupt!</p>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>safty guide</h3>
                <p>The burden of the disease itself is to be pursued, the adipiscing of the developer. Having found out
                    the benefits of them, who has the pleasure of exercising as little as just the very corrupt!</p>
            </div>
            <div class="box">
                <i class="fas fa-globe-asia"></i>
                <h3>around the world</h3>
                <p>The burden of the disease itself is to be pursued, the adipiscing of the developer. Having found out
                    the benefits of them, who has the pleasure of exercising as little as just the very corrupt!</p>
            </div>
            <div class="box">
                <i class="fas fa-plane"></i>
                <h3>fastest travel</h3>
                <p>The burden of the disease itself is to be pursued, the adipiscing of the developer. Having found out
                    the benefits of them, who has the pleasure of exercising as little as just the very corrupt!</p>
            </div>
            <div class="box">
                <i class="fas fa-hiking"></i>
                <h3>adventures</h3>
                <p>The burden of the disease itself is to be pursued, the adipiscing of the developer. Having found out
                    the benefits of them, who has the pleasure of exercising as little as just the very corrupt!</p>
            </div>

        </div>
    </section>
   
   
    <section class="contact" id="contact">
        <h1 class="heading">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
        </h1>
        <div class="row">
            <div class="image">
                <img src="contact.jpg" alt="">
            </div>
            <form action="contact.php" method="post">
                <div class="inputBox">
                    <input type="text" placeholder="name" class="input" name="name">
                    <input type="email" placeholder="email" class="input" name="email">
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="number" class="input" name="number">
                    <input type="text" placeholder="subject" class="input" name="subject">
                </div>
                <textarea placeholder="message"  name="mssg"></textarea>
                <input type="submit" value="send message" class="btn" name="submit">
            </form>
        </div>
    </section>

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>about us</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem tempora corrupti facilis
                    sequi? Voluptatem similique inventore soluta ipsum odio excepturi.</p>
            </div>
            <div class="box">
                <h3>branch locations</h3>
                <a href="#">india</a>
                <a href="#">USA</a>
                <a href="#">japan</a>
                <a href="#">france</a>
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php">home</a>
                <!-- <a href="book.php">book</a> -->
                <a href="packages.php">packages</a>
                <a href="#services">services</a>
                <a href="#contact">contact</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">instagram</a>
                <a href="#">twitter</a>
                <a href="#">linkedin</a>
            </div>

        </div>
        <h1 class="credit"> credit by <span> mr. web designer</span> | all rights reserved!</h1>
    </section>

    <script src="script.js"></script>  
    
</body>

</html>