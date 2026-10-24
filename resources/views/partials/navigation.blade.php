{{--custom navigation--}}
<nav>
    <x-navLink href="{{route('home')}}" :active="request()->routeIs('home')">Home</x-navLink>
    <x-navLink href="{{route('about')}}" :active="request()->routeIs('about')">About us</x-navLink>
    <x-navLink href="{{route('contact')}}" :active="request()->routeIs('contact')">Contact us</x-navLink>
    @auth
        <x-navLink href="{{route('history')}}" :active="request()->routeIs('history')">My fortune cookie history
        </x-navLink>
    @else
        <x-navLink href="{{route('login')}}" :active="request()->routeIs('login')">Log in</x-navLink>
        <x-navLink href="{{route('register')}}" :active="request()->routeIs('register')">Create an account</x-navLink>
    @endauth
</nav>
