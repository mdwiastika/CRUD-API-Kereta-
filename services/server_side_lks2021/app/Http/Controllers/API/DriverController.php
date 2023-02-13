<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $driver = Driver::with('vehicle')->get();
            return response()->json([
                'message' => 'Success get data',
                'data' => $driver,
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
                'birth_date' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'type' => 'required',
                'vehicle_id' => 'required',
            ]);
            if ($request->hasFile('avatar')) {
                $validatedData['avatar'] = $request->file('avatar')->store('avatar');
            }
            $driver = Driver::create($validatedData);
            return response()->json([
                'message' => 'Success get data',
                'data' => $driver,
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
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        $drr = Driver::where('id', $driver->id)->with('vehicle')->first();
        try {
            return response()->json([
                'message' => 'Edit Driver',
                'data' => $drr,
            ], 202);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage()
            ], 503);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required',
                'birth_date' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'type' => 'required',
                'vehicle_id' => 'required',
            ]);
            if ($request->hasFile('avatar')) {
                Storage::delete($driver->avatar);
                $validatedData['avatar'] = $request->file('avatar')->store('avatar');
            }
            $driver->update($validatedData);
            return response()->json([
                'message' => 'Success update data',
                'data' => $driver,
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
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        try {
            Storage::delete($driver->avatar);
            $driver->delete();
            return response()->json([
                'message' => 'Success destroy data'
            ], 202);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 503);
        }
    }
}
