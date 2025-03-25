<x-account-layout>
    <h1>Аккаунт</h1>

    <div class="profile">
        <div class="profile__form">
            @include('profile.partials.update-profile-information-form')
        </div>

        <div class="profile__form">
            @include('profile.partials.update-password-form')
        </div>

        <div class="profile__form">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</x-account-layout>
