@extends('layouts.app')

@section('content')
    <style>
    .box {
        display:none;
    }
    </style>
    <div class="check box">
        <button onclick="del_many()" class="bg-red-500 h-8 hover:bg-red-600 rounded-lg shadow-md w-1/12" id="btn_delete">Delete</button>
    </div>
    <div class="text-right">
        <button class="bg-green-500 text-white hover:bg-green-700 px-6 py-2 rounded-lg focus:border-transparent">Add Admin</button>
    </div>
    <div class="cart card-default">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class=" overflow-x-auto">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                        <th class="px-6  text-left py-0 whitespace-nowrap">
                            <label class="inline-flex">
                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600">
                            </label>
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            E-mail
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Created At
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Role
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($admins as $admin)
                        <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <label id='recordsTable' class="inline-flex items-center mt-3">
                                    <input type="checkbox"  class="form-checkbox h-5 w-5 text-gray-600" value="{{ $admin->id }}" >
                            </label>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">

                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                {{ $admin->name }}
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900"> {{ $admin->email }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            {{ $admin->created_at->diffForHumans() }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            Admin
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </td>
                        </tr>
                        @empty
                            No data found here:(
                        @endforelse

                        <!-- More items... -->
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
    @push('js')
    <script>
            $(document).ready(function(){
                //alert("Hi");
                const $actions = $('.check')
                const $checkboxes = $('td input[type="checkbox"]')
                const $checkAll = $('th input[type="checkbox"]')
                const checkboxes = document.querySelectorAll('td input[type="checkbox"]')

                $checkAll.click(function (event) {
                    for(var i = 0; i < checkboxes.length; i++) {
                        checkboxes[i].checked = event.target.checked;
                    }
                })

                // checkall.checked = checkedCount > 0;
                // checkall.indeterminate = checkedCount > 0 && checkedCount < checkboxes.length;

                $('input[type="checkbox"]').click(function(){
                    // var inputValue = $(this).attr("value");
                    const checkedItems = $('td input[type="checkbox"]:checked')
                    if(checkedItems && checkedItems.length) {
                        $actions.show()
                        $checkAll[0].checked = true
                        $checkAll[0].indeterminate = checkedItems.length < $checkboxes.length
                    } else {
                        $actions.hide()
                        $checkAll[0].checked = false
                        $checkAll[0].indeterminate = false
                    }

                    //console.log({ checkedItems })
                    // $actions.
                    //   $("." + inputValue).toggle();
                })
                            })
                async function del_many(){
                    let checkedIds = []
                    const checkedItems = document.querySelectorAll('td input[type="checkbox"]:checked')
                    Array.from(checkedItems).map(ch => checkedIds[ch.value] = ch.value)
                    console.log({checkedIds});
                    try {
                       const {data} = await axios.post('/api/manydeletes',{
                        checkedIds,
                        _token:'{{ csrf_token() }}'
                       })
                       console.log(data)
                    } catch (error) {
                        console.log({ error })
                    }
                }

        </script>
    @endpush
@endsection
