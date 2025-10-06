@extends('admin.layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-semibold mb-4">Welcome to the Admin Dashboard</h1>
        <p class="text-gray-700">This is your dashboard where you can manage your application.</p>

        <div class="mt-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Example Card -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold">Card Title</h2>
                    <p class="text-gray-600">Card content goes here.</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold">Card Title</h2>
                    <p class="text-gray-600">Card content goes here.</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold">Card Title</h2>
                    <p class="text-gray-600">Card content goes here.</p>
                </div>
                <!-- Add more cards as needed -->
            </div>
        </div>
        <div class="mt-6">
            <h2 class="text-xl font-semibold mb-4">Recent Activities</h2>
            <ul class="list-disc pl-5">
                <li>Activity 1: Description of the activity.</li>
                <li>Activity 2: Description of the activity.</li>
                <li>Activity 3: Description of the activity.</li>
            </ul>
        </div>
    </div>
@endsection
