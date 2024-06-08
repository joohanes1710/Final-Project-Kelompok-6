<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rental extends Model
{
    use HasFactory;
    protected $table = "rental";
    protected $fillable = ["peminjaman", "pengembalian", "customer_id","car_id"];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
}