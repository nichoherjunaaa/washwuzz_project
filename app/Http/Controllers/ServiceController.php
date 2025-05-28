<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('pages.service', compact('services'));
    }

    public function indexHome()
    {
        $services = Service::orderBy('id', 'asc')->take(3)->get();
        return view('pages.home', compact('services'));
    }

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

    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('pages.service_detail', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->update($request->all());
        return response()->json($service);
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return response()->json(['message' => 'Success delete service']);
    }
}
