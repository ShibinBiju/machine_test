@extends('layouts.app-web')
@section('content')


<div class="container mx-auto px-4 py-8">
    <h2 class="text-3xl font-semibold text-center mb-6">Products</h2>

    <!-- Product Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($products as $product)
            <div class="bg-white border rounded-lg shadow-lg p-4">
                <div class="h-48 overflow-hidden">
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 100px; height: 100px;" class=" object-cover rounded-lg">
                    @else
                        <img src="https://via.placeholder.com/300x200" alt="No Image" class="w-full h-full object-cover rounded-lg">
                    @endif
                </div>
                <h3 class="text-lg font-semibold mt-4">{{ $product->name }}</h3>
                {{-- <p class="text-gray-500 mt-2">{{ Str::limit($product->description, 100) }}</p> --}}
                <div class="flex justify-between items-center mt-4">
                    <span class="text-xl font-bold">${{ number_format($product->price, 2) }}</span>
                    <a href="{{ route('web.product.details', $product->id) }}" class="bg-blue-500 py-2 px-4 rounded hover:bg-blue-600">View Details</a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination (if applicable) -->
    <div class="mt-6">
        {{ $products->links() }} <!-- Add pagination links -->
    </div>
</div>


@endsection