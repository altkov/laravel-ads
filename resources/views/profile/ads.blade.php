<x-account-layout>
    <h1>Мои объявления</h1>

    <div class="commercials-table">
        @foreach ($ads as $ad)
            <div class="commercial commercials__commercial">
                <img src="/storage/{{ $ad['img'] }}" alt="" class="commercial__img">

                <div class="commercial__content">
                    <a href="{{ route('ads.show', $ad['id']) }}" class="commercial__title">{{ $ad['title'] }}</a>
                    <div class="commercial__text">{!! nl2br(e(
                    Str::words($ad['description'], 15)
                    )) !!}</div>

                    <div class="commercial__price">{{ Number::format($ad['price']) }} руб.</div>

                    <div class="commercial__controls">
                        <a href="{{ route('ads.edit', $ad['id']) }}" class="commercial__edit commercial__link">Изменить</a>

                        <a href="{{ route('ads.destroy', $ad['id']) }}" class="commercial__edit commercial__link">Удалить</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-account-layout>