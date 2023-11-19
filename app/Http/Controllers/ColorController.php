<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function saveColor(Request $request)
    {
        $selectedColor = $request->input('color');
        
        // Process the selected color (e.g., save it to the database)
        
        return response()->json(['message' => 'Color saved successfully']);
    }
}
