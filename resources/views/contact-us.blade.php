@extends('layouts.webpage')

@section('title', 'Contact Us')

@section('web-content')
    <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Contact Us</h1>
        <p class="text-center text-gray-600 mb-6">
            If you have any queries, feel free to contact us. We'll get back to you soon.
        </p>

        <form>
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Name</label>
                <input type="text" name="name" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Email</label>
                <input type="email" name="email" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Message</label>
                <textarea name="message" rows="4" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
            </div>

            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 rounded-lg transition duration-300">
                Send Message
            </button>
        </form>
    </div>
@endsection
