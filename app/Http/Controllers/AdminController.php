<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Admin::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminRequest $request)
    {
        $admin = Admin::factory()->create($request->all());

        return response()->json($admin);
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        return response()->json($admin);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminRequest $request, Admin $admin)
    {
        $admin->update($request->all());

        return response()->json($admin);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        return response()->json($admin->delete());
    }
}
