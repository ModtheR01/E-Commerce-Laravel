@extends('admin.layouts.master')
@section('title', 'Delete Sub-Categories')
@section('content')
@section("page_name")
@parent
<li class="breadcrumb-item"><a href="{{ route('dashboard.sub-categories.index') }}">Sub-Categories</a></li>
<li class="breadcrumb-item active"><a href="{{ route('dashboard.sub-categories.delete') }}">Delete</a></li>
@endsection
@include('admin.sub-categories.index-messages.messages')
<table class="table w-75 m-auto table-bordered table-dark datatable">{{-- datatable --}}
    <thead class="table-dark">
    <tr>
        <th class="font-weight-bold">#</th>
        <th class="font-weight-bold">id</th>
        <th class="font-weight-bold">Title</th>
        <th class="font-weight-bold">Description</th>
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
        @forelse ($subcategories as $subcategory )
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $subcategory->id }}</td>
            <td>{{ $subcategory->title }}</td>
            <td>{{Str::words($subcategory->description , '5', '....') ?? 'N/A' }}</td>
            <td>{{ $subcategory->create_user->name  }}</td>
            <td>{{ $subcategory->updated_user->name ?? 'N/A' }}</td>
            <td>{{ $subcategory->created_at }}</td>
            <td>{{ $subcategory->updated_at ?? 'N/A'}}</td>
            <td>{{ $subcategory->deleted_at ?? 'N/A'}}</td>
            @if (auth()->user()->user_type == 'admin')
            <td class="text-center">
                <div class="d-flex justify-content-between">
                    <div>
                        <form action="{{ route('dashboard.sub-categories.restore',$subcategory->id) }}" method="GET">
                            <button type="submit" class="btn btn-success btn-sm font-weight-bold fs-6 mx-1">Restore</button>
                        </form>
                    </div>
                    <div>
                        <form action="{{ route('dashboard.sub-categories.forceDelete',$subcategory->id) }}" method="post">
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
            <span class="h6"> There Are No Deleted Sub-Categories Yet!</span>
        </div>
        @endforelse
</table>
<div class="my-4 my-4 d-flex justify-content-center">
    {{ $subcategories->links() }}
    <a href="{{ route('dashboard.sub-categories.index') }}" class="btn btn-primary">
        <i class="fa-solid fa-left-long fs-5"></i> <span>Back to Sub-Categories</span>
    </a>
</div>
@endsection
