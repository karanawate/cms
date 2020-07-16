@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('galleries.create')}}" class="btn btn-success float-right">Add Testimonials</a>
    </div>
    @if(session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif


    <div class="cart card-default">
        <div class="card header">Testimonial</div>

        <div class="card-body">
            <table  class="table">
                <thead>
                    <th>Title</th>
                    <th>Image</th>
                    <th>description</th>
                </thead>
                <tbody>
                <tbody>
            </table>
        </div>
    </div>
@endsection
