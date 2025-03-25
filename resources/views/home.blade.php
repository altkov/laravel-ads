<x-main-layout>
    <main class="main">
        <div class="container">
            <section class="info main__info">
                <div class="info__content">
                    <h1>Нереально крутой проект</h1>

                    <div class="info__description">Описание нереально крутого проекта. Morbi feugiat justo at turpis
                        hendrerit, scelerisque interdum arcu interdum. Nulla sollicitudin erat metus, sit amet aliquam
                        enim aliquam et. Nam blandit justo at pellentesque sollicitudin. Suspendisse interdum euismod
                        imperdiet. Donec in consequat lectus. Aliquam vitae nisl justo. Proin cursus tincidunt ultrices.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et tincidunt eros. Etiam purus
                        lectus, tincidunt vitae posuere quis, tincidunt pretium felis. Fusce consequat sed tortor quis
                        elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus.<br><br>
                        Suspendisse eu diam cursus, hendrerit purus eget, consectetur ipsum. Nunc elementum laoreet nisi, vitae suscipit sem. Suspendisse nibh justo, suscipit in porta vitae, consequat sit amet neque. Nam sagittis mauris at ipsum blandit rutrum. Vivamus finibus vestibulum augue, sit amet venenatis nulla ultrices quis. Morbi non tellus efficitur, interdum nibh sed, vestibulum tortor. Etiam ut condimentum lacus, ut venenatis sapien. Integer aliquam tristique magna sed hendrerit. Maecenas bibendum laoreet dignissim. Sed bibendum orci lectus, eu posuere lorem semper eu.
                    </div>
                </div>
                <div class="info__img-container">
                    <img class="info__img" src="/img/fat.jpg" alt="">
                    <p class="info__img-caption">Изображение проекта</p>
                </div>
            </section>

            <section class="section-commercials">
                <h2>Нереально крутые объявления</h2>
                <p>Может разместить каждый</p>

                <x-ads :ads="$ads" />

                <a href="{{ route('ads.index') }}" class="section-commercials__more button">Смотреть все</a>
            </section>
        </div>
    </main>
</x-main-layout>