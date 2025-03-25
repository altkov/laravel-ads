<x-account-layout>
    <h1>Мои объявления</h1>

    <div class="ads-table">
        @foreach ($ads as $ad)
            <div class="ad ads__ad">
                <img src="/storage/{{ $ad['img'] }}" alt="" class="ad__img">

                <div class="ad__content">
                    <a href="{{ route('ads.show', $ad['id']) }}" class="ad__title">{{ $ad['title'] }}</a>
                    <div class="ad__text">{!! nl2br(e(
                    Str::words($ad['description'], 15)
                    )) !!}</div>

                    <div class="ad__price">{{ Number::format($ad['price']) }} руб.</div>

                    <div class="ad__controls">
                        <a href="{{ route('ads.edit', $ad['id']) }}" class="ad__edit ad__link">Изменить</a>

                        <a href="{{ route('ads.destroy', $ad['id']) }}" class="ad__edit ad__link">Удалить</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-account-layout>