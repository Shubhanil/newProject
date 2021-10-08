@extends('admin.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="col">
                <div class="col-md-6">
                    <h5>Edit Product</h5>
                </div>
            </div>
            <form method="post" action="{{ route('updateProduct',$product->id) }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $product->id }}">

                <div class="form-group ">
                    <label for="exampleCheck1">Choose Category</label>
                    <select name="category_id" class="form-control">Choose Main Category
                        @foreach ( $categories as $category)
                        <option value="{{ $category->id }}" value="{{ $category->id }}" @php $product->id ==
                            $category->id ? 'selected'
                            :''@endphp >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control"
                        aria-describedby="emailHelp" required placeholder="eg. Electronics">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Price</label>
                    <input type="text" name="price" value="{{ $product->price }}" class="form-control"
                        aria-describedby="emailHelp" required placeholder="eg. Electronics">
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" name="description" value="{{ $product->description }}" class="form-control"
                        placeholder="e.g. sdhort Description">
                </div>

                <div class="form-group ">
                    <label for="exampleCheck1">Status</label>
                    <select name="is_active" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">In active</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update Product</button>
            </form>
        </div>
    </div>
</div>
@endsection