<div {{ $attributes->merge(['class' => 'card mt-4']) }}>
    <div class="card-body">
        @isset($title)
            <h1 class="card-title">{{ $title }}</h1>
        @endisset

        {{ $slot }}
    </div>
</div>
