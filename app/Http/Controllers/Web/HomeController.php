<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mail\EnquiryMail;
use App\Models\Product;
use App\Models\ProductEnquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {


        //shows only active products
        $products = Product::where('status', 'active')->paginate(6);

        return view('web.home.index', compact('products'));
    }


    public function details(Product $product, $id)
    {

        $product = Product::findOrFail($id);


        return view('web.home.details', compact('product', 'id'));
    }


    public function enquiry($id)
    {

        info('id in enquery funciton'. $id);

        return view('web.home.enquiry', compact('id'));
    }
        


    public function enquiryStore(Request $request)
    {
        try {
            info('id in enquiry store fn: ' . $request->id);
    
            // Validate the form data
            $validated = $request->validate([
                'customer_name' => 'required|string|max:255',
                'message' => 'required|string',
            ]);
    
            // Get the authenticated user
            $user = auth()->user();
    
            // Store the enquiry in the database
            $enquiry = ProductEnquiry::create([
                'product_id' => $request->id, // Passed as hidden input
                'customer_id' => $user->id,           
                'customer_name' => $validated['customer_name'],
                'customer_email' => $user->email, // Get from authenticated user
                'message' => $validated['message'],
                'status' => 'pending', // Default to 'pending'
            ]);
    
            // Send email notification
            Mail::to('admin@example.com')->send(new EnquiryMail($enquiry));
    
            return redirect()->route('web.home.index')->with('error', 'Something went wrong. Please try again later.');
    
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Error in enquiryStore: ' . $e->getMessage());
    
        }

        return redirect()->route('web.home.index')->with('error', 'Something went wrong. Please try again later.');


    }


    }
    
