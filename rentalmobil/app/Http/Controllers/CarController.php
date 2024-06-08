<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $car = Car::all();
        return view('car.index', ['car' => $car]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('car.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'merek' => 'required',
            'type' => 'required',
            'tahun' => 'required',
            'status' => 'required',
            'price' => 'required',
        ]);
        
        $car = new Car;
 
        $car->merek = $request->merek;
        $car->type = $request->type;
        $car->tahun = $request->tahun;
        $car->status = $request->status;
        $car->price = $request->price;
 
        $car->save();

        return redirect('/car');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::find($id);
        return view('car.show', ['car' => $car]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::find($id);
        return view('car.edit', ['car' => $car]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'merek' => 'required',
            'type' => 'required',
            'tahun' => 'required',
            'status' => 'required',
            'price' => 'required',
        ]);

        $car = Car::find($id);
 
        $car->merek = $request['merek'];
        $car->type = $request['type'];
        $car->tahun = $request['tahun'];
        $car->status = $request['status'];
        $car->price = $request['price'];
 
        $car->save();

        return redirect('/car');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect('/car');
    }
}