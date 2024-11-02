    @extends("admin.layouts.master")
    @inject('SubCategories', 'App\Models\SubCategories')
    @section("page_header","Sub-Categories")
    @section("page_name")
    @parent
    <li class="breadcrumb-item"><a href="{{ route('dashboard.sub-categories.index') }}">Sub-Categories</a></li>
    <li class="breadcrumb-item active"><a href="{{ route('dashboard.sub-categories.create') }}">Create</a></li>
    @endsection
    @section("content")
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Create Sub-Category</h5>
                <!-- Horizontal Form -->
                <form method="post" action="{{route('dashboard.sub-categories.store')}}">
                    @csrf
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText" name ="title">
                    @error('title')<div class="error">{{$message}}</div>@enderror
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="description" name="description"></textarea>
                    @error('description')<div class="error">{{$message}}</div>@enderror
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Category <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <select class="form-control" name="category_id" id="category_id">
                    @if ($Categories->count()>0)
                        <option value="" selected>--------Select A Category</option>
                    @endif
                        @forelse ($Categories as $category )
                        <option value="{{ $category->id }} {{ $category->id==$SubCategories->category_id ? 'selected': '' }}">{{ $category->title }}</option>
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
                </form><!-- End Horizontal Form -->

                </div>
            </div>
    </div>
    </section>

    @endsection
