<x-app-layout>

    {{-- Content --}}
    <div class="flex-1 p-6">
        <!-- Top Bar -->
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-3xl font-semibold text-gray-900 dark:text-white">All Registed Customers</h3>
        </div>
    
        <br>
        <br>
        
        

        <!-- Products Table -->
        <div class="overflow-x-auto bg-white dark:bg-gray-700 rounded-lg shadow-lg">
            <table class="min-w-full table-auto text-left">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-6 py-3">Name</th>
                        <th class="px-6 py-3">email</th>
                        {{-- <th class="px-6 py-3">Actions</th> --}}
                    </tr>
                </thead>
                <tbody class="text-gray-800 dark:text-white">
                    <!-- Example product row 1 -->
                    @foreach ($customers as $data)
                    <tr>
                        <td class="px-6 py-4">{{ $data->name }}</td>
                        <td class="px-6 py-4">{{ $data->email }}</td>
                    </tr>
                @endforeach

                    <!-- Add more product rows here -->
                </tbody>
            </table>
        </div>
         <!-- Pagination Links -->
         <div class="mt-4">
            {{ $customers->links() }} <!-- Display pagination links -->
        </div>
    </div>

</x-app-layout>
