<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

           // Fetch products with pagination
           $products = Product::paginate(5); 


           return view('admin.products.index', compact('products'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    

        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image validation
            'description' => 'required|string', 
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:active,inactive',
        ]);
    
        // Sanitize description to remove any HTML tags (including <script>)
        $description = strip_tags($validated['description']);
    
        // Handle file upload if there's an image
        if ($request->hasFile('image')) {
            // Store image in the 'public/product_images' directory
            $imagePath = $request->file('image')->store('product_images', 'public');
        } else {
            // If no image is uploaded, set it to null
            $imagePath = null;
        }
    
        // Store the product data in the database
        Product::create([
            'name' => $validated['name'],
            'image' => $imagePath,
            'description' => $description, 
            'price' => $validated['price'],
            'status' => $validated['status'],
        ]);
    
        // Redirect back with a success message
        return redirect()->route('admin.products.index')->with('success', 'Product created successfully!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Find the product by ID or fail
        $product = Product::findOrFail($id);
        
        // Return the view with product data
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image validation
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:active,inactive',
        ]);

        // Find the product by ID or fail
        $product = Product::findOrFail($id);

        // Handle the file upload if there is a new image
        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($product->image) {
                \Storage::delete('public/' . $product->image);
            }

            // Store the new image
            $imagePath = $request->file('image')->store('product_images', 'public');
        } else {
            // If no new image, keep the old image path
            $imagePath = $product->image;
        }

        // Update the product with validated data
        $product->update([
            'name' => $validated['name'],
            'image' => $imagePath,
            'description' => $validated['description'],
            'price' => $validated['price'],
            'status' => $validated['status'],
        ]);

        // Redirect back to the product list with a success message
        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the product by ID or fail
        $product = Product::findOrFail($id);

        // Delete the product permanently from the database
        $product->delete();

        // Redirect back with success message
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully!');
    }
}
