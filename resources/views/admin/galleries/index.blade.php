@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('galleries.create')}}" class="btn btn-success float-right">Add Gallery</a>
    </div>
    @if(session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif


    <div class="cart card-default">
        <div class="card header">Gallery</div>

        <div class="card-body">
            <table  class="table">
                <thead>
                    <th>Title</th>
                    <th>Image</th>
                    <th>description</th>
                </thead>
                <tbody>
                    @foreach($galleries as $gallery)
                <tr>
                        <td>{{ $gallery->title }}</td>
                        <td><img  style="width:70px; height:70px;" src="{!! url('/gallery/'.$gallery->image) !!}" alt="dfdf" title="" /></td>
                        <td>{{ str_limit($gallery->description, 10) }}</td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection