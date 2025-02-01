<x-app-layout>
    <div class="flex justify-center p-6">
        <div class="w-full max-w-lg bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Edit Product</h2>

            <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Use PUT method for updates -->
                
                <!-- Product Name -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
                    @error('name')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Product Image -->
                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">Product Image</label>
                    <input type="file" id="image" name="image" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                    @if ($product->image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="Current Image" style="width: 100px; height: 100px;">
                        </div>
                    @endif
                    @error('image')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Product Description -->
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Product Description</label>
                    <textarea id="description" name="description" rows="4" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>{{ old('description', $product->description) }}</textarea>
                    @error('description')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Product Price -->
                <div class="mb-4">
                    <label for="price" class="block text-sm font-medium text-gray-700">Product Price</label>
                    <input type="number" step="0.01" id="price" name="price" value="{{ old('price', $product->price) }}" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
                    @error('price')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Product Status -->
                <div class="mb-4">
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select id="status" name="status" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
                        <option value="active" {{ old('status', $product->status) == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ old('status', $product->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" class="bg-green-500  py-2 px-6 rounded hover:bg-green-600 transition">Update Product</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
