<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use Illuminate\Support\facades\validator;

class inquriyController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|digits:10',
            'email' => 'required|email',
            'services' => 'required|string',
            'project_details' => 'required|string',
        ]);

        Inquiry::create([
            'name' => $request->name,
            'number' => $request->number,
            'email' => $request->email,
            'services' => $request->services,
            'project_details' => $request->project_details,
        ]);
        // return redirect()->route('frontend.home')->with('success', 'Inquiry submitted successfully!');

        return response()->json([
            'status' => 'success',
            'message' => 'Thank you for submitting your inquiry.We appreciate your interest in our services/products and are currently reviewing your request. Our team will get back to you as soon as possible with the information you need.',
        ]);
    }
}
