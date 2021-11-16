<?php
    use Illuminate\Support\Str;

function get_cities(){
    $cities = [
        'بغداد' ,
        'البصرة' ,
        'نينوى' ,
        'أربيل' ,
        'حلبجة' ,
        'النجف' ,
        'ذي قار' ,
        'كركوك' ,
        'الأنبار' ,
        'ديالى' ,
        'المثنى',
        'القادسية',
        'ميسان',
        'واسط',
        'صلاح الدين',
        'دهوك',
        'السليمانية',
        'بابل',
        'كربلاء',
    ];

    return $cities ;
}

function randomPassword() {
    $password = Str::random(9);
    $password = strtoupper($password);
    $password =Str::replace('0','H',$password);
    $password =Str::replace('O','a',$password);
    $password =Str::replace('I','s',$password);
    $password =Str::replace('1','n',$password);

    return $password;
}