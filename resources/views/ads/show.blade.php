<x-main-layout>
    <div class="main">
        <div class="container">
            <article class="article">
                <h1 class="article__title">{{ $ad['title'] }}</h1>
                <div class="article__meta">
                    <div class="article__date">{{ $ad['created_at']->format('d.m.Y h:i') }}</div>
                    <a href="#" class="article__author"><img src="/img/user.svg" alt=""> {{ $ad['user']['name'] }}</a>
                </div>

                <div class="article__picture">
                    <img src="/storage/{{ $ad['img'] }}" alt="">
                </div>

                <div class="article__content">
                    {!! nl2br(e($ad['description'])) !!}
                </div>

                <div class="article__price">
                    {{ Number::format($ad['price']) }} руб.
                </div>

                <div class="article__footer">
                    <div class="article__category">
                        Категория: <a href="#">{{ $ad['category']['name'] }}</a>
                    </div>

                    @if (Auth::id() === $ad['user']['id'])
                        <a href="{{ route('ads.edit', $ad['id']) }}">Редактировать</a>
                    @endif
                </div>
            </article>
        </div>
    </div>
</x-main-layout>
