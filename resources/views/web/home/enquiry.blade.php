@extends('layouts.app-web')

@section('content')

<div class="container mx-auto p-6">
    <h2 class="text-2xl font-semibold text-white mb-6">Product Inquiry</h2>

    <!-- Inquiry Form -->
    <form action="{{ route('web.product.enquiry.store') }}" method="POST">
        @csrf


        <input type="hidden" value="{{$id}}" name="id">

        <!-- Name Field -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-white">Your Name</label>
            <input type="text" id="name" name="customer_name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>

        <!-- Message Field -->
        <div class="mb-4">
            <label for="message" class="block text-sm font-medium text-white">Your Message</label>
            <textarea id="message" name="message" rows="4" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required></textarea>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit" class="bg-green-500 text-white py-2 px-6 rounded hover:bg-green-600 transition">Submit Inquiry</button>
        </div>
    </form>
</div>

@endsection
