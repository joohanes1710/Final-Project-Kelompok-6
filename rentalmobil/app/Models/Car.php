<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = "car";
    protected $fillable = ["merek", "type", "tahun", "status", "price"];

    public function rental(): BelongsTo
    {
        return $this->hasMany(Rental::class);
    }
}