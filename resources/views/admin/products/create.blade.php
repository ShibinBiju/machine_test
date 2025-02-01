<x-app-layout>
    <div class="flex justify-center p-6">
        <div class="w-full max-w-lg bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create New Product</h2>

            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Product Name -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
                    <input type="text" id="name" name="name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
                </div>

                <!-- Product Image -->
                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">Product Image</label>
                    <input type="file" id="image" name="image" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Product Description -->
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Product Description</label>
                    <textarea id="description" name="description" rows="4" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required></textarea>
                </div>

                <!-- Product Price -->
                <div class="mb-4">
                    <label for="price" class="block text-sm font-medium text-gray-700">Product Price</label>
                    <input type="number" step="0.01" id="price" name="price" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
                </div>

                <!-- Product Status -->
                <div class="mb-4">
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select id="status" name="status" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" class="bg-green-500  text-red py-2 px-6 rounded hover:bg-green-600 transition">Create Product</button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
