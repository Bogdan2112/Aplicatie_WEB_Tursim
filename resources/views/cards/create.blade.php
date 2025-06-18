@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 600px; margin: 40px auto; background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
    <h2 style="margin-bottom: 25px;">Add New Card</h2>
    @if ($errors->any())
        <div style="color: #dc3545; margin-bottom: 20px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('cards.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div style="margin-bottom: 15px;">
            <label for="city">City</label>
            <input type="text" name="city" id="city" class="form-control" required>
        </div>
        <div style="margin-bottom: 15px;">
            <label for="country">Country</label>
            <input type="text" name="country" id="country" class="form-control" required>
        </div>
        <div style="margin-bottom: 15px;">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control" step="0.01" required>
        </div>
        <div style="margin-bottom: 15px;">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
        </div>
        <div style="margin-bottom: 15px;">
            <label for="available">Available</label>
            <select name="available" id="available" class="form-control" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        <div style="margin-bottom: 15px;">
            <label for="date_start">Date Start</label>
            <input type="date" name="date_start" id="date_start" class="form-control" required>
        </div>
        <div style="margin-bottom: 15px;">
            <label for="date_end">Date End</label>
            <input type="date" name="date_end" id="date_end" class="form-control" required>
        </div>
        <div style="margin-bottom: 20px;">
            <label for="image">Image Path</label>
            <input type="text" name="image" id="image" class="form-control" required>
        </div>
        <button type="submit" class="ctn" style="background-color: #E74C3C; color: white; padding: 12px 25px; border: none; border-radius: 5px; cursor: pointer; font-size: 1.1em; transition: background-color 0.3s;">Add Card</button>
    </form>
</div>
@endsection 