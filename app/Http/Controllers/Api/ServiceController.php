<?php

namespace App\Http\Controllers\Api;

use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Import Http Facade

class ServiceController extends Controller
{
    // Mendapatkan semua layanan
    public function index()
    {
        // Mendapatkan data layanan dari API eksternal
        $apiUrl = env('API_URL');
        $response = Http::get($apiUrl . '/api/services');

        // Mengambil data dari response API, atau bisa menggunakan Service::all() jika perlu
        $services = $response->json(); 

        // Kembalikan data yang diterima dari API atau data lokal sesuai kebutuhan
        return response()->json($services);
    }

    // Menyimpan layanan baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        // Membuat layanan baru
        $service = Service::create($validated);

        // Mengembalikan response dengan status 201 (created)
        return response()->json($service, 201);
    }

    // Menampilkan layanan berdasarkan ID
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return response()->json($service);
    }

    // Memperbarui layanan berdasarkan ID
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        // Memperbarui layanan dengan data yang diterima
        $service->update($request->all());

        return response()->json($service);
    }

    // Menghapus layanan berdasarkan ID
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return response()->json(null, 204);
    }
}
