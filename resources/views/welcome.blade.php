@extends('layouts.app')

@section('content')

    <!-- Product Catagories Area Start -->
    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">

            <!-- Single Catagory -->
            @foreach($goods as $goodsProduct)
                <div class="single-products-catagory clearfix">
                    <a href="{{route('showGoods', ['category' => $goodsProduct->category_id,'goods_id' => $goodsProduct->id,])}}">
                        @php
                            //dd(count($goodsProduct->imgs));
                            $imgs = '';
                            if (count($goodsProduct->imgs) > 0) {
                                $imgs = $goodsProduct->imgs[0]['img'];
                            } else $imgs = '/img/no-photo.png';
                        @endphp
                        <img src="{{$imgs}}" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>{{$goodsProduct->price}}</p>
                            <h4>{{$goodsProduct->name}}</h4>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
    <!-- Product Catagories Area End -->

@endsection
