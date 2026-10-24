{{--custom navigation--}}
<nav>
    <x-navLink href="{{route('home')}}" :active="request()->routeIs('home')">Home</x-navLink>
    <x-navLink href="{{route('about')}}" :active="request()->routeIs('about')">About us</x-navLink>
    <x-navLink href="{{route('contact')}}" :active="request()->routeIs('contact')">Contact us</x-navLink>
</nav>
