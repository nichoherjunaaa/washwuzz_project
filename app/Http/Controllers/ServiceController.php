<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        try {
            $services = Service::all();

            return view('pages.service', compact('services'));

        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Something went wrong: ' . $e->getMessage());
        }
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        try {
            $service = Service::create(attributes: $validated);
            return response()->json($service, 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to create service',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function show($id)
    {
        try {
            $service = Service::find($id);

            if (!$service) {
                if (request()->wantsJson()) {
                    return response()->json([
                        'message' => 'Service not found!'
                    ], 404);
                }

                return redirect()->back()->withErrors('Service not found!');
            }

            if (request()->wantsJson()) {
                return response()->json($service);
            }

            return view('pages.service_detail', compact('service'));

        } catch (\Exception $e) {
            if (request()->wantsJson()) {
                return response()->json([
                    'message' => 'An error occurred while retrieving the service',
                    'error' => $e->getMessage()
                ], 500);
            }

            return redirect()->back()->withErrors('An error occurred: ' . $e->getMessage());
        }
    }


    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        if (!$service) {
            return response()->json([
                'message' => 'Service not found, failed update',
            ], 404);
        }

        try {
            $service->update($request->all());
            return response()->json($service);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // Menghapus layanan
    public function destroy($id)
    {
        try {
            $service = Service::findOrFail($id);
            $service->delete();
            return response()->json([
                'message' => 'Success delete service'
            ], 200);
        } catch (\Exception $e) {
            if ($e instanceof ModelNotFoundException) {
                return response()->json([
                    'message' => 'Service not found, failed delete',
                ], 404);
            }

            return response()->json([
                'message' => 'An error occurred while deleting the service',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
