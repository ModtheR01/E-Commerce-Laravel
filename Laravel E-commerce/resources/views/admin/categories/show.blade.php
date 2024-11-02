@extends('admin.layouts.master')
@section('title', 'Category Details')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Category Details</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Title: {{ $category->title }}</h5>
                    <p class="card-text">Description: {{ $category->description ?? 'N/A' }}</p>
                    <p class="card-text">Created By: {{ $category->create_user->name ?? 'N/A' }}</p>
                    <p class="card-text">Updated By: {{ $category->updated_user->name ?? 'N/A' }}</p>
                    <p class="card-text">Created At: {{ $category->created_at }}</p>
                    <p class="card-text">Updated At: {{ $category->updated_at ?? 'N/A' }}</p>

                    <a href="{{ route('dashboard.categories.index') }}" class="btn btn-primary">Back to Categories</a>
                </div>
            </div>
        </div>
    </div>
@endsection
