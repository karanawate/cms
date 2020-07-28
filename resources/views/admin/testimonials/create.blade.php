@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">
             Gallery
        </div>
        <div class="card-body">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
            @endif
            <form action="{{ route('testimonials.store')}}" enctype="multipart/form-data"  method="post">
            @csrf
                        <div class="form-group">
                            <label for="name">Title</lable>
                            <input style="width:706px;" type="text" id="name" class="form-control" name="title" />
                           <p style="color:red"> <?php echo  $errors->first('title') ?></p>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id="" cols="3" rows="9" ></textarea>
                            <p style="color:red"><?php echo  $errors->first('description') ?></p>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</lable>
                            <input style="width:706px;" type="text" id="name" class="form-control" name="category" />
                            <p style="color:red"> <?php echo  $errors->first('category') ?></p>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</lable>
                            <input style="width:706px;" type="file" id="name" class="form-control" name="image" />
                            <p style="color:red"><?php echo  $errors->first('image') ?></p>
                        </div>
                        <div class="form-group">
                            <label for="thumbnail">Thumbnail</lable>
                            <input style="width:706px;" type="file" id="name" class="form-control" name="thumbnail" />
                            <p style="color:red"> <?php echo  $errors->first('thumbnail') ?></p>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">
                                Add Gallery
                            </button>
                        </div>
            </form>
        </div>
    </div>
@endsection
