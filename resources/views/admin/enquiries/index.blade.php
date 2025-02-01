<x-app-layout>
    <div class="flex-1 p-6">
        <!-- Top Bar -->
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-3xl font-semibold text-gray-900 dark:text-white">All Enquiries</h3>
        </div>

        <br><br>

        <!-- Enquiries Table -->
        <div class="overflow-x-auto bg-white dark:bg-gray-700 rounded-lg shadow-lg">
            <table class="min-w-full table-auto text-left">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-6 py-3">Name</th>
                        <th class="px-6 py-3">Email</th>
                        <th class="px-6 py-3">Enquiry</th>
                    </tr>
                </thead>
                <tbody class="text-gray-800 dark:text-white">
                    @foreach ($enquiries as $data)
                        <tr>
                            <td class="px-6 py-4">{{ $data->customer_name }}</td>
                            <td class="px-6 py-4">{{ $data->customer_email }}</td>
                            <td class="px-6 py-4">{{ $data->message }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination Links -->
        <div class="mt-4">
            {{ $enquiries->links() }} <!-- Display pagination links -->
        </div>
    </div>
</x-app-layout>
