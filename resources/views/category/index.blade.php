@extends('admin.base')

@section('content')

<div class="container">
    <div class="row">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Main Category</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $key=>$category)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->parent_id }}</td>
                    <td>
                        @if($category->is_active == 1)
                        Active
                        @else
                        Inactive
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('editCategory', $category->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('deleteCategory', $category->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>



@endsection