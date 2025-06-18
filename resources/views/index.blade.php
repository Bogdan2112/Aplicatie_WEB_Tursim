<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <section class="header tours-header">
        <nav>
            <a href="{{ url('/') }}"><img src="/img/logo.png" alt="" class="nav-img"></a>
            <div class="NavBar" id="NavLinks">
                <div class="nav-links " >
                    <i class="fa-solid fa-xmark x-mark" onclick="hideMenu()"></i>
                    <a href="{{ url('/') }}" class="da">Home</a>
                    <a href="{{ url('/events') }}">Events</a>
                    <a href="{{ url('/about') }}">About</a>
                    <a href="{{ url('/contact') }}">Contact</a>
                    <a href="{{ route('login') }}">Log In</a>
                </div>
            </div>
            <i class="fa-sharp fa-solid fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="header-content tours-content">
            <div class="line"></div>
            <h1>Explore The World With Us!</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut eaque ipsa ratione veritatis, totam dolor sit vitae sapiente commodi, odio repellat officiis eius voluptatibus rem!</p>
            <a href="#about" class="ctn">See Tours</a>
        </div>

    </section>

    <section class="destinations" id="about">
            <div class="destinations-content">
                <div class="general">
                    <div class="coloana-text ">
                        <h1>UPCOMING TOURS &#38; DESTINATIONS</h1>
                        <div class="line"></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod reprehenderit fugiat culpa animi, magni rem in, veniam repudiandae, saepe soluta nemo. Accusamus modi est praesentium numquam natus, cum at saepe.</p>
                    </div>
                    <a href="/New Microsoft Word Document.docx" class="ctn">Learn More</a>
                </div>
                
                
    
                <div class="coloana-fotci ">
                    <div class="galerie">
                        <img src="/img/img3.png" alt="" class="fotca">
                        <img src="/img/img4.png" alt="" class="fotca">
                        <img src="/img/img5.png" alt="" class="fotca">
                        <img src="/img/img6.png" alt="" class="fotca">
                    </div>
                </div>
            </div>
    </section>
    <section class="services" id="services">
        <h1>Services we offer</h1>
        <p class="after-line">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>

        <div class="row">
            <div class="col">
                <h3>Service 1</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus, illum quo esse, eius odit perspiciatis laudantium rem sunt ullam veritatis dolorum, in inventore facere magnam corporis!</p>
            </div>

            <div class="col">
                <h3>Service 2</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus, illum quo esse, eius odit perspiciatis laudantium rem sunt ullam veritatis dolorum, in inventore facere magnam corporis!</p>
            </div>

            <div class="col">
                <h3>Service 3</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus, illum quo esse, eius odit perspiciatis laudantium rem sunt ullam veritatis dolorum, in inventore facere magnam corporis!</p>
            </div>

        </div>
    </section>

    <section class="ride" id="ride">
        <div class="heading">
            <span>How It Works</span>
            <h1>Follow This 3 Easy Steps</h1>
        </div>

        <div class="ride-container">
            <div class="box">
                <i class="fa-solid fa-location-dot"></i>
                <h2>Choose a location</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt fugiat, perferendis officia quam fugit quis</p>
            </div>

            <div class="box">
                <i class="fa-regular fa-calendar"></i>
                <h2>Pick a date</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt fugiat, perferendis officia quam fugit quis</p>
            </div>
            
            <div class="box">
                <i class="fa-solid fa-hotel"></i>
                <h2>Book a hotel</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt fugiat, perferendis officia quam fugit quis</p>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/events') }}">Events</a></li>
                    <li><a href="{{ url('/about') }}">About Us</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Popular Destinations</h3>
                <ul>
                    <li><a href="#">Mountain Tours</a></li>
                    <li><a href="#">Beach Holidays</a></li>
                    <li><a href="#">City Breaks</a></li>
                    <li><a href="#">Adventure Trips</a></li>
                    <li><a href="#">Cultural Tours</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Services</h3>
                <ul>
                    <li><a href="#">Hotel Booking</a></li>
                    <li><a href="#">Flight Tickets</a></li>
                    <li><a href="#">Travel Insurance</a></li>
                    <li><a href="#">Car Rental</a></li>
                    <li><a href="#">Tour Guides</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Contact Info</h3>
                <div class="contact-info">
                    <p><i class="fa-solid fa-phone"></i> +40 123 456 789</p>
                    <p><i class="fa-solid fa-envelope"></i> info@travelagency.com</p>
                    <p><i class="fa-solid fa-location-dot"></i> Bucharest, Romania</p>
                </div>
                <div class="social-links">
                    <a href="https://www.instagram.com/mnogouvajaemii_bogdan/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.instagram.com/mnogouvajaemii_bogdan/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/mnogouvajaemii_bogdan/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.instagram.com/mnogouvajaemii_bogdan/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2024 Travel Agency. All rights reserved.</p>
            <p>Made with <i class="fa-regular fa-heart inima"></i> by Cozmolici Bogdan</p>
        </div>
    </section>
</body>
</html>