<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;
use App\Models\Customer;
use App\Models\Car;


class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rental = Rental::all();
        return view('rental.index', ['rental' => $rental]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customer = Customer::all();
        $car = Car::all();
        return view ('rental.add', ['customer' => $customer,'car' => $car]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'peminjaman' => 'required',
            'pengembalian' => 'required',
            'customer_id' => 'required',
            'car_id' => 'required',
        ]);
        
        $rental = new Rental;
 
        $rental->peminjaman = $request->peminjaman;
        $rental->pengembalian = $request->pengembalian;
        $rental->customer_id = $request->customer_id;
        $rental->car_id = $request->car_id;

 
        $rental->save();

        return redirect('/rental');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rental = Rental::find($id);
        return view('rental.show', ['rental' => $rental]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rental = Rental::with(['car','customer'])->find($id);
        return view('rental.edit', ['rental' => $rental]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'peminjaman' => 'required',
            'pengembalian' => 'required',
            'customer_id' => 'required',
            'car_id' => 'required',
        ]);

        $rental = Rental::find($id);
 
        $rental->peminjaman = $request['peminjaman'];
        $rental->pengembalian = $request['pengembalian'];
        $rental->customer_id = $request['customer_id'];
        $rental->car_id = $request['car_id'];

        $rental->save();

        return redirect('/rental');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rental = Rental::find($id);
        $rental->delete();
        return redirect('/rental');
    }
}