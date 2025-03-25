<x-main-layout>
    <main class="main">
        <div class="container">
            <section class="section-ads">
                <h1>Все объявления</h1>

                <form action="{{ route('ads.index') }}" method="GET" class="filter form form_filter">
                    <div class="filter__fields">
                        <x-categories :selected="request('category_id')" :categories="$categories" />

                        <input class="form__input filter__input" value="{{ request('min') }}" type="number" min="0" max="1000000000" name="min" placeholder="Мин. цена">
                        <input class="form__input filter__input" value="{{ request('max') }}" type="number" min="0" max="1000000000" name="max" placeholder="Макс. цена">
                    </div>
                    
                    <div class="filter__buttons">
                        @if ($filter)
                            <button name="cancel" class="button button_cancel filter__button" type="submit">Сбросить</button>
                        @endif
                        <button class="button filter__button" type="submit">Фильтр</button>
                    </div>
                    
                </form>

                <x-ads :ads="$ads" />
            </section>

        </div>
    </main>
</x-main-layout>