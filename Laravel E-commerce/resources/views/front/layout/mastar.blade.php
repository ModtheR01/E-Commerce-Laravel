    <!DOCTYPE html>
    <html lang="en">
    @include('front.partials.head')

    <body>
        <div class="site-wrap">
            @include('front.partials.navbar')
            @yield('content')
            {{-- @include('front.partials.footer') --}}
            @include('front.partials.scripts')

    </body>

    </html>
