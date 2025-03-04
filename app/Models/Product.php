<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'price',
        'status',
    ];



// Relationship with enquiries table
    public function productEnquiries()
    {
        return $this->hasMany(ProductEnquiry::class);
    }
}
