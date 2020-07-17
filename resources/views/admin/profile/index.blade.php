@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end mb-2">
    </div>
    <div class="cart card-default">
        <div class="card header">profile</div>
        <div class="card-body">
        <form action="{{ route('galleries.store')}}"   method="post">
                {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">Name</lable>
                            <input style="width:706px;" type="text" id="name" value="{{$profile->name}}" class="form-control" name="title" />
                           <p style="color:red"> </p>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">
                                Update profile
                            </button>
                        </div>
            </form>
        </div>
    </div>
@endsection
