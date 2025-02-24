<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Livewire</title>
        <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
        <script src="https://cdn.tailwindcss.com"></script>

        <style>
        </style>

    </head>
    <body>

        <livewire:counter />

        @livewireScripts
    </body>
</html>
