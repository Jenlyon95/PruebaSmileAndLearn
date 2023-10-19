<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\GuardarDreamerRequest;
use App\Models\Dreamer;
use Illuminate\Http\Request;

class DreamerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Dreamer::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuardarDreamerRequest $request)
    {
        Dreamer::create($request->all());
        return response()->json([
            'res'=> true,
            'msg'=> 'Dreamer creado correctamente.'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
