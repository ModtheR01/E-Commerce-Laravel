@extends('admin.layouts.master')
@section('title', 'Product Details')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Product Details</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Title: {{ $product->title }}</h5>
                    <p class="card-text">Description: {{ $product->description ?? 'N/A' }}</p>
                    <p class="card-text">Price: {{ $product->price ?? 'N/A' }}</p>
                    <p class="card-text">Quantity: {{ $product->available_quantity ?? 'N/A' }}</p>
                    <p class="card-text">Sub-Category: {{ $product->subCategory->title ?? 'N/A' }}</p>
                    <p class="card-text">Category: {{ $product->subCategory->category->title ?? 'N/A' }}</p>
                    <p class="card-text">Created By: {{ $product->create_user->name ?? 'N/A' }}</p>
                    <p class="card-text">Updated By: {{ $product->update_user->name ?? 'N/A' }}</p>
                    <p class="card-text">Created At: {{ $product->created_at }}</p>
                    <p class="card-text">Updated At: {{ $product->updated_at ?? 'N/A' }}</p>

                    <a href="{{ route('dashboard.products.index') }}" class="btn btn-primary">Back to
                        Products</a>
                </div>
            </div>
        </div>
    </div>
@endsection
