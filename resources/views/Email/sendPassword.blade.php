@component('mail::message')
<div dir="rtl" style="text-align: right">
<h3 style="text-align: right"><b>مرحبا</b></h3>   
<span>استخدم الرمز أدناه للدخول للنظام :</span>
</div>
<h1 style="margin: 20px 0 ; text-align: center ; background: #edf2f7 ; padding: 10px ; letter-spacing: 5px"><b>{{$password}}</b></h1> 
<div style="text-align: center">
<span>  شكرا لاستخدامك</span> 
<span><b>{{ config('app.name')}}</b></span>
</div>
@endcomponent
