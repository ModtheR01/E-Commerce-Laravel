    @extends('front.layout.mastar')

    @section('title','Single-Shop')

    @section('content')
    <div class="site-wrap">
        <div class="bg-light py-3">
        <div class="container">
            <div class="row">
            <div class="col-md-12 mb-0"><a href="{{ route('front.index') }}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">{{ $product->title }}</strong></div>
            </div>
        </div>
        </div>

        <div class="site-section">
        <div class="container">
            <div class="row">
            <div class="col-md-6">
                <img src="{{asset('assets-front')}}/images/cloth_2.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2 class="text-black">{{ $product->title }}</h2>
                <p class="mb-4">{{ $product->description }}</p>
                <p><strong class="text-primary h4">{{ $product->price }} EGP</strong></p>
                <div class="mb-1 d-flex">
                <label for="option-sm" class="d-flex mr-3 mb-3">
                    <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-sm" name="shop-sizes"></span> <span class="d-inline-block text-black">Small</span>
                </label>
                <label for="option-md" class="d-flex mr-3 mb-3">
                    <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-md" name="shop-sizes"></span> <span class="d-inline-block text-black">Medium</span>
                </label>
                <label for="option-lg" class="d-flex mr-3 mb-3">
                    <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-lg" name="shop-sizes"></span> <span class="d-inline-block text-black">Large</span>
                </label>
                <label for="option-xl" class="d-flex mr-3 mb-3">
                    <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-xl" name="shop-sizes"></span> <span class="d-inline-block text-black"> Extra Large</span>
                </label>
                </div>
                {{-- <div class="mb-5">
                <div class="input-group mb-3" style="max-width: 120px;">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                </div>
                <input type="text" class="form-control text-center" value="1" min="1" max="{{ $product->available_quantity }}" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" required>
                <div class="input-group-append">
                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                </div>
                </div> --}}
                @if ($product->available_quantity > 0)
                    <div class="mb-5">
                        <div class="input-group mb-3" style="max-width: 120px;">
                            <div class="input-group-prepend">
                                <form action="{{ route('front.cart.add',$product->id)}}" method="POST">
                                    @csrf
                                    <input type="number" name="quantity" value="1" min="1" max="{{ $product->available_quantity }}">
                                    <button type="submit">Add to Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="alert alert-danger" role="alert">
                        This Product is Out Of Stock
                    </div>
                @endif
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="site-section block-3 site-blocks-2 bg-light">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-7 site-section-heading text-center pt-4">
                <h2>Featured Products</h2>
            </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="nonloop-block-3 owl-carousel">
                <div class="item">
                    <div class="block-4 text-center">
                    <figure class="block-4-image">
                        <img src="{{asset('assets-front')}}/images/cloth_2.jpg" alt="Image placeholder" class="img-fluid">
                    </figure>
                    <div class="block-4-text p-4">
                        <h3><a href="#">Tank Top</a></h3>
                        <p class="mb-0">Finding perfect t-shirt</p>
                        <p class="text-primary font-weight-bold">$50</p>
                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="block-4 text-center">
                    <figure class="block-4-image">
                        <img src="{{asset('assets-front')}}/images/cloth_2.jpg" alt="Image placeholder" class="img-fluid">
                    </figure>
                    <div class="block-4-text p-4">
                        <h3><a href="#">Corater</a></h3>
                        <p class="mb-0">Finding perfect products</p>
                        <p class="text-primary font-weight-bold">$50</p>
                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="block-4 text-center">
                    <figure class="block-4-image">
                        <img src="{{asset('assets-front')}}/images/cloth_2.jpg" alt="Image placeholder" class="img-fluid">
                    </figure>
                    <div class="block-4-text p-4">
                        <h3><a href="#">Polo Shirt</a></h3>
                        <p class="mb-0">Finding perfect products</p>
                        <p class="text-primary font-weight-bold">$50</p>
                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="block-4 text-center">
                    <figure class="block-4-image">
                        <img src="{{asset('assets-front')}}/images/cloth_2.jpg" alt="Image placeholder" class="img-fluid">
                    </figure>
                    <div class="block-4-text p-4">
                        <h3><a href="#">T-Shirt Mockup</a></h3>
                        <p class="mb-0">Finding perfect products</p>
                        <p class="text-primary font-weight-bold">$50</p>
                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="block-4 text-center">
                    <figure class="block-4-image">
                        <img src="{{asset('assets-front')}}/images/cloth_2.jpg" alt="Image placeholder" class="img-fluid">
                    </figure>
                    <div class="block-4-text p-4">
                        <h3><a href="#">Corater</a></h3>
                        <p class="mb-0">Finding perfect products</p>
                        <p class="text-primary font-weight-bold">$50</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <footer class="site-footer border-top">
        <div class="container">
            <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="row">
                <div class="col-md-12">
                    <h3 class="footer-heading mb-4">Navigations</h3>
                </div>
                <div class="col-md-6 col-lg-4">
                    <ul class="list-unstyled">
                    <li><a href="#">Sell online</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Shopping cart</a></li>
                    <li><a href="#">Store builder</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4">
                    <ul class="list-unstyled">
                    <li><a href="#">Mobile commerce</a></li>
                    <li><a href="#">Dropshipping</a></li>
                    <li><a href="#">Website development</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4">
                    <ul class="list-unstyled">
                    <li><a href="#">Point of sale</a></li>
                    <li><a href="#">Hardware</a></li>
                    <li><a href="#">Software</a></li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <h3 class="footer-heading mb-4">Promo</h3>
                <a href="#" class="block-6">
                <img src="images/hero_1.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
                <h3 class="font-weight-light  mb-0">Finding Your Perfect Shoes</h3>
                <p>Promo from  nuary 15 &mdash; 25, 2019</p>
                </a>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-5 mb-5">
                <h3 class="footer-heading mb-4">Contact Info</h3>
                <ul class="list-unstyled">
                    <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                    <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                    <li class="email">emailaddress@domain.com</li>
                </ul>
                </div>

                <div class="block-7">
                <form action="#" method="post">
                    <label for="email_subscribe" class="footer-heading">Subscribe</label>
                    <div class="form-group">
                    <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                    <input type="submit" class="btn btn-sm btn-primary" value="Send">
                    </div>
                </form>
                </div>
            </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>

            </div>
        </div>
        </footer>
    </div>
    @endsection
