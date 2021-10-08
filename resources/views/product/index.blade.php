@extends('admin.base')

@section('content')

<div class="container">
    <div class="row">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $key=>$product)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        @if($product->is_active == 1)
                        Active
                        @else
                        Inactive
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('editProduct', $product->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('deleteProduct', $product->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>



@endsection