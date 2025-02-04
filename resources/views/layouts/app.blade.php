<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', get_settings('system_name')) }}</title>
        
        <!-- Fonts -->
        
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
{{-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
<link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@400;700&display=swap" rel="stylesheet">

    </head>
    <body class="font-Fraunces">
        <p style="font-weight: 400;">This is a normal weight text.</p>

    </body>
</html>
