<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductEnquiry extends Model
{
    use HasFactory;


    protected $fillable = [
        'product_id',
        'customer_id',
        'customer_name',
        'customer_email',
        'message',
        'status',
    ];



       // Relationship: A product enquiry belongs to a product
       public function product()
       {
           return $this->belongsTo(Product::class);
       }
   
       // Relationship: A product enquiry belongs to a customer (user)
       public function customer()
       {
           return $this->belongsTo(User::class, 'customer_id');
       }
}
