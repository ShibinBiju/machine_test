<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductEnquiry;
use Illuminate\Http\Request;

class ProductEnquirieController extends Controller
{
    
    public function index()
    {
            //    // Fetch products with pagination
               $enquiries = ProductEnquiry::paginate(5); 

            //    dd($enquiries);


               return view('admin.enquiries.index', compact('enquiries'));
            
    }
}
