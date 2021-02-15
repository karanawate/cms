@extends('layouts.app')

@section('content')
    <section>
        <div class="px-4">
            <h1 class="text-3xl mb-2">profile</h1>
            <p class="text-gray-600 mb-3">Save all Profile.</p>
        </div>
        <form id="profileform">
            <div class="m-3 bg-white rounded-xl border w-2/6 p-4 shadow-sm ml-3">
            @csrf
                <div class="mb-3">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name"  value="{{ Auth::user()->name }}" id="name" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                <div class="mb-3  ">
                    <label for="phone" class="block  text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="text" name="phone"  value="{{ Auth::user()->phone_number }}" id="phone_number" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                <div class="mb-3  ">
                    <label for="address" class="block  text-sm font-medium text-gray-700">Address</label>
                    <input type="text" name="address" value="{{ Auth::user()->address }}" id="address" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                <div class="mb-3  ">
                    <label for="nickname" class="block  text-sm font-medium text-gray-700">Nickname</label>
                    <input type="text" name="nickname"  id="nickname" value="{{ Auth::user()->nickname }}" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                <div class="mb-3  ">
                    <label for="phonetic_name" class="block  text-sm font-medium text-gray-700">Phonetic name</label>
                    <input type="text" name="phonetic_name"  value="{{ Auth::user()->phonetic_name }}" id="phonetic_name" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                <div class="mb-3  ">
                    <label for="position" class="block  text-sm font-medium text-gray-700">position</label>
                    <input type="text" name="position"  id="position" value="{{ Auth::user()->position }}" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                <div class="mb-3  ">
                    <label for="userid" class="block  text-sm font-medium text-gray-700">id</label>
                    <input type="text" name="userid" value="{{ Auth::user()->id }}" id="userid" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                <div class="text-left">
                    <button class="bg-blue-600  hover:bg-blue-900 px-4 py-2 rounded-lg text-white ">Save</button>
                </div>
                </div>
            </div>
        </form>
    </section>
@push('js')
<script>
    $('#profileform').submit(function(event){
        event.preventDefault();

        var userid = $('#userid').val();
        var name = $('#name').val();
        var phone_number = $('#phone_number').val();
        var position = $('#position').val();
        var address = $('#address').val();
        var nickname = $('#nickname').val();
        var phonetic_name = $('#phonetic_name').val();

        $.ajax({
            type:'POST',
            url:'/api/profileupdate',
            data:{
                userid:userid,
                name:name,
                phone_number:phone_number,
                position:position,
                address:address,
                phonetic_name:phonetic_name,
                nickname:nickname
            },
            success: function(data){
                console.log(data);
            }
        })
    });
</script>
@endpush
@endsection
