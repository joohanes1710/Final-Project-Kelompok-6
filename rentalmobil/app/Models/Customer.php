<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customer";
    protected $fillable = ["nama", "alamat", "telepon","user_id"];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function rental()
    {
        return $this->hasMany(Rental::class);
    }
}