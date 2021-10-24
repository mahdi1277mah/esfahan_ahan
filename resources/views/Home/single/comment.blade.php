<form action="/comment" method="post">
    {{csrf_field()}}
    <input type="hidden" name="parent_id" value="0">
    <input type="hidden" name="course_id" value="{{$course->id}}">
    <input type="hidden" name="course_type" value="{{get_class($course)}}">
    <div _ngcontent-c22="" class="wi-100 flex-col al-end">

        <input _ngcontent-c22="" class="basicInput ng-untouched ng-pristine ng-valid" name="name" id="name"
               placeholder="عنوان سوال" type="text">

        <textarea _ngcontent-c22="" name="comment" id="comment" class="basicTextArea ng-untouched ng-pristine ng-valid"
                  placeholder="متن و توضیحات سوال را بنویسید"></textarea>
        <!---->
        <div _ngcontent-c22="" class="flex-row wi-100 jus-between wrapped">
            <div _ngcontent-c22="" class="flex-row imgUploadWrapper ">
                <!---->
            {{--                <image-upload _ngcontent-c22="" _nghost-c31="">--}}
            {{--                    <div _ngcontent-c31="" class="uploader">--}}
            {{--                        <input _ngcontent-c31="" accept="image/*" id="fileInput" style="display:none;" type="file">--}}
            {{--                        <button _ngcontent-c31="" class=" upload-btn">--}}
            {{--                            <!----><i _ngcontent-c31="" class="far fa-image"></i>--}}
            {{--                            <span _ngcontent-c31="" class="captionSpan">فایل ضمیمه</span>--}}
            {{--                            <!---->--}}
            {{--                        </button>--}}
            {{--                        <!---->--}}
            {{--                    </div>--}}
            {{--                </image-upload>--}}
            <!---->
            </div>

        </div>
        <div _ngcontent-c22="" class=" actionBtn flex-row al-center jus-center">
            <button type="submit" class="btn btn-primary" style="background: #0093ee;color: #ffffff">ثبت سوال من
            </button>
        </div>
    </div>
</form>
<div _ngcontent-c22="" class="cmTitle">
    <div _ngcontent-c22="" class="title">
        ۴
        پرسش و پاسخ از این دوره آموزشی
    </div>
</div>
@foreach($comments as $comment)
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
                                    <div _ngcontent-c32="" class="userName" property="author">{{$comment->user->name}}</div>
                                    <meta _ngcontent-c32="" property="datePublished" content="2019-12-21 16:12:18">
                                    <div _ngcontent-c32="" class="cmDetail" property="reviewRating" typeof="Rating">
                                        <meta _ngcontent-c32="" content="1" property="worstRating">
                                        <!---->
                                        <!---->
                                        <meta _ngcontent-c32="" content="5" property="ratingValue">
                                        <meta _ngcontent-c32="" content="5" property="bestRating">
                                        {{jdate($comment->created_at)->ago()}}
{{--                                        <span _ngcontent-c32="">۱۶:۱۲:۱۸</span>--}}
                                        <!---->
                                    </div>
                                    <!---->

                                </div>
                                <div _ngcontent-c32="" class="flex-row al-end jus-end">
                                    <!---->
                                    <!---->
                                </div>
                            </div>

                            <!---->
                            <div _ngcontent-c32="" class="discussionTitle">{!! $comment->name !!}</div>
                            <!---->
                            <!---->
                            <!---->
                            <div _ngcontent-c32="" class="wi-100" property="description">
                                {!! $comment->comment !!}
                            </div>

                            <div _ngcontent-c32="" class="newReply wi-100" style="height: 0px;">
                                <!---->
                                <!---->
                                <div _ngcontent-c32="" class="newCm wi-100 flex-col al-end">
                                    <textarea _ngcontent-c32="" class="basicTextArea ng-untouched ng-pristine ng-valid"
                                              placeholder="نظرتان در مورد گفته‌ی
                                               {{$comment->user->name}}
                                               را با دیگران در میان بگذارید"></textarea>
                                    <!---->
                                    <div _ngcontent-c32="" class="flex-row jus-between wi-100 wrapped">
                                        <div _ngcontent-c32="" class="flex-row imgUploadWrapper">
                                            <!---->
                                            <image-upload _ngcontent-c32="" _nghost-c31="">
                                                <div _ngcontent-c31="" class="uploader">
                                                    <input _ngcontent-c31="" accept="image/*" id="fileInput"
                                                           style="display:none;" type="file">
                                                    <button _ngcontent-c31="" class="upload-btn">
                                                        <!----><i _ngcontent-c31=""
                                                                  class="icon-streamline-30px-84 imageIcon"></i>
                                                        <span _ngcontent-c31="" class="captionSpan">فایل ضمیمه</span>
                                                        <!---->
                                                    </button>
                                                    <!---->
                                                </div>
                                            </image-upload>
                                            <!---->
                                        </div>
                                        <div _ngcontent-c32="" class="flex-row wrapped">
                                            <div _ngcontent-c32="" class="lightCancelBtn flex-row al-center jus-center">
                                                لغو ارسال
                                            </div>
                                            <div _ngcontent-c32="" class="actionBtn flex-row al-center jus-center">ثبت
                                                پاسخ من
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!---->
                            <div _ngcontent-c32="" class="wi-100">
                                <!---->
                            </div>

                            <!---->
                        </div>
                    </div>
                </div>
            </div>
        </single-cm>


    </div>
@endforeach
