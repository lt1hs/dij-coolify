@props([
    'title',
    'description' => null,
])

<section class="auth-shell application-settings-form">
    <div class="auth-shell-content">
        <div class="auth-card">
            <div class="auth-card-heading">
                <img src="/dij-logo.png" alt="" class="mb-3 size-9" /><h1 class="dij-wordmark !text-lg">{{ $title }}</h1><small class="block text-[10px] tracking-[0.25em] text-fg-faint">AI INFRASTRUCTURE</small>
                @if ($description)
                    <p>{{ $description }}</p>
                @endif
            </div>

            <div class="auth-card-body">
                {{ $slot }}
            </div>

            @isset($footer)
                <footer class="auth-card-footer">
                    {{ $footer }}
                </footer>
            @endisset
        </div>
    </div>
</section>
