<!DOCTYPE html>
<html lang="en">
@include('components.partials.head')
<body>
    <main>
        <div class="flex">
            @include('components.partials.sidebar')
            <div class="w-4/5">
                @include('components.partials.navbar')
                @yield('content')
            </div>
        </div>
    </main>
</body>
</html>