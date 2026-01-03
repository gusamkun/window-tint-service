<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $phone = '628123456789'; // GANTI NOMOR WA KAMU

        $message = urlencode(
            "Halo, saya tertarik dengan layanan:\n".
            "Nama: {$request->name}\n".
            "Pesan: {$request->message}"
        );

        return redirect("https://wa.me/$phone?text=$message");
    }
}
