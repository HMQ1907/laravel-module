<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @include('setting::components.layouts.partials.styles')
</head>

<body>
    @if (Auth::check())
        <livewire:setting::headers />
    @endif

    <main class="container-fluid mt-2 page-container tw-bg-slate-200">
        @if (Auth::check())
            @persist('offcanvas')
                <livewire:setting::offcanvas />
            @endpersist
        @endif
        {{ $slot }}
    </main>
</body>
@include('setting::components.layouts.partials.scripts')

</html>
