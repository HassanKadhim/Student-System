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
                            
                            الإمتحان التنافسي
                            
                    sdf
                        </span>
                        <Br />
                        <span class="h5 text-white">
                            dfgg
                        </span>
                    </span>
                </div>
                <div class="col-3">
                    <img src="{{asset('img/logo.png')}}" class="mx-auto d-block" style="height:200px" />
                </div>
            </div>
        </div>
    </nav>

<div class="container-fluid mt-3">
    <div class="card card-stats">
        <!-- Card body -->
        <div class="card-body" id="gtq">
            <div class="row">
                <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">الأسم</h5>
                    <span class="h2 font-weight-bold mb-0">
                        dfgdf
                    </span>
                </div>
                <div class="col-auto">
                    <button data-toggle="modal" data-target="#submit-request" class="btn btn-icon btn-warning px-6" dir="ltr" <?=($sendButtonState ? '' : 'disabled')?> type="button">
                        <span class="btn-inner--icon"><i class="fas fa-paper-plane fa-2x"></i></span>
                        <span class="h2 text-white btn-inner--text">
                            تسليم الإجابة
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
	
