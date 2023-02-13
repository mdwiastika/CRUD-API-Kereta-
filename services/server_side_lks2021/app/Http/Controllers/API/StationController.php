<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Station;
use Illuminate\Http\Request;

class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $station = Station::with('line')->get();
            return response()->json([
                'message' => 'Success get data',
                'data' => $station,
            ], 202);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 503);
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
                'name' => 'required',
                'position_station' => 'required',
                'line_id' => 'required',
            ]);
            $station = Station::create($validatedData);
            return response()->json([
                'message' => 'Success insert data',
                'data' => $station,
            ], 202);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 503);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function show(Station $station)
    {
        try {
            return response()->json([
                'message' => 'Show station',
                'data' => $station,
            ], 202);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 503);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function edit(Station $station)
    {
        try {
            return response()->json([
                'message' => 'Get Edit Data',
                'data' => $station
            ], 200);
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'message' => $th->getMessage(),
                ],
                503
            );
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Station $station)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required',
                'position_station' => 'required',
                'line_id' => 'required',
            ]);
            $station->update($validatedData);
            return response()->json([
                'message' => 'Success update data',
                'data' => $station,
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
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function destroy(Station $station)
    {
        try {
            $station->delete();
            return response()->json([
                'message' => 'Success delete station'
            ], 202);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 503);
        }
    }
}
