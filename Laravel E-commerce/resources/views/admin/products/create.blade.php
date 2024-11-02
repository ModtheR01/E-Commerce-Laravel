    @extends("admin.layouts.master")
    @inject('Products', 'App\Models\Products')
    @section("page_header","Products")
    @section("page_name")
    @parent
    <li class="breadcrumb-item"><a href="{{ route('dashboard.products.index') }}">Products</a></li>
    <li class="breadcrumb-item active"><a href="{{ route('dashboard.products.create') }}">Create</a></li>
    @endsection
    @section("content")
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Create Products</h5>
                <!-- Horizontal Form -->
                <form method="post" action="{{route('dashboard.products.store')}}">
                    @csrf
                    {{-- Title  --}}
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText" name ="title">
                    @error('title')<div class="error">{{$message}}</div>@enderror
                    </div>
                    </div>
                    {{-- Description --}}
                    <div class="row mb-3">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="description" name="description"></textarea>
                    @error('description')<div class="error">{{$message}}</div>@enderror
                    </div>
                    </div>
                    {{-- Price  --}}
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText" name ="price">
                    @error('title')<div class="error">{{$message}}</div>@enderror
                    </div>
                    </div>
                    {{-- Quantity  --}}
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Quantity</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText" name ="available_quantity" value="{{ old('available_quantity', $Products->available_quantity) }}">
                    @error('title')<div class="error">{{$message}}</div>@enderror
                    </div>
                    </div>
                    {{-- Sub-Category  --}}
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Sub-Category <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <select class="form-control" name="sub_category_id" id="sub_category_id">
                    @if ($subcategories->count()>0)
                        <option value="" selected>--------Select A Sub-Category</option>
                    @endif
                        @forelse ($subcategories as $subcategory )
                        <option value="{{ $subcategory->id }} {{ $subcategory->id==$Products->sub_category_id ? 'selected': '' }}">{{ $subcategory->title }}</option>
                        @empty
                        <option value="" selected>--------No Categories</option>
                        @endforelse
                    </select>
                    @error('category_id')<div class="error">{{$message}}</div>@enderror
                    </div>
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <!-- End Horizontal Form -->

                </div>
            </div>
    </div>
    </section>

    @endsection
