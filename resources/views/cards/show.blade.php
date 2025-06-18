<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $card->city }} Details</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz@0,6..12;1,6..12&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @media (max-width: 768px) {
            .container {
                flex-direction: column; 
                align-items: center;
            }
            .details-left, .details-right {
                max-width: 100% !important;
                min-width: unset !important;
                width: 100%;
            }
            .details-left {
                text-align: center;
            }
            .details-right img {
                margin: 0 auto;
                display: block;
            }
        }

        .ctn:hover {
            background-color: #c0392b !important; /* Darker red on hover */
        }

    </style>
</head>
<body style="display: flex; flex-direction: column; min-height: 100vh; background-color: #F6F6F6;">
    <div class="main-content-wrapper" style="display: flex; flex-direction: column; min-height: 100vh;">
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
            <h1>{{ $card->city }}</h1>
            <div class="line"></div>
        </div>
    </section>

        <section class="card-details-section" style="padding: 0px 20px; flex-grow: 1; margin-top: 40px; margin-bottom: 40px;">
            <div class="container" style="display: flex; flex-wrap: wrap; justify-content: center; align-items: flex-start; gap: 40px; max-width: 1200px; margin: 0 auto; padding: 40px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                <!-- Text -->
                <div class="details-left" style="flex: 1; min-width: 300px; max-width: 500px;">
                    <h2 style="font-size: 2.2em; margin: 0 0 20px;">{{ $card->city }} Details</h2>
                    <div style="margin-bottom: 10px; font-size: 1.1em;"><strong>Price:</strong> Starting from ${{ number_format($card->price, 2) }}</div>
                    <div style="margin-bottom: 10px; font-size: 1.1em;"><strong>Country:</strong> {{ $card->country }}</div>
                    <div style="margin-bottom: 10px; font-size: 1.1em;"><strong>Description:</strong> {{ $card->description }}</div>
                    <div style="margin-bottom: 10px; font-size: 1.1em;"><strong>Available:</strong> <span style="color: {{ $card->available ? '#28a745' : '#dc3545' }}; font-weight: bold;">{{ $card->available ? 'Yes' : 'No' }}</span></div>
                    <div style="margin-bottom: 10px; font-size: 1.1em;"><strong>Date Start:</strong> {{ \Carbon\Carbon::parse($card->date_start)->format('d M Y') }}</div>
                    <div style="margin-bottom: 30px; font-size: 1.1em;"><strong>Date End:</strong> {{ \Carbon\Carbon::parse($card->date_end)->format('d M Y') }}</div>
                    <button class="ctn" style="background-color: #E74C3C; color: white; padding: 12px 25px; border: none; border-radius: 5px; cursor: pointer; font-size: 1.1em; transition: background-color 0.3s;">Make a Reservation</button>
                </div>

                <!-- Imagine -->
                <div class="details-right" style="flex: 1; min-width: 300px; max-width: 350px; margin-left: auto; text-align: center; overflow: hidden; border-radius: 20px; background-image: url('{{ asset($card->image) }}'); background-size: cover; background-position: center; min-height: 400px;"></div>
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
        
    </div>
</body>
</html> 