<?php

namespace App\Http\Controllers;

use App\Models\TransportUnit;
use Illuminate\Http\Request;

class TransportUnitController extends Controller
{
    public function index(Request $request)
    {
        $query = TransportUnit::query();

        // Apply type filter
        if ($request->has('type') && $request->type !== 'all') {
            $query->where('type', $request->type);
        }

        // Apply search filter
        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $units = $query->get();

        return response()->json($units);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:truck,trailer',
        ]);

        $unit = TransportUnit::create($request->all());

        return response()->json($unit, 201);
    }
}
