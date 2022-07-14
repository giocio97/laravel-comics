@extends('templates.base')

@section('pageTitle', 'DC Comics - Comic')

@section('pageMain')
    <main>
        <section class="comics-content">
            <div id="jumbotron">

            </div>

            <div class="my_container_comic">
                <div class="label_bg">
                    <div class="label_thumb">
                        <img src="{{ $comic['thumb'] }}" alt="">
                    </div>
                </div>


                <div class="comic_container_bg">
                    <div class="flex_container">
                        <div class="comic_container">
                            <h2>{{ $comic['title'] }}</h2>
                            <div class="price_available">
                                <h4>U.S. Price: {{ $comic['price'] }}</h4>
                                <h4>AVAILABLE</h4>
                                <h4>Check Availability</h4>
                            </div>
                            <div class="desc">
                                <p>{{ $comic['description'] }}</p>
                            </div>
                        </div>

                        <div class="adv_container">
                            <h3>ADVERTISEMENT</h3>
                            <img src="{{asset ('img/adv.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="container_spec">
                        <div class="flex_container">
                            <div class="talent">
                                <h2>TALENT</h2>
                                <span class="desc_talent">
                                    <h5>Art by:</h5>
                                    @foreach ($comic['artists'] as $item)
                                        <a href="#">{{ $item }}</a>
                                    @endforeach
                                </span><br>
                                <span class="desc_talent">
                                    <h5>Written by:</h5>
                                    @foreach ($comic['writers'] as $item)
                                        <a href="#">{{ $item }}</a>
                                    @endforeach
                                </span><br>
                            </div>
                            <div class="spec">
                                <h2>SPEC</h2>
                                <span class="desc_talent">
                                    <h5>Series:</h5> <a href="#">{{ $comic['series'] }}</a>
                                </span><br>
                                <span class="desc_talent">
                                    <h5>U.S. Price:</h5> {{ $comic['price'] }}
                                </span><br>
                                <span class="desc_talent">
                                    <h5>On Sale date:</h5> {{ $comic['sale_date'] }}
                                </span><br>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
    </main>
@endsection
