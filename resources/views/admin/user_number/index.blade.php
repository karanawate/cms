@extends('layouts.app')

@section('content')
<form action="{{ route('galleries.index')}}" method="get">
        <input type="text" name="search" placeholder="search" >
       </form>
    <div class="d-flex justify-content-end mb-2">
    </div>
    <div class="cart card-default">
        <div class="card header">user Number</div>
        <div class="card-body">
            <table  class="table">
                <thead>
                    <th>id</th>
                    <th>User id</th>
                    <th>Number</th>
                </thead>
                <tbody>
                    @forelse($user_numbers as $user_number)
                <tr>
                    <td>{{ $user_number->id }}</td>
                    <td>{{ $user_number->user_id }}</td>
                    <td>{{ $user_number->number }}</td>
                    @empty
                    <td>No data found..</td>
                 </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
