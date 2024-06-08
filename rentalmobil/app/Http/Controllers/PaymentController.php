<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Rental;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payment = Payment::with(['rental'])->get();
        return view('payment.index', ['payment' => $payment]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rental = Rental::all();
        return view ('payment.add', ['rental' => $rental]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'total' => 'required',
            'pembayaran' => 'required',
            'rental_id' => 'required',
        ]);
        
        $payment = new Payment;
 
        $payment->total = $request->total;
        $payment->pembayaran = $request->pembayaran;
        $payment->rental_id = $request->rental_id;

 
        $payment->save();

        return redirect('/payment');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payment = Payment::find($id);
        return view('payment.show', ['payment' => $payment]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $payment = Payment::find($id);
            $rental = Rental::all();
        return view('payment.edit', ['payment' => $payment,'rental' => $rental]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'total' => 'required',
            'pembayaran' => 'required',
            'rental_id' => 'required',
        ]);

        $payment = Payment::find($id);
 
        $payment->total = $request['total'];
        $payment->pembayaran = $request['pembayaran'];
        $payment->rental_id = $request['rental_id'];

        $payment->save();

        return redirect('/payment');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $payment = Payment::find($id);
        $payment->delete();
        return redirect('/payment');
    }
}