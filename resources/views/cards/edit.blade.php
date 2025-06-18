<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Card - {{ $card->city }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="display: flex; flex-direction: column; min-height: 100vh; background-color: #F6F6F6;">
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

    <h1 style="text-align: center; color: #333; font-size: 48px; margin-top: 50px; margin-bottom: 30px;">Edit Card: {{ $card->city }}</h1>
    
    <div style="width: 90%; max-width: 700px; margin: 0 auto 50px auto; padding: 30px; background-color: white; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
        @if ($errors->any())
            <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #f5c6cb;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('cards.update', $card->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div style="margin-bottom: 20px;">
                <label for="city" style="display: block; margin-bottom: 8px; font-weight: bold; color: #555;">City:</label>
                <input type="text" id="city" name="city" value="{{ old('city', $card->city) }}" required 
                       style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="country" style="display: block; margin-bottom: 8px; font-weight: bold; color: #555;">Country:</label>
                <input type="text" id="country" name="country" value="{{ old('country', $card->country) }}" required 
                       style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="price" style="display: block; margin-bottom: 8px; font-weight: bold; color: #555;">Price:</label>
                <input type="number" id="price" name="price" value="{{ old('price', $card->price) }}" required step="0.01"
                       style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="description" style="display: block; margin-bottom: 8px; font-weight: bold; color: #555;">Description:</label>
                <textarea id="description" name="description" required rows="4" 
                          style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; resize: vertical;">{{ old('description', $card->description) }}</textarea>
            </div>

            <div style="margin-bottom: 20px;">
                <label for="image" style="display: block; margin-bottom: 8px; font-weight: bold; color: #555;">Image Name:</label>
                @if($card->image)
                    <div style="margin-bottom: 10px;">
                        <img src="{{ asset($card->image) }}" alt="Current Image" style="max-width: 200px; height: auto; border-radius: 5px; border: 1px solid #ddd;">
                        <p style="font-size: 12px; color: #777; margin-top: 5px;">Current Image</p>
                    </div>
                @endif
                <input type="text" id="image" name="image" value="{{ old('image', str_replace('cards/img/', '', $card->image)) }}"
                       style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box;">
                <p style="font-size: 12px; color: #777; margin-top: 5px;">Enter the image filename (e.g., image 7.png). The system will add 'cards/img/' automatically.</p>
            </div>

            <div style="margin-bottom: 20px;">
                <label for="available" style="display: block; margin-bottom: 8px; font-weight: bold; color: #555;">Available:</label>
                <input type="checkbox" id="available" name="available" value="1" {{ old('available', $card->available) ? 'checked' : '' }}
                       style="margin-right: 5px;"> Yes
            </div>

            <div style="margin-bottom: 20px;">
                <label for="date_start" style="display: block; margin-bottom: 8px; font-weight: bold; color: #555;">Date Start:</label>
                <input type="date" id="date_start" name="date_start" value="{{ old('date_start', $card->date_start ? $card->date_start->format('Y-m-d') : '') }}" required
                       style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="date_end" style="display: block; margin-bottom: 8px; font-weight: bold; color: #555;">Date End:</label>
                <input type="date" id="date_end" name="date_end" value="{{ old('date_end', $card->date_end ? $card->date_end->format('Y-m-d') : '') }}" required
                       style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box;">
            </div>

            <div style="display: flex; gap: 10px; justify-content: flex-end; margin-top: 30px;">
                <button type="submit" style="background-color: #28a745; color: white; padding: 12px 25px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">Update Card</button>
                <a href="{{ route('admin.edit') }}" style="background-color: #6c757d; color: white; padding: 12px 25px; text-decoration: none; border-radius: 5px; font-size: 16px;">Cancel</a>
            </div>
        </form>
    </div>

    
</body>
</html> 