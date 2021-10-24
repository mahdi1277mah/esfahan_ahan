@extends('Home.layouts.master')
@section('head')

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <style>
        @media (min-width: 1200px)
        {
            .container, .container-lg, .container-md, .container-sm, .container-xl {
                max-width: 1440px !important;
            }
        }
    </style>
@endsection
@section('content')

        <main _ngcontent-c0="">
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
            <home>
                <home-reg class="homeReg" _nghost-c13="">

                    <section _ngcontent-c13="" class="secondSec">
                        <div _ngcontent-c13="" class="container al-start" style="position: relative">
                            <!---->
                            <best-contents _ngcontent-c13="" style="padding: 0 15px" _nghost-c19="">
                                <div _ngcontent-c19="" class="bestContents wi-100">
                                    <div _ngcontent-c19="" class="faraTitle wi-100">
                                        <div _ngcontent-c19="" class="title">نتایج جستجو</div>
                                    </div>

                                    <!---->
                                    <div _ngcontent-c19="" class="contentsWrapper flex-row al-start jus-between wrapped">
                                        @foreach($courses as $course)

                                            <div _ngcontent-c19="" class="singleCard wi-lg-25 wi-md-33 wi-sm-100 wi-xs-100">
                                                <content-card _ngcontent-c19="" _nghost-c18="">

                                                    <div _ngcontent-c18="" class="contentCardParent wi-100">
                                                        <!---->
                                                        <div _ngcontent-c18=""
                                                             class="discountBadge flex-col al-center jus-center">
                                                            <span _ngcontent-c18="" class="discountPercentage">۳۰%</span>
                                                            تخفیف
                                                        </div>
                                                        <!---->
                                                        <div _ngcontent-c18="" class="contentCardInnerContainer">

                                                            <a _ngcontent-c18=""
                                                               class="flex-col wi-100 contentMainLink"
                                                               href="{{$course->path()}}">

                                                                <div _ngcontent-c18="" class="contentImage wi-100"
                                                                     style="background-image: url({{$course->images['thumb']}});">
                                                                </div>
                                                                <div _ngcontent-c18="" class="contentBackImg"></div>
                                                                <h3 _ngcontent-c18=""
                                                                    class="cardTitle flex-col jus-between al-start"
                                                                    title="{{$course->title}}">
                                                            <span _ngcontent-c18="">{{$course->title}}<span
                                                                    _ngcontent-c18=""></span></span>
                                                                    <!----><a _ngcontent-c18=""
                                                                              class="courseAuthor flex-row jus-start al-center"
                                                                              title="صفحه‌ی
                                                                        {{$course->user->name}}
                                                                                  در فرانش"
                                                                              href="/author/{{$course->user->username}}">
                                                                        <div _ngcontent-c18="" class="authorImg"

                                                                             style="
                                                                             @if($course->user->img == null)

                                                                                 background-image: url(&quot;https://images.faranesh.com/media/20/users/user-default-image.jpg&quot;);">
                                                                            @else

                                                                                background-image:
                                                                                url($course->user->img['thumb']">
                                                                            @endif


                                                                        </div>
                                                                        <span _ngcontent-c18=""
                                                                              class="authorName">  {{$course->user->name}}</span>
                                                                    </a>
                                                                </h3>
                                                                <div _ngcontent-c18=""
                                                                     class="flex-row jus-between al-center detailRow">
                                                                    <div _ngcontent-c18=""
                                                                         class="flex-row jus-between al-center wrapped"
                                                                         style="max-width: calc(100% - 72px);">
                                                                        <!---->
                                                                        <div _ngcontent-c18=""
                                                                             class="contentTime flex-row al-center">

                                                                            <!----><span
                                                                                _ngcontent-c18="">{{$course->time}}</span>
                                                                            <!---->
                                                                            <i class="fas fa-clock"></i>
                                                                            {{--                                                                        <i _ngcontent-c18="" aria-hidden="true"--}}
                                                                            {{--                                                                           class="fw-clock-2-filled"></i>--}}
                                                                        </div>
                                                                        <!---->
                                                                        {{--                                                                    <div _ngcontent-c18=""--}}
                                                                        {{--                                                                         class="contentRate flex-row al-center">--}}


                                                                        {{--                                                                        <star-rate _ngcontent-c18="" _nghost-c22="">--}}
                                                                        {{--                                                                            <div _ngcontent-c22=""--}}
                                                                        {{--                                                                                 class="flex-row jus-start al-center"--}}
                                                                        {{--                                                                                 dir="rtl" id="rate-container-back">--}}
                                                                        {{--                                                                                <!----><span _ngcontent-c22="">--}}
                                                                        {{--        <i _ngcontent-c22="" class="rating-star fw-rank-army-star-badge-6-filled"--}}
                                                                        {{--           style="font-size: 15px; margin-right: 2px;">--}}
                                                                        {{--            <span _ngcontent-c22="" class="tooltiptext">بد</span>--}}
                                                                        {{--        </i>--}}
                                                                        {{--    </span><span _ngcontent-c22="">--}}
                                                                        {{--        <i _ngcontent-c22="" class="rating-star fw-rank-army-star-badge-6-filled"--}}
                                                                        {{--           style="font-size: 15px; margin-right: 2px;">--}}
                                                                        {{--            <span _ngcontent-c22="" class="tooltiptext">ضعیف</span>--}}
                                                                        {{--        </i>--}}
                                                                        {{--    </span><span _ngcontent-c22="">--}}
                                                                        {{--        <i _ngcontent-c22="" class="rating-star fw-rank-army-star-badge-6-filled"--}}
                                                                        {{--           style="font-size: 15px; margin-right: 2px;">--}}
                                                                        {{--            <span _ngcontent-c22="" class="tooltiptext">معمولی</span>--}}
                                                                        {{--        </i>--}}
                                                                        {{--    </span><span _ngcontent-c22="">--}}
                                                                        {{--        <i _ngcontent-c22="" class="rating-star fw-rank-army-star-badge-6-filled"--}}
                                                                        {{--           style="font-size: 15px; margin-right: 2px;">--}}
                                                                        {{--            <span _ngcontent-c22="" class="tooltiptext">خوب</span>--}}
                                                                        {{--        </i>--}}
                                                                        {{--    </span><span _ngcontent-c22="">--}}
                                                                        {{--        <i _ngcontent-c22="" class="rating-star fw-rank-army-star-badge-6-filled"--}}
                                                                        {{--           style="font-size: 15px; margin-right: 2px;">--}}
                                                                        {{--            <span _ngcontent-c22="" class="tooltiptext">عالی</span>--}}
                                                                        {{--        </i>--}}
                                                                        {{--    </span>--}}
                                                                        {{--                                                                                <!---->--}}
                                                                        {{--                                                                                <!---->--}}
                                                                        {{--                                                                                <div _ngcontent-c22=""--}}
                                                                        {{--                                                                                     class="countTooltip">--}}
                                                                        {{--                                                                                    <span _ngcontent-c22=""--}}
                                                                        {{--                                                                                          class="rateNum">3.89</span>--}}
                                                                        {{--                                                                                    از ۳۷ رای--}}
                                                                        {{--                                                                                </div>--}}
                                                                        {{--                                                                            </div>--}}
                                                                        {{--                                                                            <div _ngcontent-c22=""--}}
                                                                        {{--                                                                                 class="flex-row jus-start al-center"--}}
                                                                        {{--                                                                                 dir="rtl" id="rate-container">--}}
                                                                        {{--                                                                                <!----><span _ngcontent-c22="">--}}
                                                                        {{--        <!----><i _ngcontent-c22="" class="rating-star yellow fw-rank-army-star-badge-6-filled"--}}
                                                                        {{--                  style="font-size: 15px; margin-right: 2px;">--}}
                                                                        {{--        </i>--}}
                                                                        {{--    </span><span _ngcontent-c22="">--}}
                                                                        {{--        <!----><i _ngcontent-c22="" class="rating-star yellow fw-rank-army-star-badge-6-filled"--}}
                                                                        {{--                  style="font-size: 15px; margin-right: 2px;">--}}
                                                                        {{--        </i>--}}
                                                                        {{--    </span><span _ngcontent-c22="">--}}
                                                                        {{--        <!----><i _ngcontent-c22="" class="rating-star yellow fw-rank-army-star-badge-6-filled"--}}
                                                                        {{--                  style="font-size: 15px; margin-right: 2px;">--}}
                                                                        {{--        </i>--}}
                                                                        {{--    </span><span _ngcontent-c22="">--}}
                                                                        {{--        <!----><i _ngcontent-c22="" class="rating-star yellow fw-rank-army-star-half-right-badge-6-filled"--}}
                                                                        {{--                  style="font-size: 15px; margin-right: 2px;">--}}
                                                                        {{--        </i>--}}
                                                                        {{--    </span><span _ngcontent-c22="">--}}
                                                                        {{--        <!---->--}}
                                                                        {{--    </span>--}}
                                                                        {{--                                                                            </div>--}}
                                                                        {{--                                                                        </star-rate>--}}
                                                                        {{--                                                                    </div>--}}
                                                                    </div>


                                                                    <!---->
                                                                    <div _ngcontent-c18=""
                                                                         class="contentPrice flex-col al-center">
                                                                        <!---->
                                                                        <div _ngcontent-c18="" class="discountPrice">۷۹,۰۰۰
                                                                        </div>
                                                                        <div _ngcontent-c18="" class="endPrice">
                                                                            @if($course->price==0)
                                                                                رایگان
                                                                            @else

                                                                                {{$course->price}}
                                                                            @endif
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

                                        @endforeach
                                    </div>
                                </div>
                            </best-contents>


                            <div _ngcontent-c13="" class="featuredCarouselWrapper wi-100" style="position: relative">
                                <!---->
                                <!---->
                            </div>

                        </div>
                    </section>

                </home-reg>
            </home>
        </main>




@endsection
