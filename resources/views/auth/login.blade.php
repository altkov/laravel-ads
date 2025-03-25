<x-main-layout>
    <div class="container">  
        <!-- Session Status -->
        <x-auth-session-status :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="form form_profile">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" value="Email" />
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="">
                <x-input-label for="password" value="Пароль" />

                <x-text-input id="password"
                    type="password"
                    name="password"
                    required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" />
            </div>

            <div class="form__footer">
                <button class="button" type="submit">Войти</button>
                

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        Забыли пароль?
                    </a>
                @endif
            </div>
        </form>

    </div>
</x-main-layout>
