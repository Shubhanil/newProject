@extends('admin.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="col">
                <div class="col-md-6">
                    <h5>Add Product</h5>
                </div>
            </div>
            <form method="post" action="{{ route('addProduct') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group ">
                    <label for="exampleCheck1">Choose Category</label>
                    <select name="category_id" class="form-control">Choose Main Category
                        @foreach ( $categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" name="name" class="form-control" aria-describedby="emailHelp" required
                        placeholder="eg. Electronics">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Price</label>
                    <input type="text" name="price" class="form-control" aria-describedby="emailHelp" required
                        placeholder="eg. Electronics">
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" name="description" class="form-control" placeholder="e.g. sdhort Description">
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
        </div>
    </div>
</div>
@endsection