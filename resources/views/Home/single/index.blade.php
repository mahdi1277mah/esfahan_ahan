@extends('Home.layouts.master')
@section('head')



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
@endsection
@section('content')


    <alert _ngcontent-c0="" _nghost-c2="" class="ng-tns-c2-1">
        <div _ngcontent-c2="" class="ng-tns-c2-1" id="alertContainer">
            <div _ngcontent-c2="" class="ng-tns-c2-1" id="alert-holder">
                <!---->
            </div>
        </div>


    </alert>
    <loading-bar _ngcontent-c0="" _nghost-c3="">
        <div _ngcontent-c3="" class="loadingBarFill done" style="width: 100%;"></div>
    </loading-bar>
    <router-outlet _ngcontent-c0=""></router-outlet>
    <single _nghost-c12="" class="ng-tns-c12-9" style="display: none;">
        <div _ngcontent-c12="" class="courseParent wi-100" typeof="Course">

            <form _ngcontent-c12="" class="ng-tns-c12-9 ng-untouched ng-pristine ng-valid" id="downloadIForm"
                  method="post" novalidate="" style="display:none !important;" target="_blank" action="">
                <input _ngcontent-c12="" class="ng-tns-c12-9" name="token" style="display: none!important;" type="text">
            </form>
            <!---->

            <!---->

            <!---->

            <div _ngcontent-c12="" class="container">
                <!---->
                <div _ngcontent-c12="" class="topRow" id="topRow">
                    <h1 _ngcontent-c12="" class="ng-tns-c12-9" property="name" style="
margin: 0;
    font-size: 23px;
    font-weight: 600;
    line-height: 34px;
    color: #383d48;text-align: inherit  ;
">{{$course->title}}</h1>
                    <span _ngcontent-c12="" class="hidden">
				<meta _ngcontent-c12="" class="ng-tns-c12-9" property="name"
                      content="{{$course->title}}">
				<meta _ngcontent-c12="" class="ng-tns-c12-9" property="description"
                      content="{{$course->title}} ">
				<meta _ngcontent-c12="" class="ng-tns-c12-9" property="image" content="5eae3e6f7d9f5-indicators.jpg">
			</span>
                    <span _ngcontent-c12="" class="hidden" property="provider" typeof="CollegeOrUniversity">
				<meta _ngcontent-c12="" class="ng-tns-c12-9" content="فرانش" property="name">
			</span>
                    <meta _ngcontent-c12="" class="ng-tns-c12-9" property="courseCode" content="17311">
                    <meta _ngcontent-c12="" class="ng-tns-c12-9" property="thumbnailUrl"
                          content="{{$course->images['thumb']}}">
                </div>
                <!---->
                <div _ngcontent-c12="" class="mainRow flex-row wi-100 jus-center wrapped ng-tns-c12-9">
                    <div _ngcontent-c12="" class="rightCol wi-lg-25 wi-sm-100 wi-xs-100"
                         style="position: relative; min-height: 872px;">
                        <div _ngcontent-c12="" class="wi-100" fix=""
                             style="position: absolute; padding-bottom: 15px; ">
                            <!---->
                            <!---->
                            <course-data _ngcontent-c12="" _nghost-c17="" class="ng-tns-c17-12 ng-tns-c12-9">
                                <div _ngcontent-c17="" class="courseDataParent wi-100 flex-col al-center jus-start">
                                    <div _ngcontent-c17=""
                                         class="courseInnerParent wi-100 flex-col al-center jus-start">
                                        <div _ngcontent-c17="" class="flex-row jus-between al-center wi-100 wrapped"
                                             property="aggregateRating" typeof="AggregateRating">
                                            <div _ngcontent-c17=""
                                                 class="wishRow wi-100 flex-row al-center jus-between ng-tns-c17-12">
                                                <form action="{{route('course.rating.add',$course->id)}}" method="post">
                                                    @csrf
                                                    @if(auth()->user() && ! auth()->user()->checkRating($course))
                                                        <button _ngcontent-c17="" type="submit" value="1" name="rating"
                                                                class="beforeWish ng-tns-c17-12"
                                                                style="background: #fff;border: none;display: inline-flex">

                                                            <i class="fas fa-star" value="1"
                                                               style="display: flex;font-size: 24px;color: #A4A4A4;margin-bottom: 5px;cursor: pointer;"
                                                               title="بد"></i>
                                                        </button>
                                                        <button _ngcontent-c17="" type="submit" value="2" name="rating"
                                                                class="beforeWish ng-tns-c17-12"
                                                                style="background: #fff;border: none;display: inline-flex">


                                                            <i class="fas fa-star" value="2"
                                                               style="display: flex;font-size: 24px;color: #A4A4A4;margin-bottom: 5px;cursor: pointer;"
                                                               title="ضعیف"></i>
                                                        </button>
                                                        <button _ngcontent-c17="" type="submit" value="3" name="rating"
                                                                class="beforeWish ng-tns-c17-12"
                                                                style="background: #fff;border: none;display: inline-flex">

                                                            <i class="fas fa-star" value="3"
                                                               style="display: flex;font-size: 24px;color: #A4A4A4;margin-bottom: 5px;cursor: pointer;"
                                                               title="معمولی"></i>
                                                        </button>
                                                        <button _ngcontent-c17="" type="submit" value="4" name="rating"
                                                                class="beforeWish ng-tns-c17-12"
                                                                style="background: #fff;border: none;display: inline-flex">

                                                            <i class="fas fa-star" value="4"
                                                               style="display: flex;font-size: 24px;color: #A4A4A4;margin-bottom: 5px;cursor: pointer;"
                                                               title="خوب"></i>
                                                        </button>
                                                        <button _ngcontent-c17="" type="submit" value="5" name="rating"
                                                                class="beforeWish ng-tns-c17-12"
                                                                style="background: #fff;border: none;display: inline-flex">

                                                            <i class="fas fa-star" value="5"
                                                               style="display: flex;font-size: 24px;color: #A4A4A4;margin-bottom: 5px;cursor: pointer;"
                                                               title="عالی"></i>
                                                        </button>

                                                    @else
                                                        @php

                                                            $rates =\App\Rating::where('course_id','=',$course->id)->get();
                                                            $sum = 0;
                                                             $ave = 0;
                                                            if ($rates->count() > 0)
                                                                {
                                                                    foreach ($rates as $rate){
                                                                        $sum+=$rate->rating;
                                                                    }
                                                                    $ave = round($sum / $rates->count());
                                                                }

                                                        @endphp

                                                        @if($rates[0]->rating =='1')
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                            @elseif($rates[0]->rating =='2')
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>


                                                        @elseif($rates[0]->rating =='3')
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>


                                                        @elseif($rates[0]->rating =='4')
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ccc;margin-bottom: 5px;"></i>


                                                        @elseif($rates[0]->rating =='5')
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>
                                                            <i class="fas fa-star" aria-hidden="true" style="display: inline-flex;font-size: 24px;color: #ffc830;margin-bottom: 5px;"></i>



                                                        @endif
                                                    @endif
                                                </form>
                                                <div _ngcontent-c17=""
                                                     class="flex-row jus-center al-center ng-tns-c17-12">
                                                    <div _ngcontent-c17="" class="rateNum">۴.۷۷</div>
                                                    <div _ngcontent-c17="" class="rateCount">از ۳۸۸ رای</div>
                                                </div>
                                            </div>
                                            <!---->

                                        </div>
                                        <div _ngcontent-c17="" class="portions wi-100 flex-row jus-between al-start">
                                            <!---->
                                            <div _ngcontent-c17=""
                                                 class="discountBadge flex-col al-center jus-center ng-tns-c17-12">
                                                <span _ngcontent-c17="" class="discountPercentage">۴۰%</span>
                                                تخفیف
                                            </div>
                                            <div _ngcontent-c17="" class="titles">اطلاعات دوره</div>
                                            <div _ngcontent-c17="" class="flex-col jus-center al-center wi-30">

                                                <i class="far fa-clock"
                                                   style="display: flex;font-size: 24px;color: #6f7881;margin-bottom: 5px;"></i>
                                                <div _ngcontent-c17="" class="desc">مدت دوره</div>
                                                <div _ngcontent-c17="" class="value">{{$course->time}}</div>
                                            </div>
                                            <div _ngcontent-c17="" class="flex-col jus-center al-center wi-30">
                                                <i class="fas fa-list"
                                                   style="display: flex;font-size: 24px;color: #6f7881;margin-bottom: 5px;transform: rotate(180deg)"></i>

                                                <div _ngcontent-c17="" class="desc">تعداد ویدیوها</div>
                                                <div _ngcontent-c17="" class="value">۱۲</div>
                                            </div>
                                            <div _ngcontent-c17="" class="flex-col jus-center al-center wi-30">
                                                <i class="far fa-question-circle"
                                                   style="display: flex;font-size: 24px;color: #6f7881;margin-bottom: 5px;"></i>

                                                <div _ngcontent-c17="" class="desc">تعداد پرسش‌ها</div>
                                                <div _ngcontent-c17="" class="value">۰</div>
                                            </div>
                                        </div>
                                    </div>

                                    @if(auth()->user() && ! auth()->user()->checkLearning($course))
                                        @if( auth()->user()->isActive())


                                        <div _ngcontent-c17="" class="enrollElement applyBtn wi-100">
                                            <form action="{{route('cart.add',$course->id)}}" method="post">
                                                {{csrf_field()}}
                                                <input type="hidden" name="course_id" value="{{$course->id}}">

                                                <button type="submit"
                                                        class="callEnroll flex-row jus-between al-center ng-tns-c28-8"
                                                        style="width: -webkit-fill-available;background: content-box;border: none;cursor: pointer">
                                       <span class="startCourse ng-tns-c28-8"
                                             style="-webkit-box-flex: 1;-ms-flex-positive: 1;flex-grow: 1;text-align: center;font-size: 21px;color: #fff">
                                           ثبت‌ نام و دانلود
                                       </span>
                                                    <span class="enrollPrice"
                                                          style="-ms-flex-negative: 0;flex-shrink: 0;font-size: 24px;line-height: 33px;padding-right: 15px;padding-left: 15px;border-right: 1px solid rgba(255, 255, 255, 0.4);position: relative;color: #fff">
                                           {{$course->price}}
                                       </span>
                                                </button>
                                            </form>
                                        </div>
                                        @endif
                                    @elseif(! auth()->user())
                                        <div _ngcontent-c17="" class="enrollElement applyBtn wi-100">
                                            <form action="{{route('cart.add')}}" method="post">
                                                {{csrf_field()}}
                                                <input type="hidden" name="course_id" value="{{$course->id}}">

                                                <button type="submit"
                                                        class="callEnroll flex-row jus-between al-center ng-tns-c28-8"
                                                        style="width: -webkit-fill-available;background: content-box;border: none;cursor: pointer">
                                       <span class="startCourse ng-tns-c28-8"
                                             style="-webkit-box-flex: 1;-ms-flex-positive: 1;flex-grow: 1;text-align: center;font-size: 21px;color: #fff">
                                           ثبت‌ نام و دانلود
                                       </span>
                                                    <span class="enrollPrice"
                                                          style="-ms-flex-negative: 0;flex-shrink: 0;font-size: 24px;line-height: 33px;padding-right: 15px;padding-left: 15px;border-right: 1px solid rgba(255, 255, 255, 0.4);position: relative;color: #fff">
                                           {{$course->price}}
                                       </span>
                                                </button>
                                            </form>
                                        </div>
                                    @else
                                        <div _ngcontent-c34="" class="enrollElement applyBtn wi-100 enrolled" style="background-color: rgba(78, 206, 61, 0.1);
    cursor: default;
    color: #4ECE3D;height: 50px;">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-c34="" class="isEnroll wi-100 ng-tns-c34-8"
                                                 style="text-align: center;margin-top: 12px;">شما دانشجوی این
                                                دوره هستید
                                            </div>
                                            <!---->
                                        </div>

                                    @endif
                                    <div _ngcontent-c17="" class="moneyBack wi-100 ng-tns-c17-12">
                                        <p _ngcontent-c17="" class="ng-tns-c17-12"><span _ngcontent-c17=""
                                                                                         class="far fa-gem"></span>
                                            تضمین بازگشت ۱۰۰٪ وجه در صورت نارضایتی!</p>
                                    </div>


                                    <!---->

                                    {{--                                        <div _ngcontent-c17="" class="wishRow wi-100 flex-row al-center jus-between ng-tns-c17-7">--}}
                                    {{--                                            <form action="{{route('course.favorite.remove',$course->id)}}" method="post">--}}
                                    {{--                                                @csrf--}}
                                    {{--                                                <button _ngcontent-c17="" type="submit" class="beforeWish ng-tns-c17-12"--}}
                                    {{--                                                        style="background: #fff;border: none">--}}
                                    {{--                                                    <i class="fas fa-heart"--}}
                                    {{--                                                       style="display: flex;font-size: 24px;color: red;margin-bottom: 5px"></i>--}}

                                    {{--                                                </button>--}}
                                    {{--                                            </form>--}}
                                    {{--                                            <span _ngcontent-c17="" class="ng-tns-c17-7">در لیست مورد‌علاقه‌های شما</span>--}}
                                    {{--                                        </div>--}}


                                    <div _ngcontent-c17=""
                                         class="wishRow wi-100 flex-row al-center jus-between ng-tns-c17-12">
                                        <form action="{{route('course.favorite.add',$course->id)}}" method="post">
                                            @csrf
                                            <button _ngcontent-c17="" type="submit" class="beforeWish ng-tns-c17-12"
                                                    style="background: #fff;border: none">
                                                @if(auth()->user() && ! auth()->user()->checkFavorite($course))
                                                    <i class="fas fa-heart"
                                                       style="display: flex;font-size: 24px;color: #A4A4A4;margin-bottom: 5px"></i>

                                                @else
                                                    <i class="fas fa-heart"
                                                       style="display: flex;font-size: 24px;color: red;margin-bottom: 5px"></i>

                                                @endif
                                            </button>
                                        </form>
                                        @if(auth()->user() && ! auth()->user()->checkFavorite($course))
                                            <span _ngcontent-c17=""
                                                  class="ng-tns-c17-12">افزودن به لیست مورد‌علاقه‌ها</span>
                                        @else

                                            <span _ngcontent-c17=""
                                                  class="ng-tns-c17-12">در لیست مورد‌علاقه‌های شما</span>
                                        @endif
                                    </div>


                                </div>
                            </course-data>
                            <!---->
                            <!---->
                            <author-info _ngcontent-c12="" _nghost-c19="" class="ng-tns-c12-9">
                                <div _ngcontent-c19="" class="authorInfoParent wi-100 flex-col al-center jus-start"
                                     typeof="Person">
                                    <div _ngcontent-c19="" class="picture"
                                         style="background-image: url({{$course->user->img}});"></div>
                                    <!----><a _ngcontent-c19="" class="nameLink" href="/">{{$course->user->name}}
                                    </a>
                                    <div _ngcontent-c19="" class="socials flex-row jus-center al-center"
                                         style="margin-top: 0px;">
                                        <!---->
                                    </div>
                                    <!---->
                                    <!---->
                                    <div _ngcontent-c19=""
                                         class="aboutAuthor portions wi-100 flex-row jus-between al-start">
                                        <div _ngcontent-c19="" class="titles">درباره مدرس</div>
                                        <p _ngcontent-c19="" class="flex-col jus-center al-center wi-100"
                                           style="text-align: right;">
                                            {{$course->user->about_us}}
                                        </p>
                                    </div>
                                </div>
                            </author-info>
                            <share-box _ngcontent-c12="" class="ng-tns-c12-9 ng-tns-c20-10" _nghost-c20="">
                                <div _ngcontent-c20="" class="shareBox wi-100">
                                    <div _ngcontent-c20="" class="mainRow wi-100 flex-row jus-between al-center">
                                        <div _ngcontent-c20="" class="title">اشتراک گذاری</div>
                                        <div _ngcontent-c20="" class="flex-row al-center">

                                            <a _ngcontent-c20="" class="shareItems telegramShare" target="_blank"
                                               href="unsafe:tg://msg?text=https://faranesh.com/business/17311-tahlil-technical%20@faraneshcom">
                                                <i _ngcontent-c20="" class="icon-ff-social-telegram"></i>
                                            </a>
                                            <div _ngcontent-c20="" class="shareItems popupBtn">
                                                <i _ngcontent-c20="" class="fa fa-envelope"></i>
                                            </div>
                                            <a _ngcontent-c20="" class="shareItems" target="_blank"
                                               href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://faranesh.com/business/17311-tahlil-technical&amp;title=تحلیل تکنیکال پیشرفته: اندیکاتورها&amp;source=فرانش">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                            <a _ngcontent-c20="" class="shareItems" target="_blank"
                                               href="https://twitter.com/intent/tweet?hashtags=فرانش&amp;related=faraneshcom&amp;url=https://faranesh.com/business/17311-tahlil-technical&amp;text=تحلیل تکنیکال پیشرفته: اندیکاتورها&amp;via=faraneshcom">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                            <a _ngcontent-c20="" class="shareItems" target="_blank"
                                               href="https://www.facebook.com/share.php?u={{url('/series/')}}/{{$course->slug}}">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!---->
                                </div>
                                <!----></share-box>

                        </div>
                    </div>
                    <div _ngcontent-c12="" class="leftCol wi-lg-75 wi-sm-100 wi-xs-100">
                        <!---->
                        <div _ngcontent-c12="" class="playerHolder wi-100 ng-tns-c12-9">
                            <div _ngcontent-c12="" class="playerContainer wi-100 hi-100">
                                <video src="{{$episode['videos']}}
" controls style="width: inherit"></video>

                            </div>
                        </div>
                        <!---->
                        <div _ngcontent-c12="" class="courseCharacteristics wi-100 flex-row jus-between ng-tns-c12-9">
                            <div _ngcontent-c12="" class="flex-row al-center">
                                <i class="fas fa-key flex-col" style="    font-size: 50px;margin-left: 10px;"></i>
                                دسترسی سریع
                            </div>
                            <div _ngcontent-c12="" class="flex-row al-center">
                                <i class="fas fa-comments flex-col" style="    font-size: 50px;margin-left: 10px;"></i>
                                ارتباط با استاد
                            </div>
                            <!---->
                            <div _ngcontent-c12="" class="flex-row al-center ng-tns-c12-9">
                                <i class="fas fa-wallet flex-col" style="    font-size: 50px;margin-left: 10px;"></i>
                                امکان بازگشت وجه
                            </div>
                            <!---->
                        </div>
                        <!---->
                        <div _ngcontent-c12="" class="courseContents wi-100 ng-tns-c12-9">
                            <tabs-holder _ngcontent-c12="" class="ng-tns-c12-9" _nghost-c6="">
                                <ul _ngcontent-c6="" class="nav nav-tabs wrapped register">
                                    <!---->
                                    <div _ngcontent-c6="">
                                        <!---->
                                        <div _ngcontent-c6="" class="none separator"></div>
                                        <li _ngcontent-c6="" class="active">
                                            <!---->
                                            <span _ngcontent-c6="">توضیحات و سرفصل دوره</span>
                                            <!---->
                                            <!---->

                                        </li>
                                        <!---->
                                        <div _ngcontent-c6="" class="separator"></div>
                                    </div>

                                </ul>
                                <div _ngcontent-c6="" class="contentHolder register">

                                    <tab-child _ngcontent-c12="" _nghost-c7="" class=" ng-tns-c12-9 ">
                                        <div _ngcontent-c7="" class="pane active">

                                            <!---->
                                            <div _ngcontent-c12="" class="wi-100 courseDescription ng-tns-c12-9"
                                                 property="description">
                                                {!! $course->body !!}
                                            </div>
                                            <!----><h2 _ngcontent-c12="" class="courseCurriculumTitle ng-tns-c12-9">
                                                سرفصل دوره</h2>
                                            <!---->
                                            <sp-item-list _ngcontent-c12="" _nghost-c18="" class="ng-tns-c12-9"><!---->
                                                <accordin-holder _ngcontent-c18="" _nghost-c27="" class="">
                                                    <!---->
                                                    <div _ngcontent-c18="">
                                                        <!---->
                                                        <!---->
                                                        <item-list _ngcontent-c18="" itemlistmode="" _nghost-c29="">
                                                            <!---->
                                                            <ul _ngcontent-c29="">
                                                                <!---->
                                                                @foreach($course->episode()->get() as $episode)
                                                                    <li _ngcontent-c29="">
                                                                        <div _ngcontent-c29="" class="itemTitle">
                                                                            <div _ngcontent-c29="" class="identifier">
                                                                                <!---->
                                                                                <div _ngcontent-c29="">
                                                                                    <!----><span
                                                                                        _ngcontent-c29="">{{$episode->number}}</span>
                                                                                    <!---->
                                                                                </div>
                                                                                <!---->
                                                                            </div>

                                                                            <span _ngcontent-c29="" class="flex-row">
				                    <h3 _ngcontent-c29=""> {{$episode->title}}</h3>
                                                                                <!----><span _ngcontent-c29=""
                                                                                             class="freeSpan">
                                                                                @if($episode->type=='free')
                                                                                        نمایش رایگان
                                                                                    @elseif($episode->type == 'vip')
                                                                                        مخصوص اعضای ویژه
                                                                                    @else
نقدی

                                                                                    @endif

                                                                            </span>
			</span>
                                                                        </div>
                                                                        <div _ngcontent-c29="">
                                                                            <span
                                                                                _ngcontent-c29="">{{$episode->time}}</span>
                                                                            <!---->
                                                                            <div _ngcontent-c29="">
                                                                                <a href="{{$episode->download()}}">
                                                                                    <i _ngcontent-c29=""
                                                                                       class="fa fa-download dl-btn">

                                                                                    </i>
                                                                                </a>

                                                                            </div>

                                                                            <!---->

                                                                        </div>
                                                                    </li>
                                                                @endforeach


                                                            </ul>

                                                        </item-list>
                                                    </div>
                                                </accordin-holder>

                                                <!----></sp-item-list>


                                        </div>
                                    </tab-child>
                                    <!---->
                                    <!---->

                                </div>
                            </tabs-holder>
                        </div>

                        <!---->
                        <div _ngcontent-c12="" class="courseReviewComponent wi-100 ng-tns-c12-9">
                            <reviews _ngcontent-c12="" class="ng-tns-c12-9 ng-tns-c21-13" _nghost-c21="">
                                <div _ngcontent-c21="" class="flex-row jus-between al-end">
                                    <h3 _ngcontent-c21="" class="ng-tns-c21-13">نقد و بررسی دانشجویان دوره</h3>
                                </div>


                            </reviews>
                        </div>

                        <!---->

                        <!---->
                        <div _ngcontent-c12="" class="commentsAndDiscussions wi-100 ng-tns-c12-9">
                            <tabs-holder _ngcontent-c12="" class="ng-tns-c12-9" _nghost-c6="">
                                <ul _ngcontent-c6="" class="nav nav-tabs wrapped register">
                                    <!---->
                                    <div _ngcontent-c6="">
                                        <!---->
                                        <div _ngcontent-c6="" class="none separator"></div>
                                        <li _ngcontent-c6="" class="">
                                            <!---->
                                            <span _ngcontent-c6="">
                                            <button class="btn btn-default" style="background: #fff"
                                                    onclick="openComment('London')">نقد و بررسی درباره دوره (۲)</button>
                                            </span>
                                            <!---->
                                            <!---->

                                        </li>
                                        <!---->
                                        <div _ngcontent-c6="" class="separator"></div>
                                    </div>
                                    <div _ngcontent-c6="">
                                        <!---->
                                        <div _ngcontent-c6="" class="none separator"></div>
                                        <li _ngcontent-c6="">
                                            <!---->
                                            <span _ngcontent-c6="">
                                            <button class="btn btn-default" style="background: #fff"
                                                    onclick="openComment('Paris')">پرسش و پاسخ با استاد (۵۰)</button>
                                            </span>
                                            <!---->
                                            <!---->

                                        </li>
                                        <!---->
                                        <div _ngcontent-c6="" class="separator"></div>
                                    </div>

                                </ul>
                                <div id="London" class="w3-container city">
                                    @include('Home.single.review')
                                </div>

                                <div id="Paris" class="w3-container city" style="display:none">
                                    @include('Home.single.comment')
                                </div>
                            </tabs-holder>
                        </div>

                        <div _ngcontent-c12="" class="carouselWrap flex-row">
                            <!---->
                            <carousel _ngcontent-c12="" _nghost-c24="" class="ng-tns-c12-10">
                                <div _ngcontent-c24="" class="carousel wi-100">
                                    <div _ngcontent-c24="" class="flex-row jus-between al-end">
                                        <h3 _ngcontent-c24="">دوره‌های پیشنهادی</h3>
                                        <!---->
                                        <div _ngcontent-c24="" class="carouselControls flex-row jus-between al-center">
                                            <i _ngcontent-c24=""
                                               class="arrows rightArr flex-row fw-arrow-right-8-filled inactive"></i>
                                            <i _ngcontent-c24=""
                                               class="arrows leftArr flex-row fw-arrow-left-8-filled"></i>
                                        </div>
                                    </div>
                                    <div _ngcontent-c24="" class="carouselContents flex-row al-start jus-start wi-100">
                                        <div _ngcontent-c24="" class="shadowHiders hiderLeft"></div>
                                        <div _ngcontent-c24="" class="shadowHiders hiderRight"></div>

                                        <!---->
                                        <carousel-item _ngcontent-c12="" class="max-3 ng-tns-c12-10" _nghost-c25=""
                                                       style="margin-right: 0px;">
                                            <div _ngcontent-c25="" class="itemParent">
                                                <content-card _ngcontent-c12="" _nghost-c26="" class="ng-tns-c12-10">
                                                    <!---->
                                                    <div _ngcontent-c26="" class="contentCardParent wi-100">
                                                        <!---->
                                                        <div _ngcontent-c26=""
                                                             class="discountBadge flex-col al-center jus-center">
                                                            <span _ngcontent-c26=""
                                                                  class="discountPercentage">۴۰%</span>
                                                            تخفیف
                                                        </div>
                                                        <!---->
                                                        <div _ngcontent-c26="" class="contentCardInnerContainer">
                                                            <!---->
                                                            <!----><a _ngcontent-c26=""
                                                                      class="flex-col wi-100 contentMainLink"
                                                                      href="/business/17088-technical-analysis-of-the-capital-market">

                                                                <div _ngcontent-c26="" class="contentImage wi-100"
                                                                     style="background-image: url(&quot;https://images.faranesh.com/media/341/course/5eae3deaa49ab-tahlil-technichal-be-zabane-sade-min.jpg&quot;);">
                                                                </div>
                                                                <div _ngcontent-c26="" class="contentBackImg"></div>
                                                                <h3 _ngcontent-c26=""
                                                                    class="cardTitle flex-col jus-between al-start"
                                                                    title="تحلیل تکنیکال به زبان ساده">
                                                                    <span
                                                                        _ngcontent-c26="">تحلیل تکنیکال به زبان ساده<span
                                                                            _ngcontent-c26=""></span></span>
                                                                    <!----><a _ngcontent-c26=""
                                                                              class="courseAuthor flex-row jus-start al-center"
                                                                              title="صفحه‌ی مرتضی علی یاری در فرانش"
                                                                              href="/author/morteza">
                                                                        <div _ngcontent-c26="" class="authorImg"
                                                                             style="background-image: url(&quot;https://images.faranesh.com/media/20/users/20eg7aor3xrwv4fglc41mzw2x7ssuv-mortezaaliyar3.jpg&quot;);"></div>
                                                                        <span _ngcontent-c26="" class="authorName">مرتضی علی یاری</span>
                                                                    </a>
                                                                </h3>
                                                                <div _ngcontent-c26=""
                                                                     class="flex-row jus-between al-center detailRow">
                                                                    <div _ngcontent-c26=""
                                                                         class="flex-row jus-between al-center wrapped"
                                                                         style="max-width: calc(100% - 72px);">
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentTime flex-row al-center">

                                                                            <!----><span
                                                                                _ngcontent-c26="">۰۷:۰۲:۰۱</span>
                                                                            <!---->
                                                                            <i _ngcontent-c26="" aria-hidden="true"
                                                                               class="fw-clock-2-filled"></i>
                                                                        </div>
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentRate flex-row al-center">


                                                                            <div _ngcontent-c30=""
                                                                                 class="flex-row jus-start al-center"
                                                                                 dir="rtl" id="rate-container">
                                                                                <!----><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-half-right-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span>
                                                                            </div>
                                                                            </star-rate>
                                                                        </div>
                                                                    </div>


                                                                    <!---->
                                                                    <div _ngcontent-c26=""
                                                                         class="contentPrice flex-col al-center">
                                                                        <!---->
                                                                        <div _ngcontent-c26="" class="discountPrice">
                                                                            ۲۲۰,۰۰۰
                                                                        </div>
                                                                        <div _ngcontent-c26="" class="endPrice">
                                                                            ۱۳۲,۰۰۰
                                                                        </div>
                                                                    </div>

                                                                    <!---->
                                                                </div>
                                                            </a>

                                                            <!---->
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </content-card>
                                            </div>
                                        </carousel-item>
                                        <carousel-item _ngcontent-c12="" class="max-3 ng-tns-c12-10" _nghost-c25="">
                                            <div _ngcontent-c25="" class="itemParent">
                                                <content-card _ngcontent-c12="" _nghost-c26="" class="ng-tns-c12-10">
                                                    <!---->
                                                    <div _ngcontent-c26="" class="contentCardParent wi-100">
                                                        <!---->
                                                        <div _ngcontent-c26=""
                                                             class="discountBadge flex-col al-center jus-center">
                                                            <span _ngcontent-c26=""
                                                                  class="discountPercentage">۴۰%</span>
                                                            تخفیف
                                                        </div>
                                                        <!---->
                                                        <div _ngcontent-c26="" class="contentCardInnerContainer">
                                                            <!---->
                                                            <!----><a _ngcontent-c26=""
                                                                      class="flex-col wi-100 contentMainLink"
                                                                      href="/business/18124-technical-analysis-of-the-capital-market">

                                                                <div _ngcontent-c26="" class="contentImage wi-100"
                                                                     style="background-image: url(&quot;https://images.faranesh.com/media/341/course/5eae3ea54098c-experts.jpg&quot;);">
                                                                </div>
                                                                <div _ngcontent-c26="" class="contentBackImg"></div>
                                                                <h3 _ngcontent-c26=""
                                                                    class="cardTitle flex-col jus-between al-start"
                                                                    title="تحلیل تکنیکال حرفه‌ای برای متخصصین">
                                                                    <span _ngcontent-c26="">تحلیل تکنیکال حرفه‌ای برای متخصصین<span
                                                                            _ngcontent-c26=""></span></span>
                                                                    <!----><a _ngcontent-c26=""
                                                                              class="courseAuthor flex-row jus-start al-center"
                                                                              title="صفحه‌ی مرتضی علی یاری در فرانش"
                                                                              href="/author/morteza">
                                                                        <div _ngcontent-c26="" class="authorImg"
                                                                             style="background-image: url(&quot;https://images.faranesh.com/media/20/users/20eg7aor3xrwv4fglc41mzw2x7ssuv-mortezaaliyar3.jpg&quot;);"></div>
                                                                        <span _ngcontent-c26="" class="authorName">مرتضی علی یاری</span>
                                                                    </a>
                                                                </h3>
                                                                <div _ngcontent-c26=""
                                                                     class="flex-row jus-between al-center detailRow">
                                                                    <div _ngcontent-c26=""
                                                                         class="flex-row jus-between al-center wrapped"
                                                                         style="max-width: calc(100% - 72px);">
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentTime flex-row al-center">

                                                                            <!----><span
                                                                                _ngcontent-c26="">۰۴:۰۷:۱۴</span>
                                                                            <!---->
                                                                            <i _ngcontent-c26="" aria-hidden="true"
                                                                               class="fw-clock-2-filled"></i>
                                                                        </div>
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentRate flex-row al-center">


                                                                            <div _ngcontent-c30=""
                                                                                 class="flex-row jus-start al-center"
                                                                                 dir="rtl" id="rate-container">
                                                                                <!----><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-half-right-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span>
                                                                            </div>
                                                                            </star-rate>
                                                                        </div>
                                                                    </div>


                                                                    <!---->
                                                                    <div _ngcontent-c26=""
                                                                         class="contentPrice flex-col al-center">
                                                                        <!---->
                                                                        <div _ngcontent-c26="" class="discountPrice">
                                                                            ۳۱۰,۰۰۰
                                                                        </div>
                                                                        <div _ngcontent-c26="" class="endPrice">
                                                                            ۱۸۶,۰۰۰
                                                                        </div>
                                                                    </div>

                                                                    <!---->
                                                                </div>
                                                            </a>

                                                            <!---->
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </content-card>
                                            </div>
                                        </carousel-item>
                                        <carousel-item _ngcontent-c12="" class="max-3 ng-tns-c12-10" _nghost-c25="">
                                            <div _ngcontent-c25="" class="itemParent">
                                                <content-card _ngcontent-c12="" _nghost-c26="" class="ng-tns-c12-10">
                                                    <!---->
                                                    <div _ngcontent-c26="" class="contentCardParent wi-100">
                                                        <!---->
                                                        <div _ngcontent-c26=""
                                                             class="discountBadge flex-col al-center jus-center">
                                                            <span _ngcontent-c26=""
                                                                  class="discountPercentage">۳۸%</span>
                                                            تخفیف
                                                        </div>
                                                        <!---->
                                                        <div _ngcontent-c26="" class="contentCardInnerContainer">
                                                            <!---->
                                                            <!----><a _ngcontent-c26=""
                                                                      class="flex-col wi-100 contentMainLink"
                                                                      href="/business/16490-how-to-use-technical-analysis">

                                                                <div _ngcontent-c26="" class="contentImage wi-100"
                                                                     style="background-image: url(&quot;https://images.faranesh.com/media/341/course/598ed4ab777ea-dore-tahlile-tecnical.jpg&quot;);">
                                                                </div>
                                                                <div _ngcontent-c26="" class="contentBackImg"></div>
                                                                <h3 _ngcontent-c26=""
                                                                    class="cardTitle flex-col jus-between al-start"
                                                                    title="دوره مقدماتی تحلیل تکنیکال بورس اوراق بهادار">
                                                                    <span _ngcontent-c26="">دوره مقدماتی تحلیل تکنیکال بورس اوراق بهادار<span
                                                                            _ngcontent-c26=""></span></span>
                                                                    <!----><a _ngcontent-c26=""
                                                                              class="courseAuthor flex-row jus-start al-center"
                                                                              title="صفحه‌ی حسین علییاری در فرانش"
                                                                              href="/author/HosseinAliyari">
                                                                        <div _ngcontent-c26="" class="authorImg"
                                                                             style="background-image: url(&quot;https://images.faranesh.com/media/20/users/user-default-image.jpg&quot;);"></div>
                                                                        <span _ngcontent-c26="" class="authorName">حسین علییاری</span>
                                                                    </a>
                                                                </h3>
                                                                <div _ngcontent-c26=""
                                                                     class="flex-row jus-between al-center detailRow">
                                                                    <div _ngcontent-c26=""
                                                                         class="flex-row jus-between al-center wrapped"
                                                                         style="max-width: calc(100% - 72px);">
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentTime flex-row al-center">

                                                                            <!----><span
                                                                                _ngcontent-c26="">۰۱:۵۴:۵۹</span>
                                                                            <!---->
                                                                            <i _ngcontent-c26="" aria-hidden="true"
                                                                               class="fw-clock-2-filled"></i>
                                                                        </div>
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentRate flex-row al-center">


                                                                            <div _ngcontent-c30=""
                                                                                 class="flex-row jus-start al-center"
                                                                                 dir="rtl" id="rate-container">
                                                                                <!----><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-half-right-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span>
                                                                            </div>
                                                                            </star-rate>
                                                                        </div>
                                                                    </div>


                                                                    <!---->
                                                                    <div _ngcontent-c26=""
                                                                         class="contentPrice flex-col al-center">
                                                                        <!---->
                                                                        <div _ngcontent-c26="" class="discountPrice">
                                                                            ۲۱,۰۰۰
                                                                        </div>
                                                                        <div _ngcontent-c26="" class="endPrice">
                                                                            ۱۲,۹۰۰
                                                                        </div>
                                                                    </div>

                                                                    <!---->
                                                                </div>
                                                            </a>

                                                            <!---->
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </content-card>
                                            </div>
                                        </carousel-item>
                                        <carousel-item _ngcontent-c12="" class="max-3 ng-tns-c12-10" _nghost-c25="">
                                            <div _ngcontent-c25="" class="itemParent">
                                                <content-card _ngcontent-c12="" _nghost-c26="" class="ng-tns-c12-10">
                                                    <!---->
                                                    <div _ngcontent-c26="" class="contentCardParent wi-100">
                                                        <!---->
                                                        <div _ngcontent-c26=""
                                                             class="discountBadge flex-col al-center jus-center">
                                                            <span _ngcontent-c26=""
                                                                  class="discountPercentage">۳۰%</span>
                                                            تخفیف
                                                        </div>
                                                        <!---->
                                                        <div _ngcontent-c26="" class="contentCardInnerContainer">
                                                            <!---->
                                                            <!----><a _ngcontent-c26=""
                                                                      class="flex-col wi-100 contentMainLink"
                                                                      href="/business/19016-scholarship-training-on-the-stock-exchange">

                                                                <div _ngcontent-c26="" class="contentImage wi-100"
                                                                     style="background-image: url(&quot;https://images.faranesh.com/media/341/course/5ec1143962247-amozesh-tblokani-dar-brse.jpg&quot;);">
                                                                </div>
                                                                <div _ngcontent-c26="" class="contentBackImg"></div>
                                                                <h3 _ngcontent-c26=""
                                                                    class="cardTitle flex-col jus-between al-start"
                                                                    title="آموزش تابلوخوانی در بورس">
                                                                    <span
                                                                        _ngcontent-c26="">آموزش تابلوخوانی در بورس<span
                                                                            _ngcontent-c26=""></span></span>
                                                                    <!----><a _ngcontent-c26=""
                                                                              class="courseAuthor flex-row jus-start al-center"
                                                                              title="صفحه‌ی سید امیر ذوالفقاری در فرانش"
                                                                              href="/author/636447669573254">
                                                                        <div _ngcontent-c26="" class="authorImg"
                                                                             style="background-image: url(&quot;https://images.faranesh.com/media/20/users/59YkcEH3GTSrmxFZWutbXWkvjMur8KSM8B0PA84z.jpeg&quot;);"></div>
                                                                        <span _ngcontent-c26="" class="authorName">سید امیر ذوالفقاری</span>
                                                                    </a>
                                                                </h3>
                                                                <div _ngcontent-c26=""
                                                                     class="flex-row jus-between al-center detailRow">
                                                                    <div _ngcontent-c26=""
                                                                         class="flex-row jus-between al-center wrapped"
                                                                         style="max-width: calc(100% - 72px);">
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentTime flex-row al-center">

                                                                            <!----><span
                                                                                _ngcontent-c26="">۰۱:۴۵:۳۸</span>
                                                                            <!---->
                                                                            <i _ngcontent-c26="" aria-hidden="true"
                                                                               class="fw-clock-2-filled"></i>
                                                                        </div>
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentRate flex-row al-center">


                                                                            <star-rate _ngcontent-c26="" _nghost-c30="">
                                                                                <div _ngcontent-c30=""
                                                                                     class="flex-row jus-start al-center"
                                                                                     dir="rtl" id="rate-container-back">
                                                                                    <!----><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">بد</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">ضعیف</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">معمولی</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">خوب</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">عالی</span>
        </i>
    </span>
                                                                                    <!---->
                                                                                    <div _ngcontent-c30=""
                                                                                         class="countTooltip">
                                                                                        <span _ngcontent-c30=""
                                                                                              class="noRate">بدون امتیاز</span>
                                                                                    </div>
                                                                                    <!---->
                                                                                </div>
                                                                                <div _ngcontent-c30=""
                                                                                     class="flex-row jus-start al-center"
                                                                                     dir="rtl" id="rate-container">
                                                                                    <!----><span _ngcontent-c30="">
        <!---->
    </span><span _ngcontent-c30="">
        <!---->
    </span><span _ngcontent-c30="">
        <!---->
    </span><span _ngcontent-c30="">
        <!---->
    </span><span _ngcontent-c30="">
        <!---->
    </span>
                                                                                </div>
                                                                            </star-rate>
                                                                        </div>
                                                                    </div>


                                                                    <!---->
                                                                    <div _ngcontent-c26=""
                                                                         class="contentPrice flex-col al-center">
                                                                        <!---->
                                                                        <div _ngcontent-c26="" class="discountPrice">
                                                                            ۱۵۰,۰۰۰
                                                                        </div>
                                                                        <div _ngcontent-c26="" class="endPrice">
                                                                            ۱۰۵,۰۰۰
                                                                        </div>
                                                                    </div>

                                                                    <!---->
                                                                </div>
                                                            </a>

                                                            <!---->
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </content-card>
                                            </div>
                                        </carousel-item>
                                        <carousel-item _ngcontent-c12="" class="max-3 ng-tns-c12-10" _nghost-c25="">
                                            <div _ngcontent-c25="" class="itemParent">
                                                <content-card _ngcontent-c12="" _nghost-c26="" class="ng-tns-c12-10">
                                                    <!---->
                                                    <div _ngcontent-c26="" class="contentCardParent wi-100">
                                                        <!---->
                                                        <div _ngcontent-c26=""
                                                             class="discountBadge flex-col al-center jus-center">
                                                            <span _ngcontent-c26=""
                                                                  class="discountPercentage">۳۰%</span>
                                                            تخفیف
                                                        </div>
                                                        <!---->
                                                        <div _ngcontent-c26="" class="contentCardInnerContainer">
                                                            <!---->
                                                            <!----><a _ngcontent-c26=""
                                                                      class="flex-col wi-100 contentMainLink"
                                                                      href="/business/18138-basics-of-technical-analysis">

                                                                <div _ngcontent-c26="" class="contentImage wi-100"
                                                                     style="background-image: url(&quot;https://images.faranesh.com/media/341/course/5d538d9409769-----------------------------------.jpg&quot;);">
                                                                </div>
                                                                <div _ngcontent-c26="" class="contentBackImg"></div>
                                                                <h3 _ngcontent-c26=""
                                                                    class="cardTitle flex-col jus-between al-start"
                                                                    title="دوره تحلیل تکنیکال بخش مقدماتی">
                                                                    <span _ngcontent-c26="">دوره تحلیل تکنیکال بخش مقدماتی<span
                                                                            _ngcontent-c26=""></span></span>
                                                                    <!----><a _ngcontent-c26=""
                                                                              class="courseAuthor flex-row jus-start al-center"
                                                                              title="صفحه‌ی عباس عمادی در فرانش"
                                                                              href="/author/market_analyzer">
                                                                        <div _ngcontent-c26="" class="authorImg"
                                                                             style="background-image: url(&quot;https://images.faranesh.com/media/20/users/user-default-image.jpg&quot;);"></div>
                                                                        <span _ngcontent-c26="" class="authorName">عباس عمادی</span>
                                                                    </a>
                                                                </h3>
                                                                <div _ngcontent-c26=""
                                                                     class="flex-row jus-between al-center detailRow">
                                                                    <div _ngcontent-c26=""
                                                                         class="flex-row jus-between al-center wrapped"
                                                                         style="max-width: calc(100% - 72px);">
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentTime flex-row al-center">

                                                                            <!----><span
                                                                                _ngcontent-c26="">۰۱:۳۷:۰۱</span>
                                                                            <!---->
                                                                            <i _ngcontent-c26="" aria-hidden="true"
                                                                               class="fw-clock-2-filled"></i>
                                                                        </div>
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentRate flex-row al-center">


                                                                            <star-rate _ngcontent-c26="" _nghost-c30="">
                                                                                <div _ngcontent-c30=""
                                                                                     class="flex-row jus-start al-center"
                                                                                     dir="rtl" id="rate-container-back">
                                                                                    <!----><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">بد</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">ضعیف</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">معمولی</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">خوب</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">عالی</span>
        </i>
    </span>
                                                                                    <!---->
                                                                                    <!---->
                                                                                    <div _ngcontent-c30=""
                                                                                         class="countTooltip">
                                                                                        <span _ngcontent-c30=""
                                                                                              class="rateNum">3.60</span>
                                                                                        از ۱۰ رای
                                                                                    </div>
                                                                                </div>
                                                                                <div _ngcontent-c30=""
                                                                                     class="flex-row jus-start al-center"
                                                                                     dir="rtl" id="rate-container">
                                                                                    <!----><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-half-right-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!---->
    </span>
                                                                                </div>
                                                                            </star-rate>
                                                                        </div>
                                                                    </div>


                                                                    <!---->
                                                                    <div _ngcontent-c26=""
                                                                         class="contentPrice flex-col al-center">
                                                                        <!---->
                                                                        <div _ngcontent-c26="" class="discountPrice">
                                                                            ۲۴,۰۰۰
                                                                        </div>
                                                                        <div _ngcontent-c26="" class="endPrice">
                                                                            ۱۶,۸۰۰
                                                                        </div>
                                                                    </div>

                                                                    <!---->
                                                                </div>
                                                            </a>

                                                            <!---->
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </content-card>
                                            </div>
                                        </carousel-item>
                                        <carousel-item _ngcontent-c12="" class="max-3 ng-tns-c12-10" _nghost-c25="">
                                            <div _ngcontent-c25="" class="itemParent">
                                                <content-card _ngcontent-c12="" _nghost-c26="" class="ng-tns-c12-10">
                                                    <!---->
                                                    <div _ngcontent-c26="" class="contentCardParent wi-100">
                                                        <!---->
                                                        <div _ngcontent-c26=""
                                                             class="discountBadge flex-col al-center jus-center">
                                                            <span _ngcontent-c26=""
                                                                  class="discountPercentage">۳۰%</span>
                                                            تخفیف
                                                        </div>
                                                        <!---->
                                                        <div _ngcontent-c26="" class="contentCardInnerContainer">
                                                            <!---->
                                                            <!----><a _ngcontent-c26=""
                                                                      class="flex-col wi-100 contentMainLink"
                                                                      href="/business/18487-technical-analysis">

                                                                <div _ngcontent-c26="" class="contentImage wi-100"
                                                                     style="background-image: url(&quot;https://images.faranesh.com/media/341/course/5dc803d493393------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------.jpg&quot;);">
                                                                </div>
                                                                <div _ngcontent-c26="" class="contentBackImg"></div>
                                                                <h3 _ngcontent-c26=""
                                                                    class="cardTitle flex-col jus-between al-start"
                                                                    title="تحلیل تکنیکال بازارهای بورس ، فارکس و ارزهای دیجیتال( چهارمین دوره از مجموعه صد روز تا درآمد دیجیتالی)">
                                                                    <span _ngcontent-c26="">تحلیل تکنیکال بازارهای بورس ، فارکس و ارزهای دیجیتال( چهارمین دوره از مجموعه صد روز تا درآمد دیجیتالی)<span
                                                                            _ngcontent-c26=""></span></span>
                                                                    <!----><a _ngcontent-c26=""
                                                                              class="courseAuthor flex-row jus-start al-center"
                                                                              title="صفحه‌ی آکادمی بازار منتور- دکتر زعفرانیه در فرانش"
                                                                              href="/author/httpsfaraneshcomtutorsbazarmentor">
                                                                        <div _ngcontent-c26="" class="authorImg"
                                                                             style="background-image: url(&quot;https://images.faranesh.com/media/20/users/RNGJd2q0PvObf8VJ7LIIEUoY2AzKx9JR6rxnW60r.png&quot;);"></div>
                                                                        <span _ngcontent-c26="" class="authorName">آکادمی بازار منتور- دکتر زعفرانیه</span>
                                                                    </a>
                                                                </h3>
                                                                <div _ngcontent-c26=""
                                                                     class="flex-row jus-between al-center detailRow">
                                                                    <div _ngcontent-c26=""
                                                                         class="flex-row jus-between al-center wrapped"
                                                                         style="max-width: calc(100% - 72px);">
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentTime flex-row al-center">

                                                                            <!----><span
                                                                                _ngcontent-c26="">۰۷:۰۱:۵۸</span>
                                                                            <!---->
                                                                            <i _ngcontent-c26="" aria-hidden="true"
                                                                               class="fw-clock-2-filled"></i>
                                                                        </div>
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentRate flex-row al-center">


                                                                            <star-rate _ngcontent-c26="" _nghost-c30="">
                                                                                <div _ngcontent-c30=""
                                                                                     class="flex-row jus-start al-center"
                                                                                     dir="rtl" id="rate-container-back">
                                                                                    <!----><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">بد</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">ضعیف</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">معمولی</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">خوب</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">عالی</span>
        </i>
    </span>
                                                                                    <!---->
                                                                                    <!---->
                                                                                    <div _ngcontent-c30=""
                                                                                         class="countTooltip">
                                                                                        <span _ngcontent-c30=""
                                                                                              class="rateNum">3.67</span>
                                                                                        از ۳ رای
                                                                                    </div>
                                                                                </div>
                                                                                <div _ngcontent-c30=""
                                                                                     class="flex-row jus-start al-center"
                                                                                     dir="rtl" id="rate-container">
                                                                                    <!----><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-half-right-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!---->
    </span>
                                                                                </div>
                                                                            </star-rate>
                                                                        </div>
                                                                    </div>


                                                                    <!---->
                                                                    <div _ngcontent-c26=""
                                                                         class="contentPrice flex-col al-center">
                                                                        <!---->
                                                                        <div _ngcontent-c26="" class="discountPrice">
                                                                            ۱۷۰,۰۰۰
                                                                        </div>
                                                                        <div _ngcontent-c26="" class="endPrice">
                                                                            ۱۱۹,۰۰۰
                                                                        </div>
                                                                    </div>

                                                                    <!---->
                                                                </div>
                                                            </a>

                                                            <!---->
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </content-card>
                                            </div>
                                        </carousel-item>
                                        <carousel-item _ngcontent-c12="" class="max-3 ng-tns-c12-10" _nghost-c25="">
                                            <div _ngcontent-c25="" class="itemParent">
                                                <content-card _ngcontent-c12="" _nghost-c26="" class="ng-tns-c12-10">
                                                    <!---->
                                                    <div _ngcontent-c26="" class="contentCardParent wi-100">
                                                        <!---->
                                                        <div _ngcontent-c26=""
                                                             class="discountBadge flex-col al-center jus-center">
                                                            <span _ngcontent-c26=""
                                                                  class="discountPercentage">۳۰%</span>
                                                            تخفیف
                                                        </div>
                                                        <!---->
                                                        <div _ngcontent-c26="" class="contentCardInnerContainer">
                                                            <!---->
                                                            <!----><a _ngcontent-c26=""
                                                                      class="flex-col wi-100 contentMainLink"
                                                                      href="/business/18972-bourse-be-zabane-saadeh-karbordi">

                                                                <div _ngcontent-c26="" class="contentImage wi-100"
                                                                     style="background-image: url(&quot;https://images.faranesh.com/media/341/course/5eb1912083930-amozesh-0-ta-100-faalit-dar-bors-sade-va-karbordi.jpg&quot;);">
                                                                </div>
                                                                <div _ngcontent-c26="" class="contentBackImg"></div>
                                                                <h3 _ngcontent-c26=""
                                                                    class="cardTitle flex-col jus-between al-start"
                                                                    title="آموزش صفرتاصد فعالیت در بورس به زبان ساده و کاربردی">
                                                                    <span _ngcontent-c26="">آموزش صفرتاصد فعالیت در بورس به زبان ساده و کاربردی<span
                                                                            _ngcontent-c26=""></span></span>
                                                                    <!----><a _ngcontent-c26=""
                                                                              class="courseAuthor flex-row jus-start al-center"
                                                                              title="صفحه‌ی احسان کریمی در فرانش"
                                                                              href="/author/2270473556073690">
                                                                        <div _ngcontent-c26="" class="authorImg"
                                                                             style="background-image: url(&quot;https://images.faranesh.com/media/20/users/vhfOQGmRTUhZGmBHq1bPMt5jj44mtghyAg8mw1oz.jpeg&quot;);"></div>
                                                                        <span _ngcontent-c26="" class="authorName">احسان کریمی</span>
                                                                    </a>
                                                                </h3>
                                                                <div _ngcontent-c26=""
                                                                     class="flex-row jus-between al-center detailRow">
                                                                    <div _ngcontent-c26=""
                                                                         class="flex-row jus-between al-center wrapped"
                                                                         style="max-width: calc(100% - 72px);">
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentTime flex-row al-center">

                                                                            <!----><span
                                                                                _ngcontent-c26="">۰۲:۳۶:۱۷</span>
                                                                            <!---->
                                                                            <i _ngcontent-c26="" aria-hidden="true"
                                                                               class="fw-clock-2-filled"></i>
                                                                        </div>
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentRate flex-row al-center">


                                                                            <star-rate _ngcontent-c26="" _nghost-c30="">
                                                                                <div _ngcontent-c30=""
                                                                                     class="flex-row jus-start al-center"
                                                                                     dir="rtl" id="rate-container-back">
                                                                                    <!----><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">بد</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">ضعیف</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">معمولی</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">خوب</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">عالی</span>
        </i>
    </span>
                                                                                    <!---->
                                                                                    <!---->
                                                                                    <div _ngcontent-c30=""
                                                                                         class="countTooltip">
                                                                                        <span _ngcontent-c30=""
                                                                                              class="rateNum">4.43</span>
                                                                                        از ۷ رای
                                                                                    </div>
                                                                                </div>
                                                                                <div _ngcontent-c30=""
                                                                                     class="flex-row jus-start al-center"
                                                                                     dir="rtl" id="rate-container">
                                                                                    <!----><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-half-right-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span>
                                                                                </div>
                                                                            </star-rate>
                                                                        </div>
                                                                    </div>


                                                                    <!---->
                                                                    <div _ngcontent-c26=""
                                                                         class="contentPrice flex-col al-center">
                                                                        <!---->
                                                                        <div _ngcontent-c26="" class="discountPrice">
                                                                            ۱۴۰,۰۰۰
                                                                        </div>
                                                                        <div _ngcontent-c26="" class="endPrice">
                                                                            ۹۸,۰۰۰
                                                                        </div>
                                                                    </div>

                                                                    <!---->
                                                                </div>
                                                            </a>

                                                            <!---->
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </content-card>
                                            </div>
                                        </carousel-item>
                                        <carousel-item _ngcontent-c12="" class="max-3 ng-tns-c12-10" _nghost-c25="">
                                            <div _ngcontent-c25="" class="itemParent">
                                                <content-card _ngcontent-c12="" _nghost-c26="" class="ng-tns-c12-10">
                                                    <!---->
                                                    <div _ngcontent-c26="" class="contentCardParent wi-100">
                                                        <!---->
                                                        <!---->
                                                        <div _ngcontent-c26="" class="contentCardInnerContainer">
                                                            <!---->
                                                            <!----><a _ngcontent-c26=""
                                                                      class="flex-col wi-100 contentMainLink"
                                                                      href="/business/17011-invest-in-the-stock-exchange">

                                                                <div _ngcontent-c26="" class="contentImage wi-100"
                                                                     style="background-image: url(&quot;https://images.faranesh.com/media/341/course/5eae3d845535d-start-bourse.jpg&quot;);">
                                                                </div>
                                                                <div _ngcontent-c26="" class="contentBackImg"></div>
                                                                <h3 _ngcontent-c26=""
                                                                    class="cardTitle flex-col jus-between al-start"
                                                                    title="آموزش رایگان سرمایه گذاری در بورس">
                                                                    <span _ngcontent-c26="">آموزش رایگان سرمایه گذاری در بورس<span
                                                                            _ngcontent-c26=""></span></span>
                                                                    <!----><a _ngcontent-c26=""
                                                                              class="courseAuthor flex-row jus-start al-center"
                                                                              title="صفحه‌ی مرتضی علی یاری در فرانش"
                                                                              href="/author/morteza">
                                                                        <div _ngcontent-c26="" class="authorImg"
                                                                             style="background-image: url(&quot;https://images.faranesh.com/media/20/users/20eg7aor3xrwv4fglc41mzw2x7ssuv-mortezaaliyar3.jpg&quot;);"></div>
                                                                        <span _ngcontent-c26="" class="authorName">مرتضی علی یاری</span>
                                                                    </a>
                                                                </h3>
                                                                <div _ngcontent-c26=""
                                                                     class="flex-row jus-between al-center detailRow">
                                                                    <div _ngcontent-c26=""
                                                                         class="flex-row jus-between al-center wrapped"
                                                                         style="max-width: calc(100% - 72px);">
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentTime flex-row al-center">

                                                                            <!----><span
                                                                                _ngcontent-c26="">۰۱:۰۰:۳۴</span>
                                                                            <!---->
                                                                            <i _ngcontent-c26="" aria-hidden="true"
                                                                               class="fw-clock-2-filled"></i>
                                                                        </div>
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentRate flex-row al-center">


                                                                            <star-rate _ngcontent-c26="" _nghost-c30="">
                                                                                <div _ngcontent-c30=""
                                                                                     class="flex-row jus-start al-center"
                                                                                     dir="rtl" id="rate-container-back">
                                                                                    <!----><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">بد</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">ضعیف</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">معمولی</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">خوب</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">عالی</span>
        </i>
    </span>
                                                                                    <!---->
                                                                                    <!---->
                                                                                    <div _ngcontent-c30=""
                                                                                         class="countTooltip">
                                                                                        <span _ngcontent-c30=""
                                                                                              class="rateNum">4.34</span>
                                                                                        از ۵۴۶ رای
                                                                                    </div>
                                                                                </div>
                                                                                <div _ngcontent-c30=""
                                                                                     class="flex-row jus-start al-center"
                                                                                     dir="rtl" id="rate-container">
                                                                                    <!----><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-half-right-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span>
                                                                                </div>
                                                                            </star-rate>
                                                                        </div>
                                                                    </div>


                                                                    <!---->
                                                                    <div _ngcontent-c26=""
                                                                         class="contentPrice flex-col al-center">
                                                                        <!---->
                                                                        <div _ngcontent-c26="" class="endPrice"
                                                                             style="font-size: 14px;">
                                                                            رایگان
                                                                        </div>
                                                                    </div>

                                                                    <!---->
                                                                </div>
                                                            </a>

                                                            <!---->
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </content-card>
                                            </div>
                                        </carousel-item>
                                        <carousel-item _ngcontent-c12="" class="max-3 ng-tns-c12-10" _nghost-c25="">
                                            <div _ngcontent-c25="" class="itemParent">
                                                <content-card _ngcontent-c12="" _nghost-c26="" class="ng-tns-c12-10">
                                                    <!---->
                                                    <div _ngcontent-c26="" class="contentCardParent wi-100">
                                                        <!---->
                                                        <div _ngcontent-c26=""
                                                             class="discountBadge flex-col al-center jus-center">
                                                            <span _ngcontent-c26=""
                                                                  class="discountPercentage">۳۰%</span>
                                                            تخفیف
                                                        </div>
                                                        <!---->
                                                        <div _ngcontent-c26="" class="contentCardInnerContainer">
                                                            <!---->
                                                            <!----><a _ngcontent-c26=""
                                                                      class="flex-col wi-100 contentMainLink"
                                                                      href="/business/19007-tablokhani">

                                                                <div _ngcontent-c26="" class="contentImage wi-100"
                                                                     style="background-image: url(&quot;https://images.faranesh.com/media/341/course/5ebd2a4f4f74e-dore-tablokhani-bors-iran.jpg&quot;);">
                                                                </div>
                                                                <div _ngcontent-c26="" class="contentBackImg"></div>
                                                                <h3 _ngcontent-c26=""
                                                                    class="cardTitle flex-col jus-between al-start"
                                                                    title="دوره متخصص تابلوخوانی بورس ایران TSETMC">
                                                                    <span _ngcontent-c26="">دوره متخصص تابلوخوانی بورس ایران TSETMC<span
                                                                            _ngcontent-c26=""></span></span>
                                                                    <!----><a _ngcontent-c26=""
                                                                              class="courseAuthor flex-row jus-start al-center"
                                                                              title="صفحه‌ی حامد کرباسی در فرانش"
                                                                              href="/author/2259282285133566">
                                                                        <div _ngcontent-c26="" class="authorImg"
                                                                             style="background-image: url(&quot;https://images.faranesh.com/media/20/users/uMq3vq9FNDh4g63KFcnzev8npzbaKZTVNtZfX3Pj.jpeg&quot;);"></div>
                                                                        <span _ngcontent-c26="" class="authorName">حامد کرباسی</span>
                                                                    </a>
                                                                </h3>
                                                                <div _ngcontent-c26=""
                                                                     class="flex-row jus-between al-center detailRow">
                                                                    <div _ngcontent-c26=""
                                                                         class="flex-row jus-between al-center wrapped"
                                                                         style="max-width: calc(100% - 72px);">
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentTime flex-row al-center">

                                                                            <!----><span
                                                                                _ngcontent-c26="">۰۶:۴۷:۲۶</span>
                                                                            <!---->
                                                                            <i _ngcontent-c26="" aria-hidden="true"
                                                                               class="fw-clock-2-filled"></i>
                                                                        </div>
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentRate flex-row al-center">


                                                                            <star-rate _ngcontent-c26="" _nghost-c30="">
                                                                                <div _ngcontent-c30=""
                                                                                     class="flex-row jus-start al-center"
                                                                                     dir="rtl" id="rate-container-back">
                                                                                    <!----><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">بد</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">ضعیف</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">معمولی</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">خوب</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">عالی</span>
        </i>
    </span>
                                                                                    <!---->
                                                                                    <div _ngcontent-c30=""
                                                                                         class="countTooltip">
                                                                                        <span _ngcontent-c30=""
                                                                                              class="noRate">بدون امتیاز</span>
                                                                                    </div>
                                                                                    <!---->
                                                                                </div>
                                                                                <div _ngcontent-c30=""
                                                                                     class="flex-row jus-start al-center"
                                                                                     dir="rtl" id="rate-container">
                                                                                    <!----><span _ngcontent-c30="">
        <!---->
    </span><span _ngcontent-c30="">
        <!---->
    </span><span _ngcontent-c30="">
        <!---->
    </span><span _ngcontent-c30="">
        <!---->
    </span><span _ngcontent-c30="">
        <!---->
    </span>
                                                                                </div>
                                                                            </star-rate>
                                                                        </div>
                                                                    </div>


                                                                    <!---->
                                                                    <div _ngcontent-c26=""
                                                                         class="contentPrice flex-col al-center">
                                                                        <!---->
                                                                        <div _ngcontent-c26="" class="discountPrice">
                                                                            ۶۰۰,۰۰۰
                                                                        </div>
                                                                        <div _ngcontent-c26="" class="endPrice">
                                                                            ۴۲۰,۰۰۰
                                                                        </div>
                                                                    </div>

                                                                    <!---->
                                                                </div>
                                                            </a>

                                                            <!---->
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </content-card>
                                            </div>
                                        </carousel-item>
                                        <carousel-item _ngcontent-c12="" class="max-3 ng-tns-c12-10" _nghost-c25="">
                                            <div _ngcontent-c25="" class="itemParent">
                                                <content-card _ngcontent-c12="" _nghost-c26="" class="ng-tns-c12-10">
                                                    <!---->
                                                    <div _ngcontent-c26="" class="contentCardParent wi-100">
                                                        <!---->
                                                        <div _ngcontent-c26=""
                                                             class="discountBadge flex-col al-center jus-center">
                                                            <span _ngcontent-c26=""
                                                                  class="discountPercentage">۵۰%</span>
                                                            تخفیف
                                                        </div>
                                                        <!---->
                                                        <div _ngcontent-c26="" class="contentCardInnerContainer">
                                                            <!---->
                                                            <!----><a _ngcontent-c26=""
                                                                      class="flex-col wi-100 contentMainLink"
                                                                      href="/business/18911-tablokhani-basics">

                                                                <div _ngcontent-c26="" class="contentImage wi-100"
                                                                     style="background-image: url(&quot;https://images.faranesh.com/media/341/course/5ea2c9f58c261-habe-abzar-tablokhani-bors-dar-iran.jpg&quot;);">
                                                                </div>
                                                                <div _ngcontent-c26="" class="contentBackImg"></div>
                                                                <h3 _ngcontent-c26=""
                                                                    class="cardTitle flex-col jus-between al-start"
                                                                    title="جعبه ابزار تابلوخوانی بورس ایران">
                                                                    <span _ngcontent-c26="">جعبه ابزار تابلوخوانی بورس ایران<span
                                                                            _ngcontent-c26=""></span></span>
                                                                    <!----><a _ngcontent-c26=""
                                                                              class="courseAuthor flex-row jus-start al-center"
                                                                              title="صفحه‌ی حامد کرباسی در فرانش"
                                                                              href="/author/2259282285133566">
                                                                        <div _ngcontent-c26="" class="authorImg"
                                                                             style="background-image: url(&quot;https://images.faranesh.com/media/20/users/uMq3vq9FNDh4g63KFcnzev8npzbaKZTVNtZfX3Pj.jpeg&quot;);"></div>
                                                                        <span _ngcontent-c26="" class="authorName">حامد کرباسی</span>
                                                                    </a>
                                                                </h3>
                                                                <div _ngcontent-c26=""
                                                                     class="flex-row jus-between al-center detailRow">
                                                                    <div _ngcontent-c26=""
                                                                         class="flex-row jus-between al-center wrapped"
                                                                         style="max-width: calc(100% - 72px);">
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentTime flex-row al-center">

                                                                            <!----><span
                                                                                _ngcontent-c26="">۰۳:۳۴:۳۱</span>
                                                                            <!---->
                                                                            <i _ngcontent-c26="" aria-hidden="true"
                                                                               class="fw-clock-2-filled"></i>
                                                                        </div>
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentRate flex-row al-center">


                                                                            <star-rate _ngcontent-c26="" _nghost-c30="">
                                                                                <div _ngcontent-c30=""
                                                                                     class="flex-row jus-start al-center"
                                                                                     dir="rtl" id="rate-container-back">
                                                                                    <!----><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">بد</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">ضعیف</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">معمولی</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">خوب</span>
        </i>
    </span><span _ngcontent-c30="">
        <i _ngcontent-c30="" class="rating-star fw-rank-army-star-badge-6-filled"
           style="font-size: 15px; margin-right: 2px;">
            <span _ngcontent-c30="" class="tooltiptext">عالی</span>
        </i>
    </span>
                                                                                    <!---->
                                                                                    <!---->
                                                                                    <div _ngcontent-c30=""
                                                                                         class="countTooltip">
                                                                                        <span _ngcontent-c30=""
                                                                                              class="rateNum">3</span>
                                                                                        از ۱ رای
                                                                                    </div>
                                                                                </div>
                                                                                <div _ngcontent-c30=""
                                                                                     class="flex-row jus-start al-center"
                                                                                     dir="rtl" id="rate-container">
                                                                                    <!----><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!----><i _ngcontent-c30="" class="rating-star yellow fw-rank-army-star-badge-6-filled"
                  style="font-size: 15px; margin-right: 2px;">
        </i>
    </span><span _ngcontent-c30="">
        <!---->
    </span><span _ngcontent-c30="">
        <!---->
    </span>
                                                                                </div>
                                                                            </star-rate>
                                                                        </div>
                                                                    </div>


                                                                    <!---->
                                                                    <div _ngcontent-c26=""
                                                                         class="contentPrice flex-col al-center">
                                                                        <!---->
                                                                        <div _ngcontent-c26="" class="discountPrice">
                                                                            ۹۸,۰۰۰
                                                                        </div>
                                                                        <div _ngcontent-c26="" class="endPrice">
                                                                            ۴۹,۰۰۰
                                                                        </div>
                                                                    </div>

                                                                    <!---->
                                                                </div>
                                                            </a>

                                                            <!---->
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </content-card>
                                            </div>
                                        </carousel-item>


                                    </div>
                                </div>
                            </carousel>
                        </div>
                        <div _ngcontent-c12="" class="carouselWrap flex-row">
                            <!---->
                            <carousel _ngcontent-c12="" _nghost-c24="" class="ng-tns-c12-9">
                                <div _ngcontent-c24="" class="carousel wi-100">
                                    <div _ngcontent-c24="" class="flex-row jus-between al-end">
                                        <h3 _ngcontent-c24="">دیگر دوره‌های مرتضی علی یاری</h3>
                                        <!---->
                                        <div _ngcontent-c24="" class="carouselControls flex-row jus-between al-center">
                                            <i _ngcontent-c24=""
                                               class="arrows rightArr flex-row fw-arrow-right-8-filled inactive"></i>
                                            <i _ngcontent-c24=""
                                               class="arrows leftArr flex-row fw-arrow-left-8-filled"></i>
                                        </div>
                                    </div>
                                    <div _ngcontent-c24="" class="carouselContents flex-row al-start jus-start wi-100">
                                        <div _ngcontent-c24="" class="shadowHiders hiderLeft"></div>
                                        <div _ngcontent-c24="" class="shadowHiders hiderRight"></div>

                                        <!---->
                                        <carousel-item _ngcontent-c12="" class="max-3 ng-tns-c12-9" _nghost-c25=""
                                                       style="margin-right: 0px;">
                                            <div _ngcontent-c25="" class="itemParent">
                                                <content-card _ngcontent-c12="" _nghost-c26="" class="ng-tns-c12-9">
                                                    <!---->
                                                    <div _ngcontent-c26="" class="contentCardParent wi-100">
                                                        <!---->
                                                        <!---->
                                                        <div _ngcontent-c26="" class="contentCardInnerContainer">
                                                            <!---->
                                                            <!----><a _ngcontent-c26=""
                                                                      class="flex-col wi-100 contentMainLink"
                                                                      href="/business/17011-invest-in-the-stock-exchange">

                                                                <div _ngcontent-c26="" class="contentImage wi-100"
                                                                     style="background-image: url(&quot;https://images.faranesh.com/media/341/course/5eae3d845535d-start-bourse.jpg&quot;);">
                                                                </div>
                                                                <div _ngcontent-c26="" class="contentBackImg"></div>
                                                                <h3 _ngcontent-c26=""
                                                                    class="cardTitle flex-col jus-between al-start"
                                                                    title="شروع سرمایه گذاری در بورس">
                                                                    <span
                                                                        _ngcontent-c26="">شروع سرمایه گذاری در بورس<span
                                                                            _ngcontent-c26=""></span></span>
                                                                    <!----><a _ngcontent-c26=""
                                                                              class="courseAuthor flex-row jus-start al-center"
                                                                              title="صفحه‌ی مرتضی علی یاری در فرانش"
                                                                              href="/author/morteza">
                                                                        <div _ngcontent-c26="" class="authorImg"
                                                                             style="background-image: url(&quot;https://images.faranesh.com/media/20/users/20eg7aor3xrwv4fglc41mzw2x7ssuv-mortezaaliyar3.jpg&quot;);"></div>
                                                                        <span _ngcontent-c26="" class="authorName">مرتضی علی یاری</span>
                                                                    </a>
                                                                </h3>
                                                                <div _ngcontent-c26=""
                                                                     class="flex-row jus-between al-center detailRow">
                                                                    <div _ngcontent-c26=""
                                                                         class="flex-row jus-between al-center wrapped"
                                                                         style="max-width: calc(100% - 72px);">
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentTime flex-row al-center">

                                                                            <!----><span
                                                                                _ngcontent-c26="">۰۱:۰۰:۳۴</span>
                                                                            <!---->
                                                                            <i _ngcontent-c26="" aria-hidden="true"
                                                                               class="fw-clock-2-filled"></i>
                                                                        </div>
                                                                        <!---->

                                                                    </div>


                                                                    <!---->
                                                                    <div _ngcontent-c26=""
                                                                         class="contentPrice flex-col al-center">
                                                                        <!---->
                                                                        <div _ngcontent-c26="" class="endPrice"
                                                                             style="font-size: 14px;">
                                                                            رایگان
                                                                        </div>
                                                                    </div>

                                                                    <!---->
                                                                </div>
                                                            </a>

                                                            <!---->
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </content-card>
                                            </div>
                                        </carousel-item>
                                        <carousel-item _ngcontent-c12="" class="max-3 ng-tns-c12-9" _nghost-c25="">
                                            <div _ngcontent-c25="" class="itemParent">
                                                <content-card _ngcontent-c12="" _nghost-c26="" class="ng-tns-c12-9">
                                                    <!---->
                                                    <div _ngcontent-c26="" class="contentCardParent wi-100">
                                                        <!---->
                                                        <!---->
                                                        <div _ngcontent-c26="" class="contentCardInnerContainer">
                                                            <!---->
                                                            <!----><a _ngcontent-c26=""
                                                                      class="flex-col wi-100 contentMainLink"
                                                                      href="/business/17088-technical-analysis-of-the-capital-market">

                                                                <div _ngcontent-c26="" class="contentImage wi-100"
                                                                     style="background-image: url(&quot;https://images.faranesh.com/media/341/course/5eae3deaa49ab-tahlil-technichal-be-zabane-sade-min.jpg&quot;);">
                                                                </div>
                                                                <div _ngcontent-c26="" class="contentBackImg"></div>
                                                                <h3 _ngcontent-c26=""
                                                                    class="cardTitle flex-col jus-between al-start"
                                                                    title="تحلیل تکنیکال به زبان ساده">
                                                                    <span
                                                                        _ngcontent-c26="">تحلیل تکنیکال به زبان ساده<span
                                                                            _ngcontent-c26=""></span></span>
                                                                    <!----><a _ngcontent-c26=""
                                                                              class="courseAuthor flex-row jus-start al-center"
                                                                              title="صفحه‌ی مرتضی علی یاری در فرانش"
                                                                              href="/author/morteza">
                                                                        <div _ngcontent-c26="" class="authorImg"
                                                                             style="background-image: url(&quot;https://images.faranesh.com/media/20/users/20eg7aor3xrwv4fglc41mzw2x7ssuv-mortezaaliyar3.jpg&quot;);"></div>
                                                                        <span _ngcontent-c26="" class="authorName">مرتضی علی یاری</span>
                                                                    </a>
                                                                </h3>
                                                                <div _ngcontent-c26=""
                                                                     class="flex-row jus-between al-center detailRow">
                                                                    <div _ngcontent-c26=""
                                                                         class="flex-row jus-between al-center wrapped"
                                                                         style="max-width: calc(100% - 72px);">
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentTime flex-row al-center">

                                                                            <!----><span
                                                                                _ngcontent-c26="">۰۷:۰۲:۰۱</span>
                                                                            <!---->
                                                                            <i _ngcontent-c26="" aria-hidden="true"
                                                                               class="fw-clock-2-filled"></i>
                                                                        </div>
                                                                        <!---->

                                                                    </div>


                                                                    <!---->
                                                                    <div _ngcontent-c26=""
                                                                         class="contentPrice flex-col al-center">
                                                                        <!---->
                                                                        <div _ngcontent-c26="" class="endPrice">
                                                                            ۲۲۰,۰۰۰
                                                                        </div>
                                                                    </div>

                                                                    <!---->
                                                                </div>
                                                            </a>

                                                            <!---->
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </content-card>
                                            </div>
                                        </carousel-item>
                                        <carousel-item _ngcontent-c12="" class="max-3 ng-tns-c12-9" _nghost-c25="">
                                            <div _ngcontent-c25="" class="itemParent">
                                                <content-card _ngcontent-c12="" _nghost-c26="" class="ng-tns-c12-9">
                                                    <!---->
                                                    <div _ngcontent-c26="" class="contentCardParent wi-100">
                                                        <!---->
                                                        <!---->
                                                        <div _ngcontent-c26="" class="contentCardInnerContainer">
                                                            <!---->
                                                            <!----><a _ngcontent-c26=""
                                                                      class="flex-col wi-100 contentMainLink"
                                                                      href="/business/18124-technical-analysis-of-the-capital-market">

                                                                <div _ngcontent-c26="" class="contentImage wi-100"
                                                                     style="background-image: url(&quot;https://images.faranesh.com/media/341/course/5eae3ea54098c-experts.jpg&quot;);">
                                                                </div>
                                                                <div _ngcontent-c26="" class="contentBackImg"></div>
                                                                <h3 _ngcontent-c26=""
                                                                    class="cardTitle flex-col jus-between al-start"
                                                                    title="تحلیل تکنیکال حرفه‌ای برای متخصصین">
                                                                    <span _ngcontent-c26="">تحلیل تکنیکال حرفه‌ای برای متخصصین<span
                                                                            _ngcontent-c26=""></span></span>
                                                                    <!----><a _ngcontent-c26=""
                                                                              class="courseAuthor flex-row jus-start al-center"
                                                                              title="صفحه‌ی مرتضی علی یاری در فرانش"
                                                                              href="/author/morteza">
                                                                        <div _ngcontent-c26="" class="authorImg"
                                                                             style="background-image: url(&quot;https://images.faranesh.com/media/20/users/20eg7aor3xrwv4fglc41mzw2x7ssuv-mortezaaliyar3.jpg&quot;);"></div>
                                                                        <span _ngcontent-c26="" class="authorName">مرتضی علی یاری</span>
                                                                    </a>
                                                                </h3>
                                                                <div _ngcontent-c26=""
                                                                     class="flex-row jus-between al-center detailRow">
                                                                    <div _ngcontent-c26=""
                                                                         class="flex-row jus-between al-center wrapped"
                                                                         style="max-width: calc(100% - 72px);">
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentTime flex-row al-center">

                                                                            <!----><span
                                                                                _ngcontent-c26="">۰۴:۰۷:۱۴</span>
                                                                            <!---->
                                                                            <i _ngcontent-c26="" aria-hidden="true"
                                                                               class="fw-clock-2-filled"></i>
                                                                        </div>
                                                                        <!---->

                                                                    </div>


                                                                    <!---->
                                                                    <div _ngcontent-c26=""
                                                                         class="contentPrice flex-col al-center">
                                                                        <!---->
                                                                        <div _ngcontent-c26="" class="endPrice">
                                                                            ۳۱۰,۰۰۰
                                                                        </div>
                                                                    </div>

                                                                    <!---->
                                                                </div>
                                                            </a>

                                                            <!---->
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </content-card>
                                            </div>
                                        </carousel-item>
                                        <carousel-item _ngcontent-c12="" class="max-3 ng-tns-c12-9" _nghost-c25="">
                                            <div _ngcontent-c25="" class="itemParent">
                                                <content-card _ngcontent-c12="" _nghost-c26="" class="ng-tns-c12-9">
                                                    <!---->
                                                    <div _ngcontent-c26="" class="contentCardParent wi-100">
                                                        <!---->
                                                        <!---->
                                                        <div _ngcontent-c26="" class="contentCardInnerContainer">
                                                            <!---->
                                                            <!----><a _ngcontent-c26=""
                                                                      class="flex-col wi-100 contentMainLink"
                                                                      href="/business/19001-introducing-the-best-stocks-to-buy-online-class">

                                                                <div _ngcontent-c26="" class="contentImage wi-100"
                                                                     style="background-image: url(&quot;https://images.faranesh.com/media/341/course/5ebab14d73253-27ordi-course-min.jpg&quot;);">
                                                                </div>
                                                                <div _ngcontent-c26="" class="contentBackImg"></div>
                                                                <h3 _ngcontent-c26=""
                                                                    class="cardTitle flex-col jus-between al-start"
                                                                    title="کلاس آنلاین معرفی و بررسی سهام‌های مستعد رشد 7">
                                                                    <span _ngcontent-c26="">کلاس آنلاین معرفی و بررسی سهام‌های مستعد رشد 7<span
                                                                            _ngcontent-c26=""></span></span>
                                                                    <!----><a _ngcontent-c26=""
                                                                              class="courseAuthor flex-row jus-start al-center"
                                                                              title="صفحه‌ی مرتضی علی یاری در فرانش"
                                                                              href="/author/morteza">
                                                                        <div _ngcontent-c26="" class="authorImg"
                                                                             style="background-image: url(&quot;https://images.faranesh.com/media/20/users/20eg7aor3xrwv4fglc41mzw2x7ssuv-mortezaaliyar3.jpg&quot;);"></div>
                                                                        <span _ngcontent-c26="" class="authorName">مرتضی علی یاری</span>
                                                                    </a>
                                                                </h3>
                                                                <div _ngcontent-c26=""
                                                                     class="flex-row jus-between al-center detailRow">
                                                                    <div _ngcontent-c26=""
                                                                         class="flex-row jus-between al-center wrapped"
                                                                         style="max-width: calc(100% - 72px);">
                                                                        <!---->
                                                                        <div _ngcontent-c26=""
                                                                             class="contentTime flex-row al-center">

                                                                            <!----><span
                                                                                _ngcontent-c26="">۰۱:۴۴:۵۴</span>
                                                                            <!---->
                                                                            <i _ngcontent-c26="" aria-hidden="true"
                                                                               class="fw-clock-2-filled"></i>
                                                                        </div>
                                                                        <!---->

                                                                    </div>


                                                                    <!---->
                                                                    <div _ngcontent-c26=""
                                                                         class="contentPrice flex-col al-center">
                                                                        <!---->
                                                                        <div _ngcontent-c26="" class="endPrice">
                                                                            ۵۵۰,۰۰۰
                                                                        </div>
                                                                    </div>

                                                                    <!---->
                                                                </div>
                                                            </a>

                                                            <!---->
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </content-card>
                                            </div>
                                        </carousel-item>
                                        <!---->
                                        <carousel-item _ngcontent-c12="" class="max-3 ng-tns-c12-9" _nghost-c25="">
                                            <div _ngcontent-c25="" class="itemParent"><a _ngcontent-c12=""
                                                                                         class="carouselSeeMore ng-tns-c12-9"
                                                                                         href="/author/morteza">
                                                    <div _ngcontent-c12="" class="ng-tns-c12-9">موارد بیشتر</div>
                                                </a></div>
                                        </carousel-item>


                                    </div>
                                </div>
                            </carousel>
                        </div>

                        <!---->
                    </div>

                </div>

                <!---->
            </div>
        </div>
    </single>


@endsection
