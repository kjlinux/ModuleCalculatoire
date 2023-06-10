<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-outline-danger btn-lg btn-block mx-1']) }}>
    {{ $slot }}
</button>
