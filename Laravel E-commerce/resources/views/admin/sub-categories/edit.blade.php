@extends('admin.layouts.master')
@section('title', 'Edit Sub-Category')

@section('content')
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Sub-Category</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('dashboard.sub-categories.update',$subcategory->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $subcategory->title) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control">{{ old('description', $subcategory->description) }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Sub-Category</button>
                        <a href="{{ route('dashboard.sub-categories.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
