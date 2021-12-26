
<nav class="navbar navbar-vertical rounded fixed-right navbar-expand-md navbar-light bg-white sidenav-edit" id="sidenav-main">
    <div class="">
    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Brand -->
    <h1 class="navbar-brand pt-0 mt-2">
        لوحة الإدارة
    </h1>
    <!-- Collapse -->
    <div class="collapse navbar-collapse mt-0 pt-0" id="sidenav-collapse-main">
    <style>
        @media (min-width: 768px){
            .navbar-vertical .navbar-collapse:before{
                margin: 0rem;
            }
        }
    </style>
        <div class="container pr-3">
            <div class="row">
            
                    <!-- Administration Panel:start -->
                    <div class="container">
                        <ul class="navbar-nav">
                            @if (auth()->user()->type === 'admin')
                            <li class="nav-item">
                                <a class="nav-link  @if(Route::currentRouteName()== 'index') active @endif  "  href="{{ route('index') }}"> <i class="ni ni-tv-2 text-info"></i> الصفحة الرئيسية
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if(Route::currentRouteName()== 'student') active @endif"  href="{{ route('student') }}">
                                    <i class="fas fa-user text-info"></i> الطلاب
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if(Route::currentRouteName()== 'timesheet') active @endif" href="{{ route('timesheet') }}">
                                    <i class="far fa-calendar-check text-info"></i> الغيابات
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if(Route::currentRouteName()== 'stage') active @endif " href="{{ route('stage') }}">
                                    <i class="fas fa-bookmark text-info"></i> الاقسام
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if(Route::currentRouteName()== 'subject') active @endif " href="{{ route('subject') }}">
                                    <i class="fas fa-book text-info"></i> المواد
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if(Route::currentRouteName()== 'eaxm') active @endif " href="{{ route('eaxm') }}">
                                    <i class="fas fa-book-open text-info"></i> الامتحانات
                                    </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link @if(Route::currentRouteName()== 'grade') active @endif " href="{{ route('grade') }}">
                                    <i class="fas fa-graduation-cap text-info"></i> الدرجات
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if(Route::currentRouteName()== 'newsletter') active @endif " href="{{ route('newsletter') }}">
                                        <i class="ni ni-bell-55 text-info"></i> الاشعارات
                                    </a>
                                </li>
                            @endif
                            
                        </ul>
                    </div>
                    <!-- Administration Panel:finish -->
                    <!-- Student Questions Panel:start -->
            </div>
        </div>
    </div>
    @if (auth()->user()->type === 'admin')
    <br/><br/><a class="btn text-white position-relative fixed-bottom btn-block bg-gradient-info"   href="{{ route('student-add') }}" >اضافة طالب جديد</a>;
    @endif
</nav>
