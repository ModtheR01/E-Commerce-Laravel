@extends('admin.layouts.master')
@section('title' , 'Sub-Category')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-end flex-wrap">
                <div class="d-flex justify-contnet-between align-items-end flex-wrap">

                        <a href="{{ route('dashboard.sub-categories.create') }}" class="mx-3 mt-3 btn btn-success text-light font-weight-bold">
                            <span>Add Sub-Category</span>
                        </a>

                </div>
            </div>
        </div>
    </div>
@include('admin.sub-categories.index-messages.messages')
    <!-- Table with stripped rows -->
    <table class="table w-75 m-auto table-bordered table-dark datatable">{{-- datatable table-bordered table-primary --}}
        <thead class='table-dark'>
        <tr>
            <th>#</th>
            <th>id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Category Name</th>
            <th>Created By</th>
            <th>Updated By</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($SubCategories as $SubCategory )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $SubCategory->id }}</td>
                <td>{{ $SubCategory->title }}</td>
                <td>{{ Str::words($SubCategory->description, 5, '....') ?? 'N/A' }}</td>
                <td>{{ $SubCategory->Category->title ??'N/A' }}</td>
                <td>{{ $SubCategory->create_user->name ?? 'N/A' }}</td>
                <td>{{ $SubCategory->updated_user->name ?? 'N/A' }}</td>
                <td>{{ $SubCategory->created_at }}</td>
                <td>{{ $SubCategory->updated_at ?? 'N/A' }}</td>
                <td>
                    <form action="{{ route('dashboard.sub-categories.destroy', $SubCategory->id) }}" method="POST" class="d-flex justify-content-between align-items-center">
                        @csrf
                        @method('DELETE')

                        <a class="btn btn-warning font-weight-bold btn-sm fs-6" href="{{ route('dashboard.sub-categories.show',$SubCategory->id) }}">Show</a>

                        @if (auth()->user()->user_type == 'admin')
                            <a class="btn btn-primary btn-sm font-weight-bold fs-6" href="{{ route('dashboard.sub-categories.edit',$SubCategory->id) }}">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm font-weight-bold fs-6">Delete</button>
                        @endif
                    </form>

                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8" class="text-center">No categories found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <div class="my-4 d-flex justify-content-center">
        {{-- {{ $categories->links() }} --}}
    </div>
    <!-- End Table with stripped rows -->



@endsection
