<div class="ads">
    @foreach ($ads as $ad)
        <a href="{{ route('ads.show', $ad['id']) }}" class="ad ads__ad">
            <img src="/storage/{{ $ad['img'] }}" alt="" class="ad__img">

            <div class="ad__content">
                <div class="ad__title">{{ $ad['title'] }}</div>
                <div class="ad__text">{!! nl2br(e(
                Str::words($ad['description'], 15)
                )) !!}</div>

                <div class="ad__price">{{ Number::format($ad['price']) }} руб.</div>
            </div>
        </a>
    @endforeach
</div>
