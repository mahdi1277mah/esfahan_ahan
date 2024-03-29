@extends('layouts.admin')
@section('head')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')

    <style>
        th {
            text-align: center;
        }

        body {
            margin: 0;
        }


    </style>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                         مطلب ها
                    </h2>
                    <div style="display: flex;float: left;">
                        <div class="btn-group" style="margin-left: 5px">

                           @Can('create_course')
                                <a href="{{route('admin.courses.create')}}" class="btn btn-info" style="font-size: 16px">افزودن
                                     مطلب جدید</a>
                                <a href="" class="btn btn-primary" style="font-size: 16px;margin-left: 5px">
                                  بخش ویدیوها</a>
                            @endcan

                        </div>
                        <form action="" class="form-inline" style="display: flex;">
                            <input name="search" value="{{request('search')}}" class="form-control mr-sm-2"
                                   type="search" placeholder="جستجو" aria-label="Search">
                            <button class="btn btn-info my-2 my-sm-0" type="submit"
                                    style="    font-size: 10px;border-bottom-left-radius: 10px;border-top-left-radius: 10px">
                                <i class="fa fa-search" style="top: 0;">

                                </i>
                            </button>
                        </form>

                    </div>
                    <br>
                </div>


                <div class="body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable"
                               style="text-align: center">
                            <thead>
                            <tr>
                                <th>آیدی</th>
                                <th>عنوان  مطلب</th>
                                <th>صاحب  مطلب</th>
                                <th>قیمت  مطلب</th>
                                <th>قیمت تخفیف خورده</th>
                                <th>تعداد دانلود شده</th>
                                <th>تعداد نظرات</th>
                                <th>مقدار بازدید</th>
                                <th>وضعیت  مطلب</th>
                                <th>اقدامات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{$course->id}}</td>
                                    <td><a href="{{$course->path()}}">{{$course->title}}</a></td>
                                    <td>{{$course->user->name}}</td>
                                    <td>{{$course->price}}
                                    تومان</td>
                                    <td>{{$course->discount}}
                                    تومان</td>
                                    <td>
                                    1</td>
                                    <td>{{$course->comment_count}}</td>
                                    <td>{{$course->view_count}}</td>
                                    <td>
                                        @if($course->type=='vip')
                                            عضویت ویژه
                                        @elseif($course->type=='cash')
                                            نقدی
                                        @else
                                            رایگان
                                            @endif
                                    </td>
                                    <td style="display: flex; justify-content: center">
                                      @can('delete_course')
                                            <form action="{{route('admin.courses.destroy',['course'=>$course->id])}}"
                                                  method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">حذف</button>
                                            </form>
                                        @endcan
                                     @can('edit_course')
                                              <a href="{{route('admin.courses.edit',['course'=>$course->id])}}"
                                                 class="btn btn-sm btn-primary" style="margin-right: 3px;">ویرایش</a>
                                          @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="card-footer">
{{--
                    {{$courses->render()}}
--}}
                </div>
            </div>

        </div>

    </div>



@endsection
