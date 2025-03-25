<div class="commercials">
    @foreach ($ads as $ad)
        <a href="{{ route('ads.show', $ad['id']) }}" class="commercial commercials__commercial">
            <img src="/storage/{{ $ad['img'] }}" alt="" class="commercial__img">

            <div class="commercial__content">
                <div class="commercial__title">{{ $ad['title'] }}</div>
                <div class="commercial__text">{!! nl2br(e(
                Str::words($ad['description'], 15)
                )) !!}</div>

                <div class="commercial__price">{{ Number::format($ad['price']) }} руб.</div>
            </div>
        </a>
    @endforeach
</div>
