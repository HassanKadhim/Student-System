<!doctype html>
<html lang="ar" dir="rtl">
    <head>
        @include('includes.head')
        <title>Student - @yield('title')</title>
        @livewireStyles
        @livewireScripts
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        
        <div class="row flex-nowrap" id="app">
            <div class="col p-0">
                <section class="">
                    <div class="container-fluid">
                        {{-- Main Content --}}
                        @yield('content')
                    </div>
                </section>
                {{-- MENU BAR --}}
                {{-- @include('includes.menubar', ["tools", "tools"]) --}}
            </div>
        </div>

        
        

        <footer>
            @include('includes.footer')
        </footer>
        

        {{-- <x-livewire-alert::scripts /> --}}
    </body>
</html>