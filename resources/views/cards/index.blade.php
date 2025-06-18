<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="display: flex; flex-direction: column; min-height: 100vh; background-color:#F6F6F6;">
    <section class="sub-header sub1" style="height: auto; min-height: 80px; background-image: none;">
        <nav>
            <a href="{{ url('/') }}"><img src="/img/logo.png" alt="" class="nav-img"></a>
            <div class="NavBar" id="NavLinks">
                <div class="nav-links">
                    <i class="fa-solid fa-xmark x-mark" onclick="hideMenu()"></i>
                    <a href="{{ url('/') }}" class="da" style="color: black;">Home</a>
                    <a href="{{ url('/events') }}" style="color: black;">Events</a>
                    <a href="{{ url('/about') }}" style="color: black;">About</a>
                    <a href="{{ url('/contact') }}" style="color: black;">Contact</a>
                    <a href="{{ route('login') }}" style="color: black;">Log In</a>
                </div>
            </div>
            <i class="fa-sharp fa-solid fa-bars" onclick="showMenu()"></i>
        </nav>
    </section>

    <h1 style="text-align: center; color: #333; font-size: 48px; margin-top: 50px;">Admin Panel</h1>
    
    <div style="width: 90%; margin: 50px auto; padding: 20px;">
        <div style="text-align: center; margin-bottom: 30px;">
            <a href="{{ route('cards.create') }}" style="background-color: #28a745; color: white; padding: 12px 24px; text-decoration: none; border-radius: 5px; display: inline-block;">Add New Card</a>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 20px;">
            @foreach($cards as $card)
            <div style="background: white; border-radius: 10px; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                <div style="text-align: center; margin-bottom: 15px;">
                    @if($card->image)
                        <img src="{{ asset($card->image) }}" alt="{{ $card->city }}" style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">
                    @else
                        <div style="width: 100%; height: 200px; background-color: #f8f9fa; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #6c757d;">
                            No Image
                        </div>
                    @endif
                </div>
                
                <h3 style="color: #333; margin-bottom: 10px; font-size: 20px;">{{ $card->city }}, {{ $card->country }}</h3>
                
                <div style="margin-bottom: 10px;">
                    <strong>Price:</strong> ${{ number_format($card->price, 2) }}
                </div>
                
                <div style="margin-bottom: 10px;">
                    <strong>Description:</strong> {{ $card->description }}
                </div>
                
                <div style="margin-bottom: 10px;">
                    <strong>Available:</strong> 
                    <span style="color: {{ $card->available ? '#28a745' : '#dc3545' }};">
                        {{ $card->available ? 'Yes' : 'No' }}
                    </span>
                </div>
                
                <div style="margin-bottom: 10px;">
                    <strong>Date Start:</strong> {{ $card->date_start->format('M d, Y') }}
                </div>
                
                <div style="margin-bottom: 15px;">
                    <strong>Date End:</strong> {{ $card->date_end->format('M d, Y') }}
                </div>
                
                <div style="display: flex; gap: 10px; justify-content: center;">
                    <a href="{{ route('cards.edit', $card) }}" style="background-color: #007bff; color: white; padding: 8px 16px; text-decoration: none; border-radius: 5px; font-size: 14px;">Edit</a>
                    <a href="{{ route('cards.show', $card) }}" style="background-color: #17a2b8; color: white; padding: 8px 16px; text-decoration: none; border-radius: 5px; font-size: 14px;">View</a>
                    <form method="POST" action="{{ route('cards.destroy', $card) }}" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this card?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background-color: #dc3545; color: white; padding: 8px 16px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer;">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        
        @if($cards->count() == 0)
            <div style="text-align: center; padding: 50px; color: #6c757d;">
                <h3>No cards found</h3>
                <p>Create your first card to get started!</p>
            </div>
        @endif
    </div>
</body>
</html>
