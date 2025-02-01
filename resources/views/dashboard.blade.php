<x-app-layout>

    {{-- Content --}}
    <div class="flex-1 p-6">
        <!-- Top Bar -->
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-3xl font-semibold text-gray-900 dark:text-white">Welcome to the Admin Dashboard</h3>
        </div>

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
                    <tr>
                        <td class="px-6 py-4">Product 1</td>
                        <td class="px-6 py-4">This is the product description</td>
                        <td class="px-6 py-4">$29.99</td>
                        <td class="px-6 py-4 text-green-500">Active</td>
                        <td class="px-6 py-4">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Edit</button>
                            <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Delete</button>
                        </td>
                    </tr>

                    <!-- Example product row 2 -->
                    <tr>
                        <td class="px-6 py-4">Product 2</td>
                        <td class="px-6 py-4">This is another product description</td>
                        <td class="px-6 py-4">$49.99</td>
                        <td class="px-6 py-4 text-red-500">Inactive</td>
                        <td class="px-6 py-4">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Edit</button>
                            <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Delete</button>
                        </td>
                    </tr>

                    <!-- Add more product rows here -->
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
