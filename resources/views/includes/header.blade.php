<!DOCTYPE HTML>
<html>
    <head>
        <title>Student System</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
        <meta name="viewport" content="width=device-width">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet"  href="css/style.css" />
		<!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
		<link rel="stylesheet" href=" {{asset('css/bootstrap.min.css')}}">
		<link href=" {{asset('css/argon-dashboard.css?v=1.1.0')}}" rel="stylesheet" />
		<link href="{{asset('js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
		<link href="{{asset('js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
			
	<!--   Core   -->
	<script src="{{asset('js/plugins/jquery/dist/jquery.min.js')}}"></script>
	<script src="{{asset('js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

    </head>
<body dir="rtl">
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <div class="row w-100">
                    <div class="col-3">
                        <img src="{{asset('img/logo.png')}}" class="mx-auto d-block" style="height:200px" />
                    </div>
                    <div class="col-6 text-center">
                        <span class="h1 mt-3 mb-0 text-white text-center d-none d-lg-inline-block">
                            جامعة البصرة<br/>
                            <span class="h3 text-white">
                            كلية علوم الحاسوب وتكنولوجيا المعلومات
                            </span>
                            <br />
                            <span class="h4 text-white">
                                نظام ادارة الطلاب
                            </span>
                            <br />
                        </span>
                    </div>
                    <div class="col-3">
                        <img src="{{asset('img/logo.png')}}" class="mx-auto d-block" style="height:200px" />
                    </div>
                </div>
            </div>
        </nav>
        <div class="header pb-7 pt-5 pt-md-8 bg-gradient-info " style="background-image: url({{asset('img/cover.jpg')}}); height:200px ; width:100%">
            
        </div>
    </div>
</body>
</html>

