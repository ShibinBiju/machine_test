<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    
    public function index()
    {
               // Fetch products with pagination
               $customers = User::whereNull('role')->paginate(5); 

            //    dd($coustomers);


               return view('admin.Coustomers.index', compact('customers'));
            
    }
}
