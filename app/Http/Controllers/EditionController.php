<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditionRequest;
use App\Models\Edition;

class EditionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Edition::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EditionRequest $request)
    {
        $edition = Edition::factory()->create($request->all());

        return response()->json($edition);
    }

    /**
     * Display the specified resource.
     */
    public function show(Edition $edition)
    {
        return response()->json($edition);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditionRequest $request, Edition $edition)
    {
        $edition->update($request->all());

        return response()->json($edition);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Edition $edition)
    {
        return response()->json($edition->delete());
    }
}
