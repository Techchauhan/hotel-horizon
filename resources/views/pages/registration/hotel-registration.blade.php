@extends('layouts.registration')

@section('title', 'Hotel Registration')

@section('form-type')

<h2 class="text-xl font-semibold text-center mb-4">Hotel Registration</h2>

@if(session('success'))
    <p class="text-green-600 text-center mb-4 text-sm">{{ session('success') }}</p>
@endif

<form action="{{ route('hotel.registration') }}" method="POST" class="grid grid-cols-2 gap-4">
    @csrf

    <div class="col-span-1">
        <label class="block text-sm font-medium">Admin ID:</label>
        <input type="text" name="admin_id" required class="w-full p-2 text-sm border rounded-md focus:ring focus:ring-blue-300">
    </div>

    <div class="col-span-1">
        <label class="block text-sm font-medium">Hotel Name:</label>
        <input type="text" name="hotel_name" required class="w-full p-2 text-sm border rounded-md focus:ring focus:ring-blue-300">
    </div>

    <div class="col-span-1">
        <label class="block text-sm font-medium">Hotel Type:</label>
        <select name="hotel_type" required class="w-full p-2 text-sm border rounded-md focus:ring focus:ring-blue-300">
            <option value="Luxury">Luxury</option>
            <option value="Budget">Budget</option>
            <option value="Resort">Resort</option>
            <option value="Business">Business</option>
            <option value="Others">Others</option>
        </select>
    </div>

    <div class="col-span-1">
        <label class="block text-sm font-medium">Hotel Category:</label>
        <select name="hotel_category" required class="w-full p-2 text-sm border rounded-md focus:ring focus:ring-blue-300">
            <option value="1-star">1-star</option>
            <option value="2-star">2-star</option>
            <option value="3-star">3-star</option>
            <option value="4-star">4-star</option>
            <option value="5-star">5-star</option>
        </select>
    </div>

    <div class="col-span-1">
        <label class="block text-sm font-medium">Registration Number:</label>
        <input type="text" name="registration_number" class="w-full p-2 text-sm border rounded-md focus:ring focus:ring-blue-300">
    </div>

    <div class="col-span-1">
        <label class="block text-sm font-medium">Establishment Date:</label>
        <input type="date" name="establishment_date" class="w-full p-2 text-sm border rounded-md focus:ring focus:ring-blue-300">
    </div>

    <div class="col-span-1">
        <label class="block text-sm font-medium">Legally Registered:</label>
        <div class="flex space-x-4">
            <label><input type="radio" name="legally_registered" value="Yes" required> Yes</label>
            <label><input type="radio" name="legally_registered" value="No" required> No</label>
        </div>
    </div>

    <div class="col-span-1">
        <label class="block text-sm font-medium">Hotel Website:</label>
        <input type="url" name="hotel_website" required class="w-full p-2 text-sm border rounded-md focus:ring focus:ring-blue-300">
    </div>

    <div class="col-span-1">
        <label class="block text-sm font-medium">Contact Number:</label>
        <input type="text" name="contact_number" required class="w-full p-2 text-sm border rounded-md focus:ring focus:ring-blue-300">
    </div>

    <div class="col-span-1">
        <label class="block text-sm font-medium">Email:</label>
        <input type="email" name="email" required class="w-full p-2 text-sm border rounded-md focus:ring focus:ring-blue-300">
    </div>

    <div class="col-span-2">
        <label class="block text-sm font-medium">Address:</label>
        <textarea name="address" required class="w-full p-2 text-sm border rounded-md focus:ring focus:ring-blue-300"></textarea>
    </div>

    <div class="col-span-2">
        <button type="submit" class="w-full bg-blue-500 text-white py-2 text-sm rounded-md hover:bg-blue-600">Register Hotel</button>
    </div>
</form>

@endsection
