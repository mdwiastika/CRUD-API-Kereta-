<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Line;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $line = Line::all();
        try {
            return response()->json([
                'message' => 'Success get data',
                'data' => $line,
            ], 202);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 403);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'code' => 'required',
                'start_time_operation' => 'required',
                'end_time_operation' => 'required',
                'type' => 'required',
            ]);
            if ($request->hasFile('map')) {
                $validatedData['map'] = $request->file('map')->store('map');
            }
            $line = Line::create($validatedData);
            return response()->json([
                'message' => 'Success insert data',
                'data' => $line,
            ], 202);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Line  $line
     * @return \Illuminate\Http\Response
     */
    public function show(Line $line)
    {
        try {
            return response()->json([
                'message' => 'Show data ' . $line->code,
                'data' => $line,
            ], 202);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 503);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Line  $line
     * @return \Illuminate\Http\Response
     */
    public function edit(Line $line)
    {
        try {
            return response()->json([
                'message' => 'Edit data ' . $line->code,
                'data' => $line,
            ], 202);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 503);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Line  $line
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Line $line)
    {
        try {
            $validatedData = $request->validate([
                'code' => 'required',
                'type' => 'required',
                'start_time_operation' => 'required',
                'end_time_operation' => 'required'
            ]);
            if ($request->hasFile('map')) {
                Storage::delete($line->map);
                $validatedData['map'] = $request->file('map')->store('map');
            }
            $line->update($validatedData);
            return response()->json([
                'message' => 'Sukses update line',
                'data' => $line
            ], 202);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 503);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Line  $line
     * @return \Illuminate\Http\Response
     */
    public function destroy(Line $line)
    {
        try {
            $line->delete();
            return response()->json([
                'message' => 'Success delete data',
            ], 202);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 503);
        }
    }
}
