<x-app-layout>

    {{-- Content --}}
    <div class="flex-1 p-6">
        <!-- Top Bar -->
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-3xl font-semibold text-gray-900 dark:text-white">Welcome to the Admin Dashboard</h3>
        </div>
        <div>
            <a href="{{ route('admin.products.create') }}" class="bg-white text-green-500 py-2 px-4 rounded border border-green-500 hover:bg-gray-100 transition">Create</a>
        </div>
        <br>
        <br>
        
        

        <!-- Products Table -->
        <div class="overflow-x-auto bg-white dark:bg-gray-700 rounded-lg shadow-lg">
            <table class="min-w-full table-auto text-left">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-6 py-3">Product Name</th>
                        <th class="px-6 py-3">Description</th>
                        <th class="px-6 py-3">Price</th>
                        <th class="px-6 py-3">Image</th>
                        <th class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-800 dark:text-white">
                    <!-- Example product row 1 -->
                    @foreach ($products as $product)
                    <tr>
                        <td class="px-6 py-4">{{ $product->name }}</td>
                        <td class="px-6 py-4">{{ $product->description }}</td>
                        <td class="px-6 py-4">${{ number_format($product->price, 2) }}</td>
                        <td class="px-6 py-4">
                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 100px; height:100px;" class="object-cover rounded">
                            @else
                                No image
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Edit</a>
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                    <!-- Add more product rows here -->
                </tbody>
            </table>
        </div>
         <!-- Pagination Links -->
         <div class="mt-4">
            {{ $products->links() }} <!-- Display pagination links -->
        </div>
    </div>

</x-app-layout>
