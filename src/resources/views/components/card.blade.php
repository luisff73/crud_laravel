@props(['title'])

<div class="card">
    @isset($title)
        <h2 class="card-title">{{ $title }}</h2>
    @endisset

    <div class="card-body">
        {{ $slot }}
    </div>
</div>




