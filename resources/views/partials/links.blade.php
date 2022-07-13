<section class="comics-link">
    @foreach ($arrLinks as $link)
    <a href="#">
        <img src="{{$link['url']}}" alt="">
        <h2>{{ $link['name'] }}</h2>
    </a>
    @endforeach
</section>
