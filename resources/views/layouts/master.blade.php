<!doctype html>
<html lang="ar" dir="rtl">
    <head>
        @include('includes.header')
        <title>Student - @yield('title')</title>
        @livewireStyles
        @livewireScripts
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <div class="row flex-nowrap" id="app">
            <div class="col p-0  mt-5">
                <section class="">
                    <div class="container-fluid">
                        {{-- Main Content --}}
                        @yield('content')
                    </div>
                </section>
            </div>
        </div>
        <footer>
            @include('includes.footer')
        </footer>
    </body>
</html>