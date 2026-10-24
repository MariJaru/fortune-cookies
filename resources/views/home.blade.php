<x-layout title="Home">
    @auth
        <p>Welcome back, {{ Auth::user()->name }}!</p>
    @else
        <p>Welcome! Open a fortune cookie to discover your message.</p>
    @endauth
</x-layout>
