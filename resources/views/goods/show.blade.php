@extends('layouts.app')

@section('title', 'Просмотр')

@section('content')

    <!-- Product Details Area Start -->
    <div class="single-product-area section-padding-100 clearfix">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mt-50">
                            <li class="breadcrumb-item"><a href="/">Главная</a></li>
                            <li class="breadcrumb-item"><a href="/goods/{{''}}">{{''}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{''}}</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="single_product_thumb">
                        <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li class="active"
                                    data-target="#product_details_slider"
                                    data-slide-to="0"
                                    style="background-image: url(/img/product-img/pro-big-1.jpg);"
                                >
                                </li>
                            </ol>
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <a class="gallery_img" href="/img/product-img/pro-big-1.jpg">
                                        <img class="d-block w-100" src="/img/product-img/pro-big-1.jpg" alt="First slide">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="single_product_desc">
                        <!-- Product Meta Data -->
                        <div class="product-meta-data">
                            <div class="line"></div>
                            <p class="product-price">{{''}} Руб</p>
                            <h2>{{''}}</h2>
                            <!-- Avaiable -->
                            <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                        </div>

                        <div class="short_overview my-5">
                            <p>{{''}}</p>
                        </div>

                        <!-- Add to Cart Form -->
                        <form class="cart clearfix" method="POST">
                            @csrf
                            <div class="cart-btn d-flex mb-50">
                                <p>Кол-во</p>
                                <div class="quantity">
                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                    <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <button type="submit" name="addtocart" value="5" class="btn amado-btn">Добавить в корзину</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Details Area End -->
</div>
<!-- ##### Main Content Wrapper End ##### -->

@endsection
