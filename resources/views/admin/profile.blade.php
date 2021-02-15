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
                    <input type="text" name="phone"  id="phone_number" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>

                </div>
                <div class="text-left">
                <button>submit</button>
                </div>
            </div>
        </form>
    </section>
@push('js')
<script>
    $('#profileform').submit(function(e){
        e.preventDefault();
        var name = $('#name').val();
        var phone_number = $('#phone_number').val();
        $.ajax({
            type:'POST',
            url:'/api/profileupdate',
            data:{
                name:name,
                phone_number:phone_number
            },
            success: function(data){
                console.log(data);
            }
        })
    });
</script>
@endpush
@endsection
