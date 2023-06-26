<?php

namespace App\Http\Controllers;

use App\Models\Memory;
use App\Http\Requests\StoreMemoryRequest;
use App\Http\Requests\UpdateMemoryRequest;

class MemoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Memory::query()->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMemoryRequest $request)
    {
        Memory::query()->create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Memory $memory)
    {
        return $memory;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Memory $memory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMemoryRequest $request, Memory $memory)
    {
        $memory->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Memory $memory)
    {
        $memory->delete();
    }
}
