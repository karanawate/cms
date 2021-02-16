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
                <div class="mb-3 invisible">
                    <label for="userid" class="block  text-sm font-medium text-gray-700">id</label>
                    <input type="text" name="userid" value="{{ Auth::user()->id }}" id="userid" autocomplete="given-name" class="rounded-lg px-3 mt-1 w-full py-1 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
                </div>
                <div class="text-left">
                    <button type="submit" class="bg-blue-600  hover:bg-blue-900 px-4 py-2 rounded-lg text-white ">Save</button>
                </div>
                </div>
            </div>
        </form>
    </section>
@push('js')
    <script>
        const myform = document.getElementById("profileform")
        myform.addEventListener("submit",(e) => {
            e.preventDefault();
            var name = document.getElementById('name').value;
            var phone_number = document.getElementById('phone_number').value;
            var address = document.getElementById('address').value;
            var phonetic_name = document.getElementById('phonetic_name').value;
            var nickname = document.getElementById('nickname').value;
            var userid = document.getElementById('userid').value;
            var position = document.getElementById('position').value;

            try {
                    axios({
                        method:'post',
                        url:'/api/profileupdate',
                        data: {
                            name:name,
                            userid:userid,
                            phone_number:phone_number,
                            address:address,
                            phonetic_name:phonetic_name,
                            nickname:nickname,
                            position:position,
                        },
                    }).then(function (response){
                        console.log(response);
                        alert("sucefully updated");
                    });
            } catch (error) {
                console.log(error);
            }

        })
    </script>
@endpush
@endsection
