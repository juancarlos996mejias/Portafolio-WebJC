<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Por ahora solo simulamos el envío
        return back()->with('success', 'Gracias por tu mensaje. Me pondré en contacto contigo pronto.');
    }
}

$request->validate([
    'name' => 'required|string|min:3',
    'email' => 'required|email',
    'message' => 'required|string|min:10',
]);


