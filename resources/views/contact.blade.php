<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Contact</title>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            emailjs.init("0fTkuVvJOAAjsPbEM");
        })();
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <section class="sub-header sub1">
        <nav>
            <a href="{{ url('/') }}"><img src="/img/logo.png" alt="" class="nav-img"></a>
            <div class="NavBar" id="NavLinks">
                <div class="nav-links">
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
        <div class="header-content sub-content">
            <h1>Contact Us</h1>
            <div class="line"></div>
        </div>
    </section>

    <!-- Contact ASS Content  -->
    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10874.633160173185!2d28.8690264!3d47.0469357!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97cfa07dcbcd1%3A0x41c3381e876c9606!2zQ2VudHJ1bCBkZSBFeGNlbGVuyJvEgyDDrm4gRWNvbm9taWUgyJlpIEZpbmFuyJtl!5e0!3m2!1sro!2s!4v1674937217666!5m2!1sro!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div class="contact-div">
                    <i class="fa-solid fa-house socialize"></i>
                    <span>
                        <h5>Telecentru</h5>
                        <p>Strada CEEF</p>
                    </span>
                </div>
                
                <div class="contact-div">
                    <i class="fa-solid fa-phone socialize"></i>
                    <span>
                        <h5>8 800 555</h5>
                        <p>Monday to Friday, 10 AM to 5 PM</p>
                    </span>
                </div>

                <div class="contact-div">
                    <i class="fa-solid fa-envelope socialize"></i>
                    <span>
                        <h5>info@ceef.md</h5>
                        <p>Email us for more information</p>
                    </span>
                </div>
            </div>

            <div class="contact-col">
                <form action="">
                    <input type="text" class="name" placeholder="Enter Your Name">
                    <input type="email" class="email" placeholder="Enter Your Email Adress">
                    <input type="text" class="subject" placeholder="Enter Your Subject">
                    <textarea rows="8" class="message" placeholder="Message"></textarea>
                    <button type="submit" class="hero-btn about-btn send-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>
  
    <!-- Footer -->
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

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>