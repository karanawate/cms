@extends('layouts.app')
@section('content')
    <div class="cart card-default">
        <div class="card-header">
        <!-- if is it variable its edit entry by default create entry -->
        {{ isset($category) ? 'Edit category': 'Create category'}}
        </div>
        <div class="card-body">
        <!-- <?php dump($errors->any()) ?> -->
        <!-- <?php dump(session()->has('success'))?> -->
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif
            <form action="{{ isset($category) ? route('categories.update', $category->id): route('categories.store') }}" method="post">
            {{ csrf_field() }}
            @if(isset($category))
              @method('PATCH')
            @endif
                <div class="form-group">
                    <label for="name">Name</lable>
                    <input style="width:706px;" type="text" id="name" class="form-control" name="name" value="{{isset($category) ? $category->name: '' }}" />
                    <?php echo  $errors->first('name') ?>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" id="" cols="3" rows="9" >{{isset($category) ? $category->description: ''}}</textarea>
                    <?php echo  $errors->first('description') ?>
                </div>
                <div class="form-group">
                    <button class="btn btn-success">
                        {{isset($category) ? 'Update Category' :'Add Category'}}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
