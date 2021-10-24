<form action="/review" method="post">
    {{csrf_field()}}
    <input type="hidden" name="parent_id" value="0">
    <input type="hidden" name="course_id" value="{{$course->id}}">
    <input type="hidden" name="course_type" value="{{get_class($course)}}">
    <div _ngcontent-c39="" class="newCm wi-100 flex-col al-end">
        <div _ngcontent-c39="" class="wi-100 flex-row al-start jus-start criticalNotesOnReviews">
            <ul _ngcontent-c39="">
                <li _ngcontent-c39="">اینجا محل نوشتن نقد و بررسی شما درباره‌ی دوره است.</li>
                <li _ngcontent-c39="">تنها یک بار می‌توانید درباره‌ی این دوره نقد و بررسی بنویسید.</li>
                <li _ngcontent-c39="">هرگونه پرسش و پاسخ با استاد تنها از بخش «پرسش و پاسخ» انجام می‌گردد.</li>
                <li _ngcontent-c39="">نقد و بررسی کامل و شفاف‌تری بنویسید و سایر دانشجویان را در خرید و ثبت‌نام راهنمایی
                    کنید.
                </li>
            </ul>
        </div>

        <!---->
        <div _ngcontent-c39="" class="wi-100 flex-col al-end">
            <!---->
            <div _ngcontent-c39="" class="alternativeDescriptions wi-100 al-end jus-end">
                <ul _ngcontent-c39="">
                    <li _ngcontent-c39="">
                        <!----> حداقل طول نظر ۱۵ کلمه (۰)
                    </li>
                </ul>
            </div>

            <!---->
        </div>
        <!---->

    </div>
    <div _ngcontent-c22="" class="wi-100 flex-col al-end">


        <textarea _ngcontent-c22="" name="comment" id="comment" class="basicTextArea ng-untouched ng-pristine ng-valid"
                  placeholder="متن و توضیحات سوال را بنویسید"></textarea>
        <!---->
        <div _ngcontent-c22="" class="flex-row wi-100 jus-between wrapped">
            <div _ngcontent-c22="" class="flex-row imgUploadWrapper ">

            </div>

        </div>
        <div _ngcontent-c22="" class=" actionBtn flex-row al-center jus-center">
            <button type="submit" class="btn btn-primary" style="background: #0093ee;color: #ffffff">ثبت نقد و بررسی من
            </button>
        </div>
    </div>
</form>
<div _ngcontent-c22="" class="cmTitle">
    <div _ngcontent-c22="" class="title">
        ۱
        نقد و بررسی از دانشجویان این دوره آموزشی
    </div>
</div>
@foreach($reviews as $review)
    <div _ngcontent-c22="" class="singleCmWrapper">
        <single-cm _ngcontent-c22="" _nghost-c32="">
            <div _ngcontent-c32="" class="singleCmParent wi-100 flex-row" property="review" typeof="Review">
                <div _ngcontent-c32="" class="flex-row wi-100">
                    <div _ngcontent-c32="" class="wi-100 flex-row">
                        <div _ngcontent-c32="" class="rightSide">
                            <div _ngcontent-c32="" class="userImage"
                                 style="background-image: url(&quot;https://images.faranesh.com/media/48/users/user-default-image.jpg&quot;);">
                                <!---->
                            </div>
                            <!---->
                        </div>
                        <div _ngcontent-c32="" class="leftSide">
                            <div _ngcontent-c32="" class="flex-row jus-between firstRow">
                                <div _ngcontent-c32="" class="userData flex-col al-start">
                                    <div _ngcontent-c32="" class="userName" property="author">{{$review->user->name}}</div>
                                    <meta _ngcontent-c32="" property="datePublished" content="2020-01-20 03:24:29">
                                    <div _ngcontent-c32="" class="cmDetail" property="reviewRating" typeof="Rating">
                                        <meta _ngcontent-c32="" content="1" property="worstRating">
                                        <!---->
                                        <meta _ngcontent-c32="" property="ratingValue" content="3">
                                        <!---->
                                        <meta _ngcontent-c32="" content="5" property="ratingValue">
                                        <meta _ngcontent-c32="" content="5" property="bestRating">
                                        {{jdate($review->created_at)->ago()}}
{{--                                        <span _ngcontent-c32="">۰۳:۲۴:۲۹</span>--}}
                                        <!----><span _ngcontent-c32="" class="userRate">


							</span>
                                    </div>
                                    <!---->

                                </div>
                                <div _ngcontent-c32="" class="flex-row al-end jus-end">
                                    <!---->
                                    <!---->
                                </div>
                            </div>

                            <!---->
                            <!---->
                            <!---->
                            <div _ngcontent-c32="" class="wi-100" property="description">
                                {!! $review->comment !!}
                            </div>
                            <!---->

                            <div _ngcontent-c32="" class="newReply wi-100" style="height: 0px;">
                                <!---->
                                <div _ngcontent-c32="" class="newCm wi-100 flex-col al-end">
                                    <textarea _ngcontent-c32="" class="basicTextArea ng-untouched ng-pristine ng-valid"
                                              placeholder="نظرتان در مورد گفته‌ی
                                               {{$review->user->name}}
                                               را با دیگران در میان بگذارید"></textarea>
                                    <div _ngcontent-c32="" class="flex-row wrapped">
                                        <div _ngcontent-c32="" class="lightCancelBtn flex-row al-center jus-center">لغو
                                            ارسال
                                        </div>
                                        <div _ngcontent-c32="" class="actionBtn flex-row al-center jus-center">ثبت نظر
                                            من
                                        </div>
                                    </div>
                                </div>
                                <!---->

                            </div>

                            <!---->

                            <!---->
                        </div>
                    </div>
                </div>
            </div>
        </single-cm>

    </div>

@endforeach
