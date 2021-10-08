@extends('admin.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="col">
                <div class="col-md-6">
                    <h5>Add Category</h5>
                </div>
            </div>
            <form method="post" action="{{ route('addCategory') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" name="name" class="form-control" aria-describedby="emailHelp" required
                        placeholder="eg. Electronics">
                </div>
                @if($categories == !null)
                <div class="form-group ">
                    <label for="exampleCheck1">Parent Category</label>
                    <select name="parent_id" class="form-control">Choose Main Category
                        @foreach ( $categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                @endif
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" name="description" class="form-control" placeholder="e.g. sdhort Description">
                </div>
                <button type="submit" class="btn btn-primary">Add Category</button>
                <a href="{{ route('createProduct') }}" class="btn btn-btn-danger"> Add Product</a>
            </form>
        </div>
    </div>
</div>
@endsection