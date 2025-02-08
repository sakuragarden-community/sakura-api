<?php

namespace App\Http\Controllers;

use App\Http\Requests\AreaRequest;
use App\Models\Area;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Area::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AreaRequest $request)
    {
        $area = Area::factory()->create($request->all());

        return response()->json($area);
    }

    /**
     * Display the specified resource.
     */
    public function show(Area $area)
    {
        return response()->json($area);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AreaRequest $request, Area $area)
    {
        $area->update($request->all());

        return response()->json($area);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        return response()->json($area->delete());
    }
}
