<?php
namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        return response()->json(Plan::all());
    }

    public function store(Request $request)
    {
        $plan = Plan::create($request->validate([
            'gym_id' => 'required|exists:gyms,id',
            'name' => 'required|string|max:255',
            'type' => 'required|in:monthly,quarterly,yearly,special',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]));

        return response()->json($plan, 201);
    }

    public function show(Plan $plan)
    {
        return response()->json($plan);
    }

    public function update(Request $request, Plan $plan)
    {
        $plan->update($request->all());
        return response()->json($plan);
    }

    public function destroy(Plan $plan)
    {
        $plan->delete();
        return response()->json(['message' => 'Plan deleted successfully']);
    }
}
