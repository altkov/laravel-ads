<x-main-layout>
    <div class="container">

        <form method="POST" action="{{ route('register') }}" class="form form_profile">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" value="Логин" />
                <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" value="Email" />
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" value="Пароль" />

                <x-text-input id="password"
                    type="password"
                    name="password"
                    required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" value="Подтвердите пароль" />

                <x-text-input id="password_confirmation"
                    type="password"
                    name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" />
            </div>

            <div class="form__footer">
                <button class="button" type="submit">Зарегистрироваться</button>

                <a href="{{ route('login') }}">
                    Уже зарегистрированы?
                </a>
            </div>
        </form>

    </div>
</x-main-layout>
