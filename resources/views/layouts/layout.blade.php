@props([
    'title' => 'Laracasts'
    ])

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        nav > a {
            color: blue;
        }
    </style>
</head>
<body>
@include(partials.navigation)

@props(['active' => false])
<a {{ $attributes }} class="{{ $active ? 'text-red' : '' }}">{{ $slot }}</a>

<main>
    {{ $slot }}
</main>
</body>
</html>
