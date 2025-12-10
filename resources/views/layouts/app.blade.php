<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Meta & global assets --}}
    @include('partials.meta')
    <title>{{ config('app.name', 'Johnny Boy Personal Portfolio') }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    {{-- Global header & navigation --}}
    @include('components.header')

    {{-- Main page content --}}
    <main>
        @yield('content')
    </main>

    {{-- Global footer --}}
    @include('components.footer')

    {{-- Scripts --}}
    @include('partials.scripts')
</body>
</html>
