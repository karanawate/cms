@extends('layouts.app')

@section('content')
    <div class="m-3 bg-white rounded-xl border p-4 shadow-sm">
        <div class="mb-3">
            <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
            <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div class="mb-3">
            <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
            <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div class="mb-3">
            <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
            <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div class="mb-5">
            <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
            <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div class="text-center">
        <a href="{{ route('galleries.create')}}" class="bg-blue-600  hover:bg-blue-900 px-4 py-2 rounded-lg text-white">Add Gallery</a>
        </div>
    </div>




@endsection
