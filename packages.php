<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 50 Trending Places in India</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        :root {
            --orange: #ffa500;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Nunito', sans-serif;
        }
    
        header{
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: black;
            color: white;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: .5rem 5%;

        }
            header #menu{
            display: none;
            cursor: pointer;
            width: fit-content;
            height: auto;
            background-color: #eee;
            position: absolute;
            border: 4px ;
        }
        header #menu .line1,
        header #menu .line2,
        header #menu .line3{
            width: 30px;
            height: 2px;
            background-color: #333;
            border-radius: 20px;
            margin: 5px;
        }
        .active .line1{
            transform:translate(0px,7px) rotate(45deg);
        }
        .active .line2{
            opacity: 0;
        }
        .active .line3{
            transform:translate(0px,-7px) rotate(-45deg);
        }

        header p{
            font-size: 2.5rem;
            color: white;
            font-weight: bold;
        }
        header p:hover{
            color: var(--orange);
        }

        header .navbar a{
            color: white;
            font-size: 1.5rem;
            margin:0 .8rem;
            text-decoration: none;
        }
        header .navbar a:hover {
            text-decoration: underline;
            color: var(--orange);
        }

        .gallery-container {
            padding: 2rem 9%;
        }

        .heading {
            text-align: center;
            padding: 2.5rem 0;
        }

        .heading span {
            font-size: 3rem;
            background: rgba(255,165,0,.2);
            color: var(--orange);
            border-radius: .5rem;
            padding: 0.2rem 1rem;
            display: inline-block;
            margin: 0 0.2rem;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .place-card {
            border-radius: 10px;
            overflow: hidden;
            text-decoration: none;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .place-card:hover {
            transform: translateY(-10px);
            cursor: pointer;
        }

        .place-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .place-info {
            padding: 1.5rem;
            background: #fff;
        }

        .place-info h3 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 1rem;
        }

        .place-info p {
            font-size: 1.4rem;
            color: #666;
            line-height: 1.5;
        }

        .location {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .location i {
            color: var(--orange);
        }
        .location span{
            color: black;
        }
        @media(max-width:1200px){
    html{
        font-size: 55%;
    }
   
    }
    @media(max-width:991px){
   
    header{
        padding: 2rem;
    }  
    section{
        padding: 2rem;
    }  
    .gallery-container {
            padding-top: 4.5rem;
        }
       
    }  
   
    @media(max-width:768px){
    header #menu{
    display: block;
    }
    header p{
    margin:auto;
    color: var(--orange);
    }
    header .navbar{
    position: absolute;
    top:100%;
    left: 0;
    right: 0;
    background: #333;
    border-top: .1rem rgba(255, 255, 255, .2);
    clip-path: polygon(0 0,100% 0,100% 0,0 0);
    }
   header .navbar.active{
    clip-path: polygon(0 0,19% 0,19% 100%,0 100%);
    } 

    header .navbar a{
    font-size: 15px;
    display: block;
    border-radius: .5rem;
    padding: 1.5rem;
    margin: 1.5rem;
    background: #222;
    width: 15%;
   }    
  
   
}
@media(max-width:450px){
    html{
        font-size: 50%;
    }
    
    
}
    </style>
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
            <a href="home.php">home</a>
            <a href="packages.php">Packages</a>
            <a href="home.php #services">services</a>
            <a href="home.php #contact">contact</a>
        </nav>
    </header>

    <section class="gallery-container">
        <h1 class="heading">
            <span>T</span>
            <span>o</span>
            <span>p</span>
            <span class="space"></span>
            
            <span>P</span>
            <span>l</span>
            <span>a</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="gallery-grid">
            <!-- Taj Mahal -->
            <a href="taj.php" class="place-card">
                <img src="images/taj-mahal.jpg" alt="Taj Mahal">
                <div class="place-info">
                    <h3>Taj Mahal</h3>
                    <p>One of the seven wonders of the world, symbol of eternal love</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Agra, Uttar Pradesh</span>
                    </div>
                </div>
            </a>

            <!-- Varanasi Ghats -->
            <div class="place-card">
                <img src="images/varanasi.jpg" alt="Varanasi Ghats">
                <div class="place-info">
                    <h3>Varanasi Ghats</h3>
                    <p>Ancient holy city with spectacular riverside ceremonies</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Varanasi, Uttar Pradesh</span>
                    </div>
                </div>
            </div>

           

            <!-- Hawa Mahal -->
            <div class="place-card">
                <img src="images/hawa-mahal.jpg" alt="Hawa Mahal">
                <div class="place-info">
                    <h3>Hawa Mahal</h3>
                    <p>Iconic palace with intricate honeycomb-like architecture</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Jaipur, Rajasthan</span>
                    </div>
                </div>
            </div>

            <!-- Amber Fort -->
            <div class="place-card">
                <img src="images/amber-fort.jpg" alt="Amber Fort">
                <div class="place-info">
                    <h3>Amber Fort</h3>
                    <p>Majestic hilltop fortress with stunning architecture</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Jaipur, Rajasthan</span>
                    </div>
                </div>
            </div>

            <!-- Qutub Minar -->
            <div class="place-card">
                <img src="images/qutub-minar.jpg" alt="Qutub Minar">
                <div class="place-info">
                    <h3>Qutub Minar</h3>
                    <p>UNESCO World Heritage site, tallest brick minaret</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Delhi</span>
                    </div>
                </div>
            </div>

            <!-- Red Fort -->
            <div class="place-card">
                <img src="images/red-fort.jpg" alt="Red Fort">
                <div class="place-info">
                    <h3>Red Fort</h3>
                    <p>Historic fortress that served as main residence of Mughal Emperors</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Delhi</span>
                    </div>
                </div>
            </div>

            <!-- Gateway of India -->
            <div class="place-card">
                <img src="images/gateway-india.jpg" alt="Gateway of India">
                <div class="place-info">
                    <h3>Gateway of India</h3>
                    <p>Iconic arch monument built in 20th century</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Mumbai, Maharashtra</span>
                    </div>
                </div>
            </div>

            <!-- Ajanta Caves -->
            <div class="place-card">
                <img src="images/ajanta-caves.jpg" alt="Ajanta Caves">
                <div class="place-info">
                    <h3>Ajanta Caves</h3>
                    <p>Ancient Buddhist cave monuments with remarkable paintings</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Aurangabad, Maharashtra</span>
                    </div>
                </div>
            </div>

            <!-- Golden Temple -->
            <div class="place-card">
                <img src="images/golden-temple.jpg" alt="Golden Temple">
                <div class="place-info">
                    <h3>Golden Temple</h3>
                    <p>Most important pilgrimage site of Sikhism</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Amritsar, Punjab</span>
                    </div>
                </div>
            </div>

            <!-- Mysore Palace -->
            <div class="place-card">
                <img src="images/mysore-palace.jpg" alt="Mysore Palace">
                <div class="place-info">
                    <h3>Mysore Palace</h3>
                    <p>Historical palace known for its Indo-Saracenic architecture</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Mysore, Karnataka</span>
                    </div>
                </div>
            </div>

            <!-- Hampi -->
            <div class="place-card">
                <img src="images/hampi.jpg" alt="Hampi">
                <div class="place-info">
                    <h3>Hampi</h3>
                    <p>Ancient ruins of Vijayanagara Empire</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Karnataka</span>
                    </div>
                </div>
            </div>

            <!-- Khajuraho Temples -->
            <div class="place-card">
                <img src="images/khajuraho.jpg" alt="Khajuraho Temples">
                <div class="place-info">
                    <h3>Khajuraho Temples</h3>
                    <p>Famous for their nagara-style architectural symbolism</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Madhya Pradesh</span>
                    </div>
                </div>
            </div>

            <!-- Ellora Caves -->
            <div class="place-card">
                <img src="images/ellora-caves.jpg" alt="Ellora Caves">
                <div class="place-info">
                    <h3>Ellora Caves</h3>
                    <p>Rock-cut temples showcasing Indian architecture</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Aurangabad, Maharashtra</span>
                    </div>
                </div>
            </div>

            <!-- Rann of Kutch -->
            <div class="place-card">
                <img src="images/rann-kutch.jpg" alt="Rann of Kutch">
                <div class="place-info">
                    <h3>Rann of Kutch</h3>
                    <p>White salt desert, largest in the world</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Gujarat</span>
                    </div>
                </div>
            </div>

            <!-- Sundarbans -->
            <div class="place-card">
                <img src="images/sundarbans.jpg" alt="Sundarbans">
                <div class="place-info">
                    <h3>Sundarbans</h3>
                    <p>Largest mangrove forest and tiger reserve</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>West Bengal</span>
                    </div>
                </div>
            </div>

            <!-- Konark Sun Temple -->
            <div class="place-card">
                <img src="images/konark.jpg" alt="Konark Sun Temple">
                <div class="place-info">
                    <h3>Konark Sun Temple</h3>
                    <p>13th-century Sun Temple, UNESCO World Heritage site</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Odisha</span>
                    </div>
                </div>
            </div>

            <!-- Meenakshi Temple -->
            <div class="place-card">
                <img src="images/meenakshi-temple.jpg" alt="Meenakshi Temple">
                <div class="place-info">
                    <h3>Meenakshi Temple</h3>
                    <p>Historic Hindu temple with stunning architecture</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Madurai, Tamil Nadu</span>
                    </div>
                </div>
            </div>

            <!-- Goa Beaches -->
            <div class="place-card">
                <img src="images/goa-beaches.jpg" alt="Goa Beaches">
                <div class="place-info">
                    <h3>Goa Beaches</h3>
                    <p>Famous for pristine beaches and vibrant nightlife</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Goa</span>
                    </div>
                </div>
            </div>

            <!-- Darjeeling -->
            <div class="place-card">
                <img src="images/darjeeling.jpg" alt="Darjeeling">
                <div class="place-info">
                    <h3>Darjeeling</h3>
                    <p>Famous hill station known for tea plantations</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>West Bengal</span>
                    </div>
                </div>
            </div>

            <!-- Udaipur -->
            <div class="place-card">
                <img src="images/udaipur.jpg" alt="Udaipur">
                <div class="place-info">
                    <h3>City Palace</h3>
                    <p>City of Lakes with magnificent palaces</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Udaipur, Rajasthan</span>
                    </div>
                </div>
            </div>

            <!-- Backwaters -->
            <div class="place-card">
                <img src="images/kerala-backwaters.jpg" alt="Kerala Backwaters">
                <div class="place-info">
                    <h3>Kerala Backwaters</h3>
                    <p>Network of lagoons, lakes and canals parallel to coast</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kerala</span>
                    </div>
                </div>
            </div>

            <!-- Valley of Flowers -->
            <div class="place-card">
                <img src="images/valley-flowers.jpg" alt="Valley of Flowers">
                <div class="place-info">
                    <h3>Valley of Flowers</h3>
                    <p>National park known for meadows of endemic alpine flowers</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Uttarakhand</span>
                    </div>
                </div>
            </div>

            <!-- Kaziranga National Park -->
            <div class="place-card">
                <img src="images/kaziranga.jpg" alt="Kaziranga National Park">
                <div class="place-info">
                    <h3>Kaziranga National Park</h3>
                    <p>Home to two-thirds of world's one-horned rhinoceros</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Assam</span>
                    </div>
                </div>
            </div>

            <!-- Ladakh -->
            <div class="place-card">
                <img src="images/ladakh.jpg" alt="Ladakh">
                <div class="place-info">
                    <h3>Ladakh</h3>
                    <p>Known for its remote mountain beauty and Buddhist culture</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Ladakh</span>
                    </div>
                </div>
            </div>

            <!-- Mahabalipuram -->
            <div class="place-card">
                <img src="images/mahabalipuram.jpg" alt="Mahabalipuram">
                <div class="place-info">
                    <h3>Mahabalipuram</h3>
                    <p>Ancient port city known for its stone carvings</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Tamil Nadu</span>
                    </div>
                </div>
            </div>

            <!-- Rishikesh -->
            <div class="place-card">
                <img src="images/rishikesh.jpg" alt="Rishikesh">
                <div class="place-info">
                    <h3>Rishikesh</h3>
                    <p>Yoga capital of the world, situated on banks of Ganges</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Uttarakhand</span>
                    </div>
                </div>
            </div>

            <!-- Shimla -->
            <div class="place-card">
                <img src="images/shimla.jpg" alt="Shimla">
                <div class="place-info">
                    <h3>Shimla</h3>
                    <p>Popular hill station and former summer capital of British India</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Himachal Pradesh</span>
                    </div>
                </div>
            </div>

            <!-- Ooty -->
            <div class="place-card">
                <img src="images/ooty.jpg" alt="Ooty">
                <div class="place-info">
                    <h3>Ooty</h3>
                    <p>Queen of hill stations with beautiful botanical gardens</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Tamil Nadu</span>
                    </div>
                </div>
            </div>

            <!-- Munnar -->
            <div class="place-card">
                <img src="images/munnar.jpg" alt="Munnar">
                <div class="place-info">
                    <h3>Munnar</h3>
                    <p>Hill station famous for its tea plantations</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kerala</span>
                    </div>
                </div>
            </div>

            <!-- Andaman Islands -->
            <div class="place-card">
                <img src="images/andaman.jpg" alt="Andaman Islands">
                <div class="place-info">
                    <h3>Andaman Islands</h3>
                    <p>Pristine beaches and rich marine life</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Andaman & Nicobar Islands</span>
                    </div>
                </div>
            </div>

            <!-- Manali -->
            <div class="place-card">
                <img src="images/manali.jpg" alt="Manali">
                <div class="place-info">
                    <h3>Manali</h3>
                    <p>Popular hill station known for adventure sports</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Himachal Pradesh</span>
                    </div>
                </div>
            </div>

            <!-- Ranthambore -->
            <div class="place-card">
                <img src="images/ranthambore.jpg" alt="Ranthambore">
                <div class="place-info">
                    <h3>Ranthambore National Park</h3>
                    <p>Famous tiger reserve with ancient ruins</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Rajasthan</span>
                    </div>
                </div>
            </div>

            <!-- Kanyakumari -->
            <div class="place-card">
                <img src="images/kanyakumari.jpg" alt="Kanyakumari">
                <div class="place-info">
                    <h3>Kanyakumari</h3>
                    <p>Southernmost tip of mainland India</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Tamil Nadu</span>
                    </div>
                </div>
            </div>

            <!-- Coorg -->
            <div class="place-card">
                <img src="images/coorg.jpg" alt="Coorg">
                <div class="place-info">
                    <h3>Coorg</h3>
                    <p>Scotland of India, known for coffee plantations</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Karnataka</span>
                    </div>
                </div>
            </div>

            <!-- Kutch -->
            <div class="place-card">
                <img src="images/kutch.jpg" alt="Kutch">
                <div class="place-info">
                    <h3>Kutch</h3>
                    <p>Known for its unique white desert and handicrafts</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Gujarat</span>
                    </div>
                </div>
            </div>

            <!-- Nainital -->
            <div class="place-card">
                <img src="images/nainital.jpg" alt="Nainital">
                <div class="place-info">
                    <h3>Nainital</h3>
                    <p>Lake District of India</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Uttarakhand</span>
                    </div>
                </div>
            </div>

            <!-- Gangtok -->
            <div class="place-card">
                <img src="images/gangtok.jpg" alt="Gangtok">
                <div class="place-info">
                    <h3>Gangtok</h3>
                    <p>Capital city with Buddhist monasteries</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Sikkim</span>
                    </div>
                </div>
            </div>

            <!-- Leh Palace -->
            <div class="place-card">
                <img src="images/leh-palace.jpg" alt="Leh Palace">
                <div class="place-info">
                    <h3>Leh Palace</h3>
                    <p>Former royal palace with Tibetan architecture</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Ladakh</span>
                    </div>
                </div>
            </div>

            <!-- Kovalam -->
            <div class="place-card">
                <img src="images/kovalam.jpg" alt="Kovalam">
                <div class="place-info">
                    <h3>Kovalam Beach</h3>
                    <p>Famous crescent-shaped beach</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kerala</span>
                    </div>
                </div>
            </div>

            <!-- Pushkar -->
            <div class="place-card">
                <img src="images/pushkar.jpg" alt="Pushkar">
                <div class="place-info">
                    <h3>Pushkar</h3>
                    <p>Holy city known for its annual camel fair</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Rajasthan</span>
                    </div>
                </div>
            </div>

            <!-- Mahabodhi Temple -->
            <div class="place-card">
                <img src="images/mahabodhi.jpg" alt="Mahabodhi Temple">
                <div class="place-info">
                    <h3>Mahabodhi Temple</h3>
                    <p>UNESCO World Heritage site where Buddha attained enlightenment</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Bodh Gaya, Bihar</span>
                    </div>
                </div>
            </div>

            <!-- Dalhousie -->
            <div class="place-card">
                <img src="images/dalhousie.jpg" alt="Dalhousie">
                <div class="place-info">
                    <h3>Dalhousie</h3>
                    <p>Hill station with colonial architecture</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Himachal Pradesh</span>
                    </div>
                </div>
            </div>

            <!-- Elephanta Caves -->
            <div class="place-card">
                <img src="images/elephanta.jpg" alt="Elephanta Caves">
                <div class="place-info">
                    <h3>Elephanta Caves</h3>
                    <p>Ancient cave temples dedicated to Lord Shiva</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Mumbai, Maharashtra</span>
                    </div>
                </div>
            </div>

            <!-- Gokarna -->
            <div class="place-card">
                <img src="images/gokarna.jpg" alt="Gokarna">
                <div class="place-info">
                    <h3>Gokarna</h3>
                    <p>Temple town with pristine beaches</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Karnataka</span>
                    </div>
                </div>
            </div>

            <!-- Kanha National Park -->
            <div class="place-card">
                <img src="images/kanha.jpg" alt="Kanha National Park">
                <div class="place-info">
                    <h3>Kanha National Park</h3>
                    <p>Tiger reserve that inspired The Jungle Book</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Madhya Pradesh</span>
                    </div>
                </div>
            </div>

            <!-- Kodaikanal -->
            <div class="place-card">
                <img src="images/kodaikanal.jpg" alt="Kodaikanal">
                <div class="place-info">
                    <h3>Kodaikanal</h3>
                    <p>Princess of Hill stations with beautiful lakes</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Tamil Nadu</span>
                    </div>
                </div>
            </div>

            <!-- Ajmer Sharif -->
            <div class="place-card">
                <img src="images/ajmer-sharif.jpg" alt="Ajmer Sharif">
                <div class="place-info">
                    <h3>Ajmer Sharif Dargah</h3>
                    <p>Sufi shrine of Khwaja Moinuddin Chishti</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Rajasthan</span>
                    </div>
                </div>
            </div>

            <!-- Shillong -->
            <div class="place-card">
                <img src="images/shillong.jpg" alt="Shillong">
                <div class="place-info">
                    <h3>Shillong</h3>
                    <p>Scotland of the East with rolling hills</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Meghalaya</span>
                    </div>
                </div>
            </div>

            <!-- Puri -->
            <div class="place-card">
                <img src="images/puri.jpg" alt="Puri">
                <div class="place-info">
                    <h3>Jagannath Temple</h3>
                    <p>Ancient temple and major pilgrimage site</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Puri, Odisha</span>
                    </div>
                </div>
            </div>

            <!-- Amritsar -->
            <div class="place-card">
                <img src="images/amritsar.jpg" alt="Amritsar">
                <div class="place-info">
                    <h3>Amritsar</h3>
                    <p>Holy city known for Golden Temple and rich culture</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Punjab</span>
                    </div>
                </div>
            </div>

            <!-- Tirupati -->
            <div class="place-card">
                <img src="images/tirupati.jpg" alt="Tirupati">
                <div class="place-info">
                    <h3>Tirupati Balaji Temple</h3>
                    <p>World's richest temple and major pilgrimage site</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Andhra Pradesh</span>
                    </div>
                </div>
            </div>

            <!-- Cherrapunji -->
            <div class="place-card">
                <img src="images/cherrapunji.jpg" alt="Cherrapunji">
                <div class="place-info">
                    <h3>Cherrapunji</h3>
                    <p>One of the wettest places on Earth with living root bridges</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Meghalaya</span>
                    </div>
                </div>
            </div>

            <!-- Dwarka -->
            <div class="place-card">
                <img src="images/dwarka.jpg" alt="Dwarka">
                <div class="place-info">
                    <h3>Dwarka</h3>
                    <p>Ancient city and one of the four main pilgrimages</p>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Gujarat</span>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <script>
        // Menu toggle functionality
        document.querySelector('#menu').onclick = () => {
            document.querySelector('#menu').classList.toggle('active');
            document.querySelector('.navbar').classList.toggle('active');
        }
    </script>
</body>
</html>
