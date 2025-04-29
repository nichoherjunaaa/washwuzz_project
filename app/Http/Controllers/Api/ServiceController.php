<?php

namespace App\Http\Controllers\Api;

use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Mendapatkan semua layanan
    public function index()
    {
        $services = Service::all(); // Ambil langsung dari DB lokal
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

        $service = Service::create($validated);
        return response()->json($service, 201);
    }

    // Menampilkan layanan berdasarkan ID
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return response()->json($service);
    }

    // Memperbarui layanan
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->update($request->all());

        return response()->json($service);
    }

    // Menghapus layanan
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return response()->json(null, 204);
    }

    // Menampilkan layanan ke view (jika diperlukan frontend blade)
    public function viewService()
    {
        $services = Service::all();
        return view('service', compact('services'));
    }
}
