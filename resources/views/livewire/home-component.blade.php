<div>
    <style>
        .wishlisted {
            background-color: #f11289 !important;
            border: 1px solid transparent !important;
        }
        .wishlisted i{
            color: #fff !important;
        }
    </style>
    <main class="main">
        <section class="home-slider position-relative pt-50">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Предложение на обмен</h4>
                                    <h2 class="animated fw-900">Нажмите для деалей</h2>
                                    <h1 class="animated fw-900 text-brand">На все продукты</h1>
                                    <p class="animated">Сохрани больше купонов & и получи 70% скидку</p>
                                    <a class="animated btn btn-brush btn-brush-3" href="product-details.html"> Купить сейчас </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-1" src="{{ asset('assets/imgs/slider/slider-1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Горячие предложения</h4>
                                    <h2 class="animated fw-900">Популярная одежда</h2>
                                    <h1 class="animated fw-900 text-7">Новые коллекции</h1>
                                    <p class="animated">Сохрани  купоны & получи 20% скидку</p>
                                    <a class="animated btn btn-brush btn-brush-2" href="product-details.html"> Купить сейчас </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-2" src="{{ asset('assets/imgs/slider/slider-2.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>
        <section class="featured section-padding position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('assets/imgs/theme/icons/feature-1.png') }}" alt="">
                            <h4 class="bg-1">Быстрая доставка</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('assets/imgs/theme/icons/feature-2.png') }}" alt="">
                            <h4 class="bg-3">Онлайн покупка</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('assets/imgs/theme/icons/feature-3.png') }}" alt="">
                            <h4 class="bg-2">Сохрани деньги</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('assets/imgs/theme/icons/feature-4.png') }}" alt="">
                            <h4 class="bg-4">Акции</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('assets/imgs/theme/icons/feature-5.png') }}" alt="">
                            <h4 class="bg-5">Приятная сделка</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('assets/imgs/theme/icons/feature-6.png') }}" alt="">
                            <h4 class="bg-6">24/7 Помощь</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Скидка</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Популярное</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">Новое</button>
                        </li>
                    </ul>
                    <a href="#" class="view-more d-none d-md-flex">Увидеть больше<i class="fi-rs-angle-double-small-right"></i></a>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            @php
                                $witems = Cart::instance('wishlist')->content()->pluck('id');
                            @endphp
                            @foreach($products as $product)
                                <div class="col-lg-3 col-md-3 col-6 col-sm-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details', ['slug'=>$product->slug]) }}">
                                                    <img class="default-img"
                                                         src="{{ asset('assets/imgs/shop/product-')}}{{$product->id}}-1.jpg"
                                                         alt="{{$product->name}}">
                                                    <img class="hover-img"
                                                         src="{{ asset('assets/imgs/shop/product-')}}{{$product->id}}-2.jpg"
                                                         alt="{{$product->name}}">
                                                </a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Скидка</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html">Одежда</a>
                                            </div>
                                            <h2><a href="product-details.html">{{ $product->name }}</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span> ${{$product->regular_price}} </span>
                                            </div>
                                            <div class="product-action-1 show">
                                                @if($witems->contains($product->id))
                                                    <a aria-label="Remove From Wishlist"
                                                       class="action-btn hover-up wishlisted" href="#"
                                                       wire:click.prevent="removeFromWishlist({{$product->id}})"><i
                                                            class="fi-rs-heart"></i></a>
                                                @else
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#"
                                                       wire:click.prevent="addToWishlist({{ $product -> id }}, '{{ $product -> name}}', {{ $product -> regular_price }})"><i
                                                            class="fi-rs-heart"></i></a>
                                                @endif

                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="#"
                                                   wire:click.prevent="store({{$product->id}}, '{{ $product->name }}', {{ $product->regular_price }})"><i
                                                        class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab two (Popular)-->

                    <!--En tab three (New added)-->
                </div>
                <!--End tab-content-->
            </div>
        </section>


    </main>
</div>
