<!DOCTYPE html>
<html lang="en">

@include("admin.layouts.partials.head")

<body>

<!-- ======= Header ======= -->
@include("admin.layouts.partials.header")
<!-- End Header -->

<!-- ======= Sidebar ======= -->
@include("admin.layouts.partials.sidebar")

<!-- End Sidebar-->

<main id="main" class="main">

<div class="pagetitle">
        <h1>@yield("page_header")</h1>
        <nav>
            <ol class="breadcrumb">
                @section("page_name")
                <li class="breadcrumb-item"><a  href="{{ route('dashboard.home') }}">Home</a></li>
                @show
            </ol>
        </nav>
    </div><!-- End Page Title -->

    @yield("content")

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include("admin.layouts.partials.footer")

<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include("admin.layouts.partials.scripts")


</body>

</html>
