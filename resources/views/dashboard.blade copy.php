<x-app-layout>


    {{-- content --}}
    <div class="flex-1 p-6">
        <!-- Top Bar -->
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-3xl font-semibold text-gray-900 dark:text-white">Welcome to the Admin Dashboard</h3>
        </div>

        <!-- Cards and Content -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-lg">
                <h4 class="text-xl font-semibold text-gray-800 dark:text-white">Overview</h4>
                <p class="text-gray-600 dark:text-gray-300 mt-2">View and manage your app's data.</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-lg">
                <h4 class="text-xl font-semibold text-gray-800 dark:text-white">Users</h4>
                <p class="text-gray-600 dark:text-gray-300 mt-2">Manage your registered users.</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-lg">
                <h4 class="text-xl font-semibold text-gray-800 dark:text-white">Products</h4>
                <p class="text-gray-600 dark:text-gray-300 mt-2">Add, update, or delete products.</p>
            </div>
        </div>
    </div>

    
</x-app-layout>
