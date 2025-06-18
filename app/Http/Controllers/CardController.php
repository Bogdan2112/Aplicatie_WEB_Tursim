<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use Illuminate\Support\Facades\Storage;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cards = Card::latest()->paginate(10);
        return view('cards.index', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cards.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'available' => 'required|boolean',
            'date_start' => 'required|date',
            'date_end' => 'required|date|after_or_equal:date_start',
            'image' => 'required|string|max:255',
        ]);

        Card::create($validated);

        return redirect()->route('cards.index')->with('success', 'Card added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Card $card)
    {
        return view('cards.show', compact('card'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Card $card)
    {
        return view('cards.edit', compact('card'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Card $card)
    {
        $validated = $request->validate([
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string|max:125',
            'image' => 'nullable|string|max:255',
            'available' => 'boolean',
            'date_start' => 'required|date',
            'date_end' => 'required|date|after:date_start',
            'departure_location' => 'nullable|string|max:255',
            'departure_time' => 'nullable|string|max:255',
            'excursions' => 'nullable|string|max:255',
            'meal_type' => 'nullable|string|max:255',
        ]);

        if (isset($validated['image'])) {
            if (!empty($validated['image'])) {
                // Delete old image if it existed and is different from the new one
                if ($card->image && $card->image !== ('img/' . $validated['image'])) {
                    Storage::disk('public')->delete($card->image);
                }
                $validated['image'] = 'img/' . $validated['image'];
            } else {
                // If new image is empty, and old one existed, delete old image
                if ($card->image) {
                    Storage::disk('public')->delete($card->image);
                }
                $validated['image'] = null;
            }
        }

        $card->update($validated);

        return redirect()->route('cards.index')
            ->with('success', 'Card updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Card $card)
    {
        if ($card->image) {
            Storage::disk('public')->delete($card->image);
        }
        
        $card->delete();

        return redirect()->route('cards.index')
            ->with('success', 'Card deleted successfully.');
    }
}
