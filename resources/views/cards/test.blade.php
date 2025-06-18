<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cards Test</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz@0,6..12;1,6..12&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
            <h1>Cards Test</h1>
            <div class="line"></div>
        </div>
    </section>

    <section class="card-gallery-section">
        <div class="card-gallery">
            @foreach($cards as $card)
            <div class="full-card">
                <div class="card">
                    <div class="poster">
                        <img src="{{ asset($card->image) }}" alt="{{ $card->city }}">
                    </div>
                    
                </div>
                <div class="name">
                    <p>{{ $card->city }}</p>
                    <a href="{{ route('cards.show', $card) }}" class="ctn">Learn More</a>
                </div>
            </div>
            @endforeach
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