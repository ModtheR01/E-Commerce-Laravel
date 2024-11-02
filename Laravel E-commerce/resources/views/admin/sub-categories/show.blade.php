@extends('admin.layouts.master')
@section('title', 'Sub-Category Details')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Sub-Category Details</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Title: {{ $subcategory->title }}</h5>
                    <p class="card-text">Description: {{ $subcategory->description ?? 'N/A' }}</p>
                    <p class="card-text">Created By: {{ $subcategory->create_user->name ?? 'N/A' }}</p>
                    <p class="card-text">Updated By: {{ $subcategory->updated_user->name ?? 'N/A' }}</p>
                    <p class="card-text">Created At: {{ $subcategory->created_at }}</p>
                    <p class="card-text">Updated At: {{ $subcategory->updated_at ?? 'N/A' }}</p>

                    <a href="{{ route('dashboard.sub-categories.index') }}" class="btn btn-primary">Back to
                        Sub-Categories</a>
                </div>
            </div>
        </div>
    </div>
@endsection
