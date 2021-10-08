@extends('admin.base')
@section('content')
<div class="container">

    <div class="row">
        <div class="col">
            <div class="col">
                <div class="col-md-6">
                    <h5>Edit Category</h5>
                </div>
            </div>
            <form method="post" action="{{ route('updateCategory') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $category->id }}">
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control"
                        aria-describedby="emailHelp" required placeholder="eg. Electronics">
                </div>
                @if($categories == !null)
                <div class="form-group ">
                    <label for="exampleCheck1">Parent Category</label>
                    <select name="parent_id" class="form-control">Choose Main Category
                        @foreach ( $categories as $categoryData)
                        <option value="{{ $categoryData->id }}" @php $category->id == $categoryData->id ? 'selected'
                            :''@endphp >
                            {{ $categoryData->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                @endif
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" value="{{ $category->description }}" name="description" class="form-control"
                        placeholder="e.g. sdhort Description">
                </div>
                <div class="form-group ">
                    <label for="exampleCheck1">Status</label>
                    <select name="is_active" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">In active</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update Category</button>
            </form>
        </div>
    </div>
</div>
@endsection