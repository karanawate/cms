@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-end mb-2">
    <a href="{{ route('categories.create')}}" class="btn btn-success float-right">Add Categories</a>
    </div>
    <div class="cart card-default">
        <div class="card-header">Categories</div>
        @if(session()->has('success'))
            <div class="alert alert-success">{{session()->get('success')}}</div>
        @endif
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th>Description</th>
                    <th></th>
                </thead>
                <tbody>
                @foreach($Categories as $Category)
                    <tr>
                        <td>
                            {{$Category->name}}
                        </td>
                        <td>
                            {{$Category->description}}
                        </td>
                        <td>
                                <a href="{{route('categories.edit', $Category->id)}}" class="btn btn-info btn-sm">
                                    Edit
                                </a>
                                <button class="btn btn-danger btn-sm" onclick="handleDelete({{ $Category->id }})">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- delete modal here -->
            <!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">

            <div class="modal-dialog" role="document">
            <form action="" method="post" id="deleteCategoryForm">
            @method('DELETE')
            {{ csrf_field() }}

                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="txt-center txt-bold">
                        Are you sure you want to delete this category?
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No , Go back</button>
                    <button type="submit" class="btn btn-danger">Yes Deleted</button>
                </div>
                </div>
            </form>
            </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
<script>
    function handleDelete(id)
    {
        $('#deleteModal').modal('show')
        var form = document.getElementById('deleteCategoryForm')
        form.action = '/categories/' + id;
        console.log('Deleted', form);
    }
</script>
@endsection
