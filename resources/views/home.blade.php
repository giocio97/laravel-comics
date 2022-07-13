@extends('templates.base')

@section('pageTitle', 'DC Comics - Home')

@section('pageMain')
    <main>
        <section class="comics-content">
            <div id="jumbotron">

            </div>
            <div class="my_container">
                <div class="label">
                    <h3>Current Series</h3>
                </div>

                <div class="cards_container">
                    @foreach ($arrComics as $comic)
                        <div class="cards">
                            <img src="{{$comic['thumb']}}" alt="">
                            <h4>{{ $comic['title'] }}</h4>
                        </div>
                    @endforeach
                </div>


            </div>

            <div class="button">
                <h4>LOAD MORE</h4>
            </div>
        </section>
    </main>
@endsection
