@extends('Home.layouts.master')
@section('head')

    <style>[_nghost-c35] {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-bottom: 40px; }

        .apply-container-box[_ngcontent-c35] {
            background-color: #ffffff;
            border-radius: 3px;
            padding: 15px;
            -webkit-box-shadow: 0 1px 0 1px rgba(220, 221, 224, 0.5), 0 1px 0 0 rgba(208, 209, 213, 0.5);
            box-shadow: 0 1px 0 1px rgba(220, 221, 224, 0.5), 0 1px 0 0 rgba(208, 209, 213, 0.5);
            margin-top: 0; }

        h1[_ngcontent-c35] {
            font-size: 20px;
            margin: .67em 0;
            color: #576366; }

        .content-container[_ngcontent-c35] {
            width: 60%; }

        @media (min-width: 320px) and (max-width: 767px) {
            .content-container[_ngcontent-c35] {
                width: 95%; } }

        @media (min-width: 768px) and (max-width: 980px) {
            .content-container[_ngcontent-c35] {
                width: 90%; } }

        @media (min-width: 981px) and (max-width: 1220px) {
            .content-container[_ngcontent-c35] {
                width: 85%; } }

        .btn[_ngcontent-c35] {
            display: inline-block;
            margin-bottom: 0;
            font-weight: normal;
            text-align: center;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            background-image: none;
            border: 1px solid transparent;
            border-bottom: 4px solid;
            white-space: nowrap;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            padding: 10px 25px;
            font-size: 13px;
            line-height: 1.3333333;
            border-radius: 6px;
            background-color: #0285D7;
            border-color: rgba(0, 0, 0, 0.05) !important;
            -webkit-box-shadow: inset -1px 1px 0 0 rgba(255, 255, 255, 0);
            box-shadow: inset -1px 1px 0 0 rgba(255, 255, 255, 0);
            float: left;
            color: white; }

        .btn[_ngcontent-c35]:hover {
            background-color: #0093ee; }

        .apply-header[_ngcontent-c35] {
            background: #7cd8f8 url("./assets/images/static-pages/background_apply.png") no-repeat center;
            width: 100%;
            text-align: center;
            padding-top: 30px; }

        .apply-header[_ngcontent-c35]   .content-container[_ngcontent-c35] {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center; }

        .videoWrapper[_ngcontent-c35] {
            width: 100%;
            margin: 0 30px;
            -webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.5);
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.5);
            border-radius: 5px;
            overflow: hidden;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center; }

        #video-player[_ngcontent-c35] {
            width: 100%;
            height: auto;
            cursor: pointer; }

        .apply-header[_ngcontent-c35]   ul[_ngcontent-c35] {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            width: 100%;
            list-style-type: none;
            margin: 0;
            padding: 0; }

        .apply-header[_ngcontent-c35]   ul[_ngcontent-c35]   li[_ngcontent-c35] {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            background: #ebeced;
            border-radius: 5px 5px 0 0;
            padding: 15px 0px;
            font-size: 13px;
            color: #8d9ba6;
            margin-top: 40px;
            margin-right: 5px;
            margin-left: 5px;
            -webkit-transition: all 0.2s;
            transition: all 0.2s; }

        .apply-header[_ngcontent-c35]   ul[_ngcontent-c35]   li[_ngcontent-c35]:first-child {
            margin-right: 0; }

        .apply-header[_ngcontent-c35]   ul[_ngcontent-c35]   li[_ngcontent-c35]:last-child {
            margin-left: 0; }

        .apply-header[_ngcontent-c35]   ul[_ngcontent-c35]   li[_ngcontent-c35]:hover {
            cursor: pointer;
            color: #394048; }

        .apply-header[_ngcontent-c35]   ul[_ngcontent-c35]   li[_ngcontent-c35]   i[_ngcontent-c35] {
            margin-left: 8px; }

        .apply-header[_ngcontent-c35]   ul[_ngcontent-c35]   li.activeMode[_ngcontent-c35] {
            background: #ffffff;
            padding: 20px 0;
            margin-top: 30px; }

        .download-link[_ngcontent-c35] {
            margin-top: 15px; }

        .download-link[_ngcontent-c35]   a[_ngcontent-c35] {
            color: white;
            font-size: 13px;
            margin-left: 20px; }

        .download-link[_ngcontent-c35]   a[_ngcontent-c35]:hover {
            color: #394048; }

        .download-link[_ngcontent-c35]   a[_ngcontent-c35]   i[_ngcontent-c35] {
            margin-left: 8px; }

        #assist-section[_ngcontent-c35], #submit-course[_ngcontent-c35] {
            margin-top: 20px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column; }

        #assist-section[_ngcontent-c35]   h2[_ngcontent-c35], #rule-section[_ngcontent-c35]   h2[_ngcontent-c35], #files-section[_ngcontent-c35]   h2[_ngcontent-c35], #faq[_ngcontent-c35]   h2[_ngcontent-c35], #rules[_ngcontent-c35]   h2[_ngcontent-c35] {
            font-size: 17px;
            font-weight: 500;
            line-height: 28px;
            color: #383d48; }

        #assist-section[_ngcontent-c35]   p[_ngcontent-c35] {
            color: #b0b4b7;
            font-size: 13px;
            text-align: justify;
            line-height: 22px; }

        #assist-section[_ngcontent-c35]    > div[_ngcontent-c35]:not(.bottom) {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center; }

        #assist-section[_ngcontent-c35]    > div[_ngcontent-c35]    > div[_ngcontent-c35]:last-child {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-flex: 3;
            -ms-flex: 3;
            flex: 3; }

        #assist-section[_ngcontent-c35]    > div[_ngcontent-c35]    > div[_ngcontent-c35]:first-child {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1; }

        .bar[_ngcontent-c35] {
            height: 8px;
            width: 100px;
            background-color: #f79604; }

        #assist-section[_ngcontent-c35]   hr[_ngcontent-c35] {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 0;
            border-top: 1px solid #eeeeee;
            width: 100%; }

        .bottom[_ngcontent-c35]   span[_ngcontent-c35] {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            font-size: 13px;
            color: #636b73;
            margin-top: 2px; }

        .bottom[_ngcontent-c35]   i[_ngcontent-c35] {
            color: #337ab7; }

        .bottom[_ngcontent-c35]   span[_ngcontent-c35]:hover {
            color: #23527c;
            cursor: pointer; }

        .form-section[_ngcontent-c35] {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-bottom: 25px; }

        .form-section.radio[_ngcontent-c35] {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row; }

        .form-section[_ngcontent-c35]    > div[_ngcontent-c35] {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex; }

        .form-section[_ngcontent-c35]   input[_ngcontent-c35], .form-section[_ngcontent-c35]   textarea[_ngcontent-c35] {
            display: block;
            width: 100%;
            font-size: 13px;
            line-height: 1.42857143;
            color: #555555;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            background: #F0F1F3;
            padding: 20px 10px !important;
            border: none;
            border-bottom: 2px solid #EAEAEA;
            margin-top: 0;
            height: 40px; }

        .form-section[_ngcontent-c35]   input.err[_ngcontent-c35], .form-section[_ngcontent-c35]   textarea.err[_ngcontent-c35] {
            border: 1px solid #D0021B; }

        .form-section[_ngcontent-c35]   input[_ngcontent-c35]::-webkit-input-placeholder, .form-section[_ngcontent-c35]   textarea[_ngcontent-c35]::-webkit-input-placeholder {
            opacity: .65; }

        .form-section[_ngcontent-c35]   input[_ngcontent-c35]::-moz-placeholder, .form-section[_ngcontent-c35]   textarea[_ngcontent-c35]::-moz-placeholder {
            opacity: .65; }

        .form-section[_ngcontent-c35]   input[_ngcontent-c35]:focus, .form-section[_ngcontent-c35]   textarea[_ngcontent-c35]:focus {
            border-color: #66afe9;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6); }

        .form-section[_ngcontent-c35]   textarea[_ngcontent-c35] {
            resize: vertical;
            min-height: 62px;
            overflow-x: hidden; }

        .form-section[_ngcontent-c35]   label[_ngcontent-c35] {
            margin-bottom: 10px;
            font-weight: normal;
            font-size: 13px;
            color: #6f7881;
            max-width: 100%; }

        .form-section[_ngcontent-c35]   span[_ngcontent-c35] {
            font-weight: normal;
            font-size: 13px;
            color: #44c8f5;
            cursor: default; }

        .form-section[_ngcontent-c35]   span[_ngcontent-c35] {
            color: red;
            font: 600 15px tahoma;
            position: relative;
            top: 4px; }

        .gc[_ngcontent-c35] {
            width: 300px;
            height: 74px;
            background-color: #e4e4e4;
            margin-left: auto;
            margin-right: auto; }

        #submit-course[_ngcontent-c35]   p.hint[_ngcontent-c35] {
            font-size: 14px;
            color: #969b9f;
            list-style: none;
            margin-right: 0;
            padding: 0;
            text-align: justify;
            margin-bottom: 0; }

        #submit-course[_ngcontent-c35]   h2[_ngcontent-c35] {
            margin: 0 0;
            font-size: 17px;
            font-weight: 500;
            line-height: 28px;
            color: #384047; }

        #submit-course[_ngcontent-c35]   p.hint.subHint[_ngcontent-c35] {
            margin-top: 0;
            margin-bottom: 20px; }

        #submit-course[_ngcontent-c35]   p.hint.sampleVid[_ngcontent-c35] {
            font-size: 12px; }

        #submit-course[_ngcontent-c35]   .form-section[_ngcontent-c35]:nth-child(5)    > div[_ngcontent-c35] {
            font-size: 14px;
            line-height: 1.42857143;
            color: #333;
            margin-bottom: 18px; }

        .rule-container[_ngcontent-c35] {
            padding-left: 30px; }

        .faq-container[_ngcontent-c35] {
            padding: 10px 30px; }

        #rule-section[_ngcontent-c35]     a, #files-section[_ngcontent-c35]     a, #faq[_ngcontent-c35]     a, #submit-course[_ngcontent-c35]     a, #rules[_ngcontent-c35]     a {
            cursor: pointer;
            color: #0093ee; }

        #rule-section[_ngcontent-c35]     a:hover, #files-section[_ngcontent-c35]     a:hover, #faq[_ngcontent-c35]     a:hover, #submit-course[_ngcontent-c35]     a:hover, #rules[_ngcontent-c35]     a:hover {
            color: #0076BD; }

        #rule-section[_ngcontent-c35]   p[_ngcontent-c35], #files-section[_ngcontent-c35]   p[_ngcontent-c35], #faq[_ngcontent-c35]   p[_ngcontent-c35] {
            color: #bababa; }

        #rules[_ngcontent-c35]     li {
            color: #bababa;
            margin-bottom: 10px; }

        #submit-course[_ngcontent-c35]   h3[_ngcontent-c35] {
            font-size: 16px;
            font-weight: 500;
            line-height: 25px;
            color: #383d48; }

        #submit-course[_ngcontent-c35]   .afterSend[_ngcontent-c35] {
            margin: 20px 0 20px 0;
            padding: 5px 15px;
            border: 1px solid #0093ee;
            background-color: rgba(0, 147, 238, 0.1); }
        #submit-course[_ngcontent-c35]   .afterSend[_ngcontent-c35]   p[_ngcontent-c35], #submit-course[_ngcontent-c35]   .afterSend[_ngcontent-c35]   li[_ngcontent-c35] {
            font-size: 13px;
            font-weight: 500;
            line-height: 22px;
            color: #6f7881; }
    </style>
@endsection
@section('content')
    <alert _ngcontent-c0="" _nghost-c2="" class="ng-tns-c2-1"><div _ngcontent-c2="" class="ng-tns-c2-1" id="alertContainer">
            <div _ngcontent-c2="" class="ng-tns-c2-1" id="alert-holder">
                <!---->
            </div>
        </div>


    </alert>
    <loading-bar _ngcontent-c0="" _nghost-c3=""><div _ngcontent-c3="" class="loadingBarFill done" style="width: 100%;"></div></loading-bar>
    <router-outlet _ngcontent-c0=""></router-outlet>
    <static-pages class="">







        <router-outlet></router-outlet><f-apply _nghost-c35=""><div _ngcontent-c35="" class="apply-header">
                <div _ngcontent-c35="" class="container al-center">
                    <div _ngcontent-c35="" class="content-container">








                        <ul _ngcontent-c35="">
                            <li _ngcontent-c35="" class="wrapped activeMode" ><i _ngcontent-c35="" class="fa fa-file-text-o"></i>همکاری با فرانش</li>
                            <li _ngcontent-c35="" class="wrapped" ><i _ngcontent-c35="" class="fa fa-download"></i>فایل‌های مورد نیاز</li>
                            <li _ngcontent-c35="" class="wrapped" ><i _ngcontent-c35="" class="fa fa-book"></i>استانداردهای فرانش</li>

                            <li _ngcontent-c35="" class="wrapped"><i _ngcontent-c35="" class="fa fa-balance-scale"></i>قوانین تولید</li>
                            <li _ngcontent-c35="" class="wrapped" ><i _ngcontent-c35="" class="fa fa-plus-circle"></i>ثبت دوره آموزشی</li>
                        </ul>
                    </div>
                </div>

            </div>
            <div _ngcontent-c35="" class="container al-center">
                <div _ngcontent-c35="" class="apply-container-box content-container">
                    <!----><div _ngcontent-c35="" id="assist-section" class="">
                        <div _ngcontent-c35="" class="flex-row wrapped jus-center">
                            <div _ngcontent-c35="" class="wi-xs-100" style="text-align: center"><img _ngcontent-c35="" src="/assets/70_.b14464cc8d6fec5f55b0e3b1e8938561.png"></div>
                            <div _ngcontent-c35="" class="wi-xs-100">
                                <h2 _ngcontent-c35="">درصد همکاری با فرانش چگونه است ؟</h2>
                                <div _ngcontent-c35="" class="bar"></div>
                                <p _ngcontent-c35="">فرانش تنها بستر عرضهٔ محتوا است و تولیدکننده را در فروش آن سهیم می‌کند. فرانش برای محتوای رایگان هیچ مبلغی را از تولیدکننده دریافت نخواهد کرد و همواره بازاریابی را بر روی محتوا انجام خواهد داد. اگر محتوا خریدنی (برای فروش) باشد و به‌صورت انحصاری در فرانش قرار داده شود، ٪۷۰ از فروش به تولیدکننده تقدیم می‌گردد. و برای محتوایی که خارج از فرانش نیز به صورت آنلاین منتشر شود، ٪۵۰ از فروش به تولیدکننده تقدیم خواهد شد. فرانش محتوا را به هیچ‌وجه نمی‌خرد و دستمزد نمی‌پردازد.</p>
                            </div>
                        </div>
                        <div _ngcontent-c35="" class="flex-row wrapped jus-center">
                            <div _ngcontent-c35="" class="wi-xs-100" style="text-align: center"><img _ngcontent-c35="" src="/assets/perc.b46373d14b2dbe22655ae793d2c1343f.png"></div>
                            <div _ngcontent-c35="" class="wi-xs-100">
                                <h2 _ngcontent-c35="">محتوای من چقدر می ارزد؟</h2>
                                <div _ngcontent-c35="" class="bar"></div>
                                <p _ngcontent-c35="">ارزش گذاری محتوای تولیدکنندگان بر عهدهٔ خود آنها است. اما فرانش بر اساس معیارهای مختلف رشد بازار و قیمت‌های رقابتی، بازهٔ قیمت را به تولید‌کننده پیشنهاد خواهد داد. تولیدکننده می‌تواند بر اساس تشخیص و سیاست‌های رقابتی خود، قیمت نهایی را مشخص کند.</p>
                            </div>
                        </div>
                        <div _ngcontent-c35="" class="flex-row wrapped jus-center">
                            <div _ngcontent-c35="" class="wi-xs-100" style="text-align: center"><img _ngcontent-c35="" src="/assets/pay.8e0394faa4d6bc69c7380150ba6d187c.png"></div>
                            <div _ngcontent-c35="" class="wi-xs-100">
                                <h2 _ngcontent-c35="">نحوه و شرایط تسویه در فرانش چگونه است ؟</h2>
                                <div _ngcontent-c35="" class="bar"></div>
                                <p _ngcontent-c35="">در پنل فرانش لیست کاملی از فروش، درآمد، میزان بازخورد، و تعداد شرکت‌کنندگان در اختیار شما قرار می‌گیرد تا در تولید آموزش‌های بهتر به شما کمک کند. در صورتی که مبلغ حساب شما بیشتر از ۱۰۰ هزارتومان باشد، در هر زمانی که مایل بودید می‌توانید درخواست تسویه حساب خودتان را بدهید.  فرانش در روز پانزدهم هر ماه به درخواست‌های تسویه رسیدگی می‌کند و ظرف مدت ۷۲ ساعت از پایان وقت اداری پانزدهم ماه شمسی مبلغ مورد درخواست به حساب اساتید واریز خواهد شد.</p>
                            </div>
                        </div>
                        <hr _ngcontent-c35="">
                        <div _ngcontent-c35="" class="bottom flex-row jus-end wi-100">
                            <a href="{{url('page/teach')}}">
                                <span _ngcontent-c35="">فایل‌های مورد نیاز<i _ngcontent-c35="" class="fa fa-arrow-left" style="margin-right: 10px;"></i></span>

                            </a>
                        </div>
                    </div>
                    <!---->
                    <!---->















                    <!---->
                    <!---->
                </div>
            </div>
        </f-apply>
    </static-pages>

@endsection
@section('js')
    <script>
        function openComment(CommentName) {
            var i;
            var x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
                x[i].class = "active";
            }
            document.getElementById(CommentName).style.display = "block";
            document.getElementById(CommentName).class = "active";
        }
    </script>
    <script>
        function openTab(tabName) {
            var i;
            var x = document.getElementsByClassName("tab");
            for (i = 0; i< x.length; i++){
                x[i].style.display = "none";
            }
            document.getElementById(tabName).style.display= "block";

        }
    </script>
@endsection
