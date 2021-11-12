<div class="mt-3">
    <div class="card card-stats">
        <!-- Card body -->
        <div class="card-body">
            <div class="row p-2">
                <div class="col">
                    <h2 class="card-title text-center text-uppercase mb-0">
                            الوقت المتبقي : 
                            <span class="remainingTimeSpan">
                            </span>
                        <span class="text-danger">لقد انتهى الامتحان</span>
                    <input class="timeRemaining" type="hidden" value="<?=$examsTimestamp_remaining?>" />
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<footer class="footer">
    <div class="row align-items-center justify-content-xl-between" dir="ltr">
        <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
                <a href="#" class="font-weight-bold">University of Basra<br/><small>Computer Science & Information Technology</small></a>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="copyright text-center text-xl-right text-muted">
                <span class="text-primary font-weight-bold" dir="rtl">
                مرحبا،
                </span>
                <a href="#" class="font-weight-bold">
                <br/><small>تسجيل الخروج</small>
                </a>
                
                - <a href="#" class="font-weight-bold">
                <small>لوحة الإدارة</small>
                </a>

            </div>
        </div>
    </div>
</footer>
</div>
</div>

</body>

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
