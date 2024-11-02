@extends('admin.layouts.master')
@section('title', 'Edit Product')

@section('content')
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Product</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('dashboard.products.update',$product->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $product->title) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control">{{ old('description', $product->description) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="description">Price</label>
                            <textarea name="price" id="price" class="form-control">{{ old('price', $product->price) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="description">Quantity</label>
                            <textarea name="available_quantity" id="available_quantity" class="form-control">{{ old('available_quantity', $product->available_quantity) }}</textarea>
                        </div>

                        {{-- <div class="form-group">
                            <label for="description">Category</label>
                            <textarea name="category" id="category" class="form-control">{{ old('description', $product->subcategory->category->title) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="description">Sub-Category</label>
                            <textarea name="subcategory" id="subcategory" class="form-control">{{ old('description', $product->subcategory->title) }}</textarea>
                        </div> --}}

                        <button type="submit" class="btn btn-primary">Update Product</button>
                        <a href="{{ route('dashboard.products.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
