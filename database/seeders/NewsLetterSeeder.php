<?php

namespace Database\Seeders;
use App\Models\NewsLetter;
use Illuminate\Database\Seeder;

class NewsLetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // id 1
        $newsletter = new NewsLetter();
        $newsletter->title ='اعلان ورشة في جامعة البصرة';
        $newsletter->body ='برعاية السيد رئيس جامعة البصرة الاستاذ الدكتور سعد شاهين المحترم وبأشراف السيدة عميد كلية علوم الحاسوب وتكنولوجيا المعلومات';
        $newsletter->image_path ='newsletter/img/1.jpg';
        $newsletter->save() ;

        // id 2
        $newsletter = new NewsLetter();
        $newsletter->title ='إعلان معرض الكتاب في جامعة البصرة';
        $newsletter->body ='برعاية السيد رئيس جامعة البصرة الدكتور سعد شاهين المحترم وباشراف السيدة عميد كلية علوم الحاسوب وتكنولوجيا المعلومات الدكتورة   سلمى عبد الباقي محمود المحترمة وانطلاقا من هذه العبارة (القراءة تصنع العظماء) تقيم  الكلية معرضا  للكتاب  يوم  الاحد الموافق 28/11/2021 ويستمر لغاية يوم الخميس الموافق 2/12/2021 حضوريا في مبنى الكلية.الدعوة عامة للجميع.';
        $newsletter->image_path ='newsletter/img/2.jpg';

        $newsletter->save() ;
        
        // id 2
        $newsletter = new NewsLetter();
        $newsletter->title ='ورشة عمل توعوية في جامعة البصرة';
        $newsletter->body ='برعاية السيد رئيس جامعة البصرة الدكتور سعد شاهين حمادي المحترم واشراف السيدة عميد كلية علوم الحاسوب وتكنولوجيا المعلومات الدكتور سلمى عبد الباقي محمود  نظمت الكلية يوم الاربعاء  ٢٤-١١-٢٠٢١ حضوريا على قاعة الدراسات العليا ورشة عمل توعوية تحت عنوان" الوعي الامني لدى طلبة ومنتسبوا جامعة اليصرة " حاضر فيها كل من العميد الحقوقي اسماعيل غانم عبدال محاضرة عن مكافحة المخدرات والمؤثرات العقلية واساليب  انتشارها   وطرق الوقاية والتخلص منها .';
        $newsletter->image_path ='newsletter/img/3.jpg';

        $newsletter->save() ;
    }
}
