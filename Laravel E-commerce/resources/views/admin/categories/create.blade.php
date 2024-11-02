@extends("admin.layouts.master")
@section("page_header","Categories")
@section("page_name")
@parent
<li class="breadcrumb-item"><a href="{{ route('dashboard.categories.index') }}">Categories</a></li>
<li class="breadcrumb-item active"><a href="{{ route('dashboard.categories.create') }}">Create</a></li>
@endsection
@section("content")
<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Create Category</h5>
              <!-- Horizontal Form -->
              <form method="post" action="{{route('dashboard.categories.store')}}">
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
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>
</div>
</section>

@endsection
