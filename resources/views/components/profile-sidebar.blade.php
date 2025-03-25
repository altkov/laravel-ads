<div class="sidebar">
    <div class="sidebar__item">
        <a href="{{ route('profile') }}" class="sidebar__link">Аккаунт</a>
    </div>
    <div class="sidebar__item">
        <a href="{{ route('profile.ads') }}" class="sidebar__link">Мои объявления</a>
    </div>
    <form method="POST" action="{{ route('logout') }}" class="sidebar__item">
        @csrf

        <button href="{{ route('logout') }}" class="sidebar__link button-unstyled">Выход</button>
    </form>
    
    
    
</div>