@extends('layouts.app')

@section('content')
    <section>
    <script>
    var sites = {!! json_encode($users) !!};
    console.log(sites);
</script>
        <div class="px-4">
            <h1 class="text-3xl mb-2">profile</h1>
            <p class="text-gray-600 mb-3">Save all Profile.</p>
        </div>
        <form action="">
            <div class="m-3 bg-white rounded-xl border w-2/6 p-4 shadow-sm ml-3">
            @csrf
                <div class="mb-3">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name"  id="name" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                <div class="mb-3  ">
                    <label for="phone" class="block  text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="text" name="phone"  id="phone" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                <div class="mb-3">
                    <label for="phonetic_name" class="block text-sm font-medium text-gray-700">Phonetic Name</label>
                    <input type="text" name="phonetic_name" id="phonetic_name"  autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                <div class="mb-3">
                    <label for="position" class="block text-sm font-medium text-gray-700">Position</label>
                    <input type="text" name="position" id="position"  autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                <div class="mb-3">
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <input type="text" name="address" id="address"  autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                <div class="mb-3">
                    <label for="nickname" class="block text-sm font-medium text-gray-700">NickName</label>
                    <input type="text" name="nickname" id="nickname"  autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                </div>
                <div class="text-left">
                <button class="bg-blue-600  hover:bg-blue-900 px-4 py-2 rounded-lg text-white ml-80">Save</button>
                </div>
            </div>
        </form>
    </section>
@endsection
