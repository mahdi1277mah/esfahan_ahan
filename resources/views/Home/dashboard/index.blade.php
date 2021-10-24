@extends('Home.layouts.master')

@section('content')

    <style>
        .cardTitle_inline {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            border-radius: 50%;
            margin-left: 5px;
            width: 20px;
            height: 20px;
            text-align: right;
            font-size: 18px;
            line-height: 31px;
            font-weight: 300;
            letter-spacing: -1px;
        }
        .cardTitle_span_inline {
            color: #383d48;
            font-size: 12px;
            font-weight: 600;
            line-height: 20px;
            letter-spacing: -0.5px;
            -webkit-transition: all 0.2s;
            transition: all 0.2s;
        }

        .featured_inline{
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
        }
        .cardTitleing_inline{
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            position: relative;
            margin: 0;
            min-height: 139px;
            max-height: calc(100% - 48px);
            padding-bottom: 20px;
            margin: 10px 15px 0 15px;
            text-align: right;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .h3_inline{
            padding: 0;
            margin: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            color: #383d48;
            font-size: 18px;
            line-height: 31px;
            font-weight: 300;
            letter-spacing: -1px;
            text-align: right;
        }
        .cardDescription[_ngcontent-c20] {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            position: relative;
            font-size: 14px;
            font-weight: 100;
            color: #6f7881;
            overflow: hidden;
            margin: 20px 0px;
        }
        .cardDescription[_ngcontent-c14]::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 1em;
            background: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0)), to(white));
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0), white 100%);
            text-align: justify;
        }
        .cardDescription[_ngcontent-c14] {
            font-size: 14px;
            font-weight: 100;
            color: #6f7881;
        }

    </style>


    <dashboard _nghost-c12="">


        <div _ngcontent-c12="" class="wi-100" style="display: block; padding: 170px 0px 30px 0;">

            <learning _nghost-c13="">
                <div _ngcontent-c13="" class="container flex-row jus-between wrapped">

                    <div _ngcontent-c13="" class="side-bar flex-col jus-start wi-md-25 wi-sm-100 wi-xs-100" style="min-height: 255px;">
                        <div _ngcontent-c13="" class="inner-side-bar flex-col jus-start wi-100" fix="" style="position: absolute; padding-bottom: 15px; top: 0px;">
                            <div _ngcontent-c13="" class="navigation-menu flex-col al-start jus-center">
                                <ul _ngcontent-c13="" class="flex-col al-start jus-start">
                                    <li _ngcontent-c13="" class="flex-row al-center jus-start">
                                        <a _ngcontent-c13="" class="flex-row al-center jus-start active" routerlink="/admin/courses/create" routerlinkactive="active" href="/admin/courses/create" dideo-checked="true">
                                            <i _ngcontent-c13="" class="navigation-menu-icon fas fa-badge-dollar"></i>
                                            <span _ngcontent-c13="">افزودن مطلب جدید</span>
                                        </a>
                                    </li>




                                </ul>                            </div>
                            <div _ngcontent-c13="" class="search-box flex-col al-center jus-center">
                                <div _ngcontent-c13="" class="flex-row al-center jus-between">
                                    <input _ngcontent-c13="" placeholder="جستجو" type="text" class="ng-untouched ng-pristine ng-valid" style="box-shadow: none;">
                                    <span _ngcontent-c13=""><i _ngcontent-c13="" class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!---->
                    <!---->
                    <!---->
                    <div _ngcontent-c13="" class="content-wrapper wi-md-75 wi-sm-100 wi-xs-100">
                        <div _ngcontent-c13="" class="wi-100 flex-row al-start jus-start wrapped">
                            <!---->
                            @foreach($lists as $list)

                            <div _ngcontent-c13="" class="wi-lg-33 wi-sm-100 wi-xs-100 content-padding">
                                <content-card _ngcontent-c13="" _nghost-c14=""><!---->
                                    <div _ngcontent-c14="" class="contentCardParent wi-100">
                                        <!---->
                                        <!---->
                                        <div _ngcontent-c14="" class="contentCardInnerContainer">
                                            <!---->
                                            <!----><a _ngcontent-c14="" class="flex-col wi-100 contentMainLink" href="http://127.0.0.1:8000/admin/courses" dideo-checked="true">

                                                <div _ngcontent-c14="" class="contentImage wi-100"
                                                     style="background-image:
                                                         url(http://127.0.0.1:8000/{{$list->images['thumb']}});">

                                                </div>
                                                <div _ngcontent-c14="" class="contentBackImg"></div>
                                            </a>
                                            <h3 _ngcontent-c14="" class="cardTitle flex-col jus-between al-start" title="{{$list->title}}">
                                                <a _ngcontent-c14="" class="flex-col wi-100 contentMainLink" href="http://127.0.0.1:8000/admin/courses" dideo-checked="true">
                                                    <span _ngcontent-c14="">{{$list->title}}<span _ngcontent-c14=""></span></span>
                                                    <!----></a>
                                            </h3>
                                            <div _ngcontent-c14="" class="flex-row jus-between al-center detailRow">

                                                <div _ngcontent-c14="" class="flex-row jus-between al-center wrapped" style="max-width: calc(100% - 72px); ">

                                                    <a _ngcontent-c14="" class="courseAuthor flex-row jus-start al-center" title="صفحه‌ی   {{$list->user->name}} در رامان" href="http://127.0.0.1:8000/admin/courses" dideo-checked="true">
                                                        <div _ngcontent-c14="" class="authorImg cardTitle_inline"      style="
                                                        @if($list->user->img == null)

                                                            background-image: url(&quot;https://images.faranesh.com/media/20/users/user-default-image.jpg&quot;);">
                                                            @else

                                                                background-image:
                                                                url($list->user->img['thumb']">
                                                            @endif</div>
                                                        <span _ngcontent-c14="" class="authorName cardTitle_span_inline">{{$list->user->name}}</span>
                                                    </a>



                                                </div>


                                                    <div _ngcontent-c14="" class="contentPrice flex-col al-center">
                                                        <!---->
                                                        <a _ngcontent-c14="" class="flex-col wi-100 contentMainLink" href="http://127.0.0.1:8000/admin/courses" dideo-checked="true">
                                                            @if($list->user->is_superuser == '1')
                                                                <div _ngcontent-c14="" class="endPrice enrolled">
                                                                    مدیریت
                                                                </div>
                                                            @elseif($list->user->is_staff == '1')
                                                                <div _ngcontent-c14="" class="endPrice enrolled">
                                                                    مدیریت
                                                                </div>
                                                            @elseif($list->user->vendor == '1')
                                                                <div _ngcontent-c14="" class="endPrice enrolled">
                                                                    مدیریت
                                                                </div>
                                                            @elseif($list->user->is_member == '1')

                                                            @endif

                                                                                                   <!----></a>

                                                    </div>
                                                <!---->
                                            </div>

                                            <!---->
                                            <!---->
                                        </div>
                                    </div>
                                </content-card>
                            </div>
                            @endforeach

                        </div>

                        <!---->
                        <div _ngcontent-c13="" class="paginateWrapp wi-100 flex-row jus-center">

                        </div>
                    </div>
                </div>
            </learning>
        </div>
    </dashboard>
@endsection
