@extends('front.layouts.app')


@section('content')

        <section class="section-1">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <!-- <img src="front-assets/images/carousel-1.jpg" class="d-block w-100" alt=""> -->

                        <picture>
                            <source media="(max-width: 799px)" srcset="{{ asset('front-assets/images/carousel-1-m.jpg') }}" />
                            <source media="(min-width: 800px)" srcset="{{ asset('front-assets/images/carousel-1.jpg') }}" />
                            <img src="{{ asset('front-assets/images/carousel-1.jpg') }}" alt="" />
                        </picture>

                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3">
                                <h1 class="display-4 text-white mb-3">Kids Fashion</h1>
                                <p class="mx-md-5 px-5">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3" href="{{ route('front.shop') }}">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">

                        <picture>
                            <source media="(max-width: 799px)" srcset="{{ asset('front-assets/images/carousel-2-m.jpg') }}" />
                            <source media="(min-width: 800px)" srcset="{{ asset('front-assets/images/carousel-2.jpg') }}" />
                            <img src="{{ asset('front-assets/images/carousel-2.jpg') }}" alt="" />
                        </picture>

                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3">
                                <h1 class="display-4 text-white mb-3">Womens Fashion</h1>
                                <p class="mx-md-5 px-5">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3" href="{{ route('front.shop') }}">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!-- <img src="front-assets/images/carousel-3.jpg" class="d-block w-100" alt=""> -->

                        <picture>
                            <source media="(max-width: 799px)" srcset="{{ asset('front-assets/images/carousel-3-m.jpg') }}" />
                            <source media="(min-width: 800px)" srcset="{{ asset('front-assets/images/carousel-3.jpg') }}" />
                            <img src="{{ asset('front-assets/images/carousel-3.jpg') }}" alt="" />
                        </picture>

                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3">
                                <h1 class="display-4 text-white mb-3">Shop Online at Flat 70% off on Branded Clothes</h1>
                                <p class="mx-md-5 px-5">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3" href="{{ route('front.shop') }}">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="section-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="box shadow-lg">
                            <div class="fa icon fa-check text-primary m-0 mr-3"></div>
                            <h2 class="font-weight-semi-bold m-0">Quality Product</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 ">
                        <div class="box shadow-lg">
                            <div class="fa icon fa-shipping-fast text-primary m-0 mr-3"></div>
                            <h2 class="font-weight-semi-bold m-0">Free Shipping</h2>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="box shadow-lg">
                            <div class="fa icon fa-exchange-alt text-primary m-0 mr-3"></div>
                            <h2 class="font-weight-semi-bold m-0">14-Day Return</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 ">
                        <div class="box shadow-lg">
                            <div class="fa icon fa-phone-volume text-primary m-0 mr-3"></div>
                            <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-3">
            <div class="container">
                <div class="section-title">
                    <h2>Categories</h2>
                </div>
                <div class="row pb-3">
                    @if(getCategories()->isNotEmpty())
                        @foreach(getCategories() as $category)
                            <div class="col-lg-3">
                                <div class="cat-card">
                                    <div class="left">
                                        <img src="{{ asset("uploads/category/thumbnails/".$category->image) }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="right">
                                        <div class="cat-data">
                                            <h2>{{ $category->name }}</h2>
                                            {{--                                        <p>100 Products</p>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>

        <section class="section-4 pt-5">
            <div class="container">
                <div class="section-title">
                    <h2>Featured Products</h2>
                </div>
                <div class="row pb-3">
                    @if($featuredProducts->isNotEmpty())
                        @foreach($featuredProducts as $product)

                            <div class="col-md-2">
                                <div class="card product-card">
                                    <div class="product-image position-relative">
                                        @if(!empty($product->product_image->image))
                                            <a href="{{ route('front.product',$product->slug) }}" class="product-img"><img class="card-img-top" src="{{ asset('uploads/product/small/'.$product->product_image->image ) }}" alt=""></a>
                                        @else
                                            <a href="{{ route('front.product',$product->slug) }}" class="product-img"><img src="{{ asset('admin-assets/img/default-150x150.png') }}" ></a>
                                        @endif
                                        <a class="whishlist" href="javascript:void(0)" onclick="addToWishlist({{ $product->id }})"><i class="fas fa-heart"></i></a>

                                        <div class="product-action">
                                            <a class="btn btn-dark" href="javascript:void(0)" onclick="addToCart({{ $product->id }})">
                                                <i class="fa fa-shopping-cart"></i> Add To Cart
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body text-center mt-3">
                                        <a class="h6 link" href="{{ route('front.product',$product->slug) }}">{{ (strlen($product->title)<20) ? $product->title : substr($product->title,0,16).'..' }}</a>
                                        <div class="price mt-2">
                                            <span class="h5"><strong>{{ $product->price }} TK</strong></span>
                                            @if($product->compare_price>0)
                                            </br>
                                            <span class="h6 text-underline"><del>{{ $product->compare_price }} TK</del></span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>

        <section class="section-4 pt-5">
            <div class="container">
                <div class="section-title">
                    <h2>Latest Produsts</h2>
                </div>
                <div class="row pb-3">
                    @if($latestProducts->isNotEmpty())
                        @foreach($latestProducts as $latestProduct)
                            <div class="col-md-2">
                                <div class="card product-card">
                                    <div class="product-image position-relative">
                                        <a href="{{ route('front.product',$latestProduct->slug) }}" class="product-img"><img class="card-img-top" src="{{ asset('uploads/product/small/'.$latestProduct->product_image->image ) }}" alt=""></a>
                                        <a class="whishlist" href="javascript:void(0)" onclick="addToWishlist({{ $latestProduct->id }})"><i class="fas fa-heart" ></i></a>
                                        <div class="product-action">
                                            <a class="btn btn-dark" href="javascript:void(0)" onclick="addToCart({{ $latestProduct->id }})">
                                                <i class="fa fa-shopping-cart"></i> Add To Cart
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body text-center mt-3">
                                        <a class="h6 link" href="{{ route('front.product',$latestProduct->slug) }}">{{ (strlen($latestProduct->title)<20) ? $latestProduct->title : substr($latestProduct->title,0,16).'..' }}</a>
                                        <div class="price mt-2">
                                            <span class="h5"><strong>{{ $latestProduct->price }} Tk</strong></span>
                                            @if($latestProduct->compare_price>0)
                                            </br>
                                               <span class="h6 text-underline"><del>{{ $latestProduct->compare_price }}</del></span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
@endsection
