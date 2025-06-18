<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body style="display: flex; flex-direction: column; min-height: 100vh; background: #1ddbac;
background: linear-gradient(0deg, rgba(29, 219, 172, 1) 0%, rgba(45, 156, 253, 1) 100%);">
    <section class="sub-header sub1" style="height: auto; min-height: 80px; background-image: none;">
        <nav>
            <a href="{{ url('/') }}"><img src="/img/logo.png" alt="" class="nav-img"></a>
            <div class="NavBar" id="NavLinks">
                <div class="nav-links">
                    <i class="fa-solid fa-xmark x-mark" onclick="hideMenu()"></i>
                    <a href="{{ url('/') }}" class="da" >Home</a>
                    <a href="{{ url('/events') }}" >Events</a>
                    <a href="{{ url('/about') }}" >About</a>
                    <a href="{{ url('/contact') }}" >Contact</a>
                    <a href="{{ route('login') }}">Log In</a>
                </div>
            </div>
            <i class="fa-sharp fa-solid fa-bars" onclick="showMenu()"></i>
        </nav>
    </section>

    <section class="contact-us" style="flex: 1; display: flex; justify-content: center; align-items: center;">
        <div class="row" style="width: 100%; display: flex; justify-content: center;">
            <div class="contact-col" style="background-color: rgba(255, 255, 255, 0.9); padding: 40px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); flex-basis: 40%; max-width: 400px;">
                <h1 style="text-align: center; margin-bottom: 20px; color: #333;">Login</h1>
                
                @if(session('error'))
                    <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 15px; text-align: center; border: 1px solid #f5c6cb;">
                        {{ session('error') }}
                    </div>
                @endif
                
                <form method="POST" action="{{ route('login.post') }}">
                    @csrf
                    <input type="text" name="name" placeholder="Name" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box;">
                    <input type="password" name="password" placeholder="Password" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box;">
                    <button type="submit" class="hero-btn about-btn" style="margin-top: 5px; width: 100%; padding: 10px; background-color: #E74C3C; color: white; border: none; border-radius: 5px; cursor: pointer;">Login</button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>