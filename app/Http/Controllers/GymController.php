<?php
namespace App\Http\Controllers;

use App\Models\Gym;
use Illuminate\Http\Request;

class GymController extends Controller
{
    public function index()
    {
        return response()->json(Gym::all());
    }

    public function store(Request $request)
    {
        $gym = Gym::create($request->validate([
            'brand_name' => 'required|string|max:255',
            'photo' => 'nullable|string',
            'accent_color' => 'nullable|string',
        ]));

        return response()->json($gym, 201);
    }

    public function show(Gym $gym)
    {
        return response()->json($gym);
    }

    public function update(Request $request, Gym $gym)
    {
        $gym->update($request->all());
        return response()->json($gym);
    }

    public function destroy(Gym $gym)
    {
        $gym->delete();
        return response()->json(['message' => 'Gym deleted successfully']);
    }
}
