<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceViewController extends Controller
{
    // Menampilkan semua layanan di halaman service.blade.php
    public function index()
    {
        // Ambil semua layanan dari database
        $services = Service::all();

        // Kirim data layanan ke view 'service'
        return view('service', compact('services'));
    }
}
