<div>
    @include('layouts.navbar')
    @include('layouts.sidebar')
    <div class="rk-content">
        {{ $slot }}
    </div>
</div>
