@extends('layouts.registration')

@section('title', 'Admin Registration')

@section('form-type')
                
<h2 class="text-xl font-semibold text-center mb-4">Admin Registration</h2>
                
                @if(session('success'))
                    <p class="text-green-600 text-center mb-4 text-sm">{{ session('success') }}</p>
                @endif
    
                <form action="{{ route('admin.register') }}" method="POST" class="grid grid-cols-2 gap-4">
                    @csrf
                    
                    <div class="col-span-1">
                        <label class="block text-sm font-medium">Admin Name:</label>
                        <input type="text" name="admin_name" required class="w-full p-2 text-sm border rounded-md focus:ring focus:ring-blue-300">
                    </div>
                    
                    <div class="col-span-1">
                        <label class="block text-sm font-medium">Hotel Name:</label>w
                        <input type="text" name="hotel_name" required class="w-full p-2 text-sm border rounded-md focus:ring focus:ring-blue-300">
                    </div>
    
                    <div class="col-span-1">
                        <label class="block text-sm font-medium">Owner Name:</label>
                        <input type="text" name="owner_name" required class="w-full p-2 text-sm border rounded-md focus:ring focus:ring-blue-300">
                    </div>
    
                    <div class="col-span-1">
                        <label class="block text-sm font-medium">Email:</label>
                        <input type="email" name="email" required class="w-full p-2 text-sm border rounded-md focus:ring focus:ring-blue-300">
                    </div>
    
                    <div class="col-span-1">
                        <label class="block text-sm font-medium">Password:</label>
                        <input type="password" name="password" required class="w-full p-2 text-sm border rounded-md focus:ring focus:ring-blue-300">
                    </div>
    
                    <div class="col-span-1">
                        <label class="block text-sm font-medium">Confirm Password:</label>
                        <input type="password" name="password_confirmation" required class="w-full p-2 text-sm border rounded-md focus:ring focus:ring-blue-300">
                    </div>
    
                    <div class="col-span-1">
                        <label class="block text-sm font-medium">Contact Number:</label>
                        <input type="text" name="contact_number" required class="w-full p-2 text-sm border rounded-md focus:ring focus:ring-blue-300">
                    </div>
    
                    <div class="col-span-2">
                        <label class="block text-sm font-medium">Address:</label>
                        <textarea name="address" required class="w-full p-2 text-sm border rounded-md focus:ring focus:ring-blue-300"></textarea>
                    </div>
    
                    <div class="col-span-2">
                        <button type="submit" class="w-full bg-blue-500 text-white py-2 text-sm rounded-md hover:bg-blue-600">Register</button>
                    </div>
                </form>
@endsection
