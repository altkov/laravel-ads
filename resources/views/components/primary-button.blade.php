<button {{ $attributes->merge(['type' => 'submit', 'class' => 'button form__button']) }}>
    {{ $slot }}
</button>
