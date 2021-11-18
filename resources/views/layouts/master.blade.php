<!doctype html>
<html lang="ar" dir="rtl">
    <head>
        @include('includes.header')
        <title>Student - @yield('title')</title>
        @livewireStyles
        @livewireScripts
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <div class="container-fluid mt-4 flex-nowrap" id="app">
            <div class="row mb-5 mb-xl-0">
                <div class="col-xl-3">
                    @include('includes.sidbar')
                </div>
                <div class="col-xl-9">
                    {{-- Main Content --}}
                    @yield('content')
                </div>
            </div>
        </div>    
        <footer>
            @include('includes.footer')
        </footer>
        <x-livewire-alert::scripts />
        <x-livewire-alert::flash />
    </body>
</html>