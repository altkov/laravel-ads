<button {{ $attributes->merge(['type' => 'submit', 'class' => 'button button_cancel form__button']) }}>
    {{ $slot }}
</button>
