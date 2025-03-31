<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublicationRequest;
use App\Models\Publication;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Publication::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PublicationRequest $request)
    {
        $publication = Publication::factory()->create($request->all());

        return response()->json($publication);
    }

    /**
     * Display the specified resource.
     */
    public function show(Publication $publication)
    {
        return response()->json($publication);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PublicationRequest $request, Publication $publication)
    {
        $publication->update($request->all());

        return response()->json($publication);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publication)
    {
        return response()->json($publication->delete());
    }
}
