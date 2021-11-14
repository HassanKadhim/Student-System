

<body>
    <!-- Footer -->
<footer class="footer">
    <div class="row align-items-center justify-content-xl-between " dir="ltr">
        <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
                <a href="#" class="font-weight-bold">University of Basra<br/><small>Computer Science & Information Technology</small></a>
            </div>
        </div>
        {{-- @if (Auth::user()->name)
        <div class="col-xl-6">
            <div class="copyright text-center text-xl-right text-muted">
                <span class="text-primary font-weight-bold" dir="rtl">
                    مرحبا، {{Auth::user()->name}}
                </span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" class="font-weight-bold" onclick="event.preventDefault();
                    this.closest('form').submit();">
                                
                        <br/><small>تسجيل الخروج</small>
                    </a>
                    - <a href="#" class="font-weight-bold">
                        <small>لوحة الإدارة</small>
                    </a>
                </form>
                
            </div>
        </div>
        @else --}}
        <div class="col-xl-6">
        </div>    
        {{-- @endif --}}
</footer>

<script>if (typeof module === 'object') {window.module = module; module = undefined;}</script>

<script src="{{asset('js/ajax.js')}}"></script>
<!--   Optional JS   -->
<script src="{{asset('js/plugins/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('js/plugins/chart.js/dist/Chart.extension.js')}}"></script>
<script src="{{asset('js/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!--   Argon JS   -->
<script src="{{asset('js/argon-dashboard.js?v=1.1.0')}}"></script>

<script>if (window.module) module = window.module;</script>

<script>
// $(function () {
  // $(document).scroll(function () {
    // var $nav = $(".fixed-top");
    // $("#navBar_top").toggleClass('showIt', $(this).scrollTop() > $nav.height());
    // $("#navBar_default").toggleClass('showIt', $(this).scrollTop() > $nav.height());
  // });
// });
</script>

</body>
</html>
