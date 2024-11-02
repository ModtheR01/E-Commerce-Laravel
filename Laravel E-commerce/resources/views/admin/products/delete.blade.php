@extends('admin.layouts.master')
@section('title', 'Delete Products')
@section('content')
@section("page_name")
@parent
<li class="breadcrumb-item"><a href="{{ route('dashboard.products.index') }}">Products</a></li>
<li class="breadcrumb-item active"><a href="{{ route('dashboard.products.delete') }}">Delete</a></li>
@endsection
@include('admin.sub-categories.index-messages.messages')
<table class="table w-75 m-auto table-bordered table-dark datatable">{{-- datatable --}}
    <thead class="table-dark">
    <tr>
        <th class="font-weight-bold">#</th>
        <th class="font-weight-bold">id</th>
        <th class="font-weight-bold">Title</th>
        <th class="font-weight-bold">Description</th>
        <th class="font-weight-bold">Price</th>
        <th class="font-weight-bold">Quantity</th>
        <th class="font-weight-bold">Created By</th>
        <th class="font-weight-bold">Updated By</th>
        <th class="font-weight-bold">Created at</th>
        <th class="font-weight-bold">Updated at</th>
        <th class="font-weight-bold">Deleted at</th>
        @if (auth()->user()->user_type == "admin")
        <th class="font-weight-bold">Action</th>
        @endif
    </tr>
    </thead>
    <tbody>
        @forelse ($products as $product )
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $product->id }}</td>
            <td>{{ $product->title }}</td>
            <td>{{Str::words($product->description , '5', '....') ?? 'N/A' }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->available_quantity }}</td> {{-- products_count --}}
            <td>{{ $product->create_user->name  }}</td>
            <td>{{ $product->updated_user->name ?? 'N/A' }}</td>
            <td>{{ $product->created_at }}</td>
            <td>{{ $product->updated_at ?? 'N/A'}}</td>
            <td>{{ $product->deleted_at ?? 'N/A'}}</td>
            @if (auth()->user()->user_type == 'admin')
            <td class="text-center">
                <div class="d-flex justify-content-between">
                    <div>
                        <form action="{{ route('dashboard.products.restore', $product->id) }}" method="GET">
                            <button type="submit" class="btn btn-success btn-sm font-weight-bold fs-6 mx-1">Restore</button>
                        </form>
                    </div>
                    <div>
                        <form action="{{ route('dashboard.products.forceDelete', $product->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm font-weight-bold fs-6 mx-1">Delete From Trash</button>
                        </form>
                    </div>
                </div>
            </td>
            @endif
        </tr>
        @empty
        <div class="alert alert-danger text-center my-5 w-75 mx-auto">
            <span class="h6"> There Are No Deleted Products Yet!</span>
        </div>
        @endforelse
</table>
<div class="my-4 my-4 d-flex justify-content-center">
    {{-- {{ $subcategories->links() }} --}}
    <a href="{{ route('dashboard.products.index') }}" class="btn btn-primary">
        <i class="fa-solid fa-left-long fs-5"></i> <span>Back to Products</span>
    </a>
</div>
@endsection
