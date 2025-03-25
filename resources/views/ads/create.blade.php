<x-main-layout>
    <main class="main">
        
        <div class="container">
            <h1>Разместить объявление</h1>

            <form method="POST" action="{{ route('ads.store') }}" class="form" enctype="multipart/form-data">
                @csrf

                

                <input value="{{ old('title') }}" type="text" class="form__input @error('title') form__input_error @enderror" placeholder="Заголовок" name="title">
                @error('title')
                    <div class="form__error">{{ $message }}</div>
                @enderror

                <textarea class="form__input form__textarea @error('description') form__input_error @enderror" placeholder="Описание" name="description">{{ old('description') }}</textarea>
                @error('description')
                    <div class="form__error">{{ $message }}</div>
                @enderror

                <label class="form__upload-image @error('img') form__upload-image_error @enderror">
                    <input value="{{ old('img') }}" name="img" type="file" class="hidden" accept="image/gif,image/png,image/jpeg,image/webp">
                    <img class="form__uploaded-img" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAAtJREFUGFdjYAACAAAFAAGq1chRAAAAAElFTkSuQmCC" alt="">

                    Загрузите изображение
                    <img class="form__upload-icon" src="/img/photo.svg" alt="">
                </label>
                @error('img')
                    <div class="form__error">{{ $message }}</div>
                @enderror

                

                <label class="form__label">
                    Категория

                    <x-categories :categories="$categories" :selected="old('category_id')" />

                    @error('category_id')
                        <div class="form__error">{{ $message }}</div>
                    @enderror
                </label>

                

                <input value="{{ old('price') }}" type="number" class="form__input @error('price') form__input_error @enderror" placeholder="Цена" name="price">
                @error('price')
                    <div class="form__error">{{ $message }}</div>
                @enderror

                <button class="button form__button" type="submit">Разместить</button>

            </form>
        </div>
        
    </main>
</x-main-layout>
    