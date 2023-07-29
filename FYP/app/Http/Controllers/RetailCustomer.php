<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tile;
use League\ColorExtractor\Color;
use League\ColorExtractor\ColorExtractor;
use League\ColorExtractor\Palette;
use Illuminate\Support\Facades\Log;

class RetailCustomer extends Controller
{
    public function showSimilarTiles(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
        $imagePath = $request->file('image')->path();
        $palette = Palette::fromFilename($imagePath);
        $extractor = new ColorExtractor($palette);
        $colors = $extractor->extract();
        foreach ($colors as $color) {
        $color = Color::fromIntToHex($color);
        }
        $tiles = Tile::all();
        $rgb=$this->hexToRgb($color);
        $sortedTiles = $tiles->map(function ($tile) use ($rgb) {
            $tileColorRgb = $this->hexToRgb($tile->color);
            $distance = $this->calculateColorDistance($rgb, $tileColorRgb);
            
            // Add a new attribute to each tile with the distance from the given color
            $tile['colorDistance'] = $distance;
            return $tile;
        })->sortBy('colorDistance')->values()->toArray();
        Log::info($sortedTiles);
        return response()->json(['tiles' => $sortedTiles]);
    }
    public function hexToRgb($hexCode) {
        // Remove the "#" character from the hexadecimal color code if present
        $hexCode = ltrim($hexCode, '#');
        
        // Extract the red, green, and blue components
        $red = hexdec(substr($hexCode, 0, 2));
        $green = hexdec(substr($hexCode, 2, 2));
        $blue = hexdec(substr($hexCode, 4, 2));
    
        // Return the RGB representation as an associative array
        return [
            'red' => $red,
            'green' => $green,
            'blue' => $blue
        ];
    }
    public function calculateColorDistance($color1, $color2) {
        // Calculate the Euclidean distance between two RGB colors
        $distance = sqrt(
            pow($color2['red'] - $color1['red'], 2) +
            pow($color2['green'] - $color1['green'], 2) +
            pow($color2['blue'] - $color1['blue'], 2)
        );
    
        return $distance;
    }
}
