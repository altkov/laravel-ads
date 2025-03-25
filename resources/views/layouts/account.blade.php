<x-main-layout>
    <div class="container">
        <div class="account-page">
            <x-profile-sidebar />

            <div class="account-page__content">
                {{ $slot }}
            </div>
            
        </div>
    </div>
</x-main-layout>