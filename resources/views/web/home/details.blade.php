@extends('layouts.app-web') 

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Product Detail Section -->
    <div class="bg-white border rounded-lg shadow-lg p-6 max-w-3xl mx-auto">
        <div class="flex flex-col md:flex-row">

            <div class="md:w-1/3 mb-6 md:mb-0">
                @if ($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-72 object-cover rounded-lg">
                @else
                    <img src="https://via.placeholder.com/300x200" alt="No Image" class="w-full h-72 object-cover rounded-lg">
                @endif
            </div>

            <!-- Product Details -->
            <div class="md:w-2/3 md:pl-6">
                <h2 class="text-3xl font-bold">{{ $product->name }}</h2>
                <p class="text-lg text-gray-600 mt-2">{{ $product->description }}</p>
                <p class="text-xl font-bold mt-4">${{ number_format($product->price, 2) }}</p>
                
                <div class="mt-6">
                    <a href="{{ route('web.product.enquiry', $id) }}" class="bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600">Click Here to enquire about the product</a>
                    {{-- <a href="{{ route('web.product.index') }}" class="bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600">Back to Products</a> --}}
                    {{-- <form action="{{ route('web.product.enquiry', $id) }}" method="POST" class="inline-block">
                        @csrf
                        <button type="submit" class="bg-green-500 py-2 px-4 rounded hover:bg-green-600 mt-4">click here to Inquire about this product</button>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
