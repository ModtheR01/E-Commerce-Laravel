@extends('admin.layouts.master')
@section('title' , 'Products')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-end flex-wrap">
                <div class="d-flex justify-contnet-between align-items-end flex-wrap">
                        <a href="{{ route('dashboard.products.create') }}" class="mx-3 mt-3 btn btn-success text-light font-weight-bold">
                            <span>Add Product</span>
                        </a>
                </div>
            </div>
        </div>
    </div>
{{-- @include('admin.sub-categories.index-messages.messages') --}}
    <!-- Table with stripped rows -->
    <table class="table w-75 m-auto table-bordered table-dark datatable">{{-- datatable table-bordered table-primary --}}
        <thead class='table-dark'>
        <tr>
            <th>#</th>
            <th>id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            {{-- <th>Category</th>
            <th>Sub-Category</th> --}}
            <th>Created By</th>
            <th>Updated By</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($products as $product )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->id }}</td>
                <td>{{ $product->title }}</td>
                <td>{{ Str::words($product->description, 5, '....') ?? 'N/A' }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->available_quantity }}</td>
                {{-- <td>{{ $product->subCategory->category->title ?? 'N/A' }}</td>
                <td>{{ $product->subCategory->title ?? 'N/A' }}</td> --}}
                <td>{{ $product->create_user->name ?? 'N/A' }}</td>
                <td>{{ $product->updated_user->name ?? 'N/A' }}</td>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->updated_at ?? 'N/A' }}</td>
                <td>
                    <form action="{{ route('dashboard.products.destroy',$product->id) }}" method="POST" class="d-flex justify-content-between align-items-center">
                        @csrf
                        @method('DELETE')

                        <a class="btn btn-warning font-weight-bold btn-sm fs-6" href="{{ route('dashboard.products.show',$product->id) }}">Show</a>

                        @if (auth()->user()->user_type == 'admin')
                            <a class="btn btn-primary btn-sm font-weight-bold fs-6" href="{{ route('dashboard.products.edit',$product->id) }}">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm font-weight-bold fs-6">Delete</button>
                        @endif
                    </form>

                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8" class="text-center">No products found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <div class="my-4 d-flex justify-content-center">
        {{-- {{ $categories->links() }} --}}
    </div>
    <!-- End Table with stripped rows -->



@endsection
