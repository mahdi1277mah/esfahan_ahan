@extends('layouts.admin')
@section('head')
@section('js')
    <script src="{{asset('/ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('body',{
            filebrowserUploadMethod : 'form',
            filebrowserUploadUrl: '/admin/panel/upload-image',
            filebrowserImageUploadUrl: '/admin/panel/upload-image',
        });
    </script>
@endsection
@endsection
@section('content')

    <style>
        th {
            text-align: center;
        }

        .form-group .form-control {
            width: 100%;
            box-shadow: none;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            border-radius: 0;
            padding-left: 0;
            border: 1px solid;
        }
        .dropdown-toggle {
            display: none;
        }

        .bootstrap-select {
            width: 100%;
        }

        select[multiple], select[size] {
            width: -webkit-fill-available;
        }
        button  input, select, a {
            outline: none !important;
            width: 100%;
        }
    </style>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        ویرایش ویدیو
                    </h2>
                    <div class="btn-group-sm" style="float: left">
                        @can('show_course')
                        <a href="{{route('admin.episodes.index')}}" class="btn btn-primary">مدیریت ویدیو ها</a>
                        @endcan
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <form action="{{route('admin.episodes.update',['episode'=>$episode->id])}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            @method('PATCH')
                            @include('errors.errors')

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="title" class="control-label">عنوان ویدیو</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                           placeholder="لطفا عنوان ویدیو را وارد کنید" value="{{$episode->title}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="slug" class="control-label">لینک ویدیو
                                        (slug)
                                    </label>
                                    <input type="text" class="form-control" name="slug" id="slug"
                                           placeholder="لطفا لینک ویدیو را وارد کنید" value="{{$episode->slug}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="course_id" class="control-label">نوع اپلیکیشن مرتبط با ویدیو</label>
                                    <select name="course_id" id="course_id">
                                        @foreach(\App\Models\Course::latest()->get() as $course)
                                            <option value="{{$course->id}}" {{ in_array($course->id ,$episode->course()->pluck('id')->toArray()) ? 'selected': ''}}>{{$course->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="body" class="control-label">توضیحات ویدیو</label>
                                    <textarea rows="5" type="text" class="form-control" name="body" id="body"
                                              placeholder="توضیحات ویدیو">{{$episode->body}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="videos" class="control-label">ویدیو قسمت اپلیکیشن</label>
                                    <input type="file" class="form-control" name="videos" id="videos"
                                           placeholder="ویدیو اپلیکیشن" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label for="videoUrl" class="control-label">لینک ویدیو اپلیکیشن</label>
                                    <input type="text" class="form-control" name="videoUrl" id="videoUrl"
                                           placeholder="لینک ویدیو اپلیکیشن" value="{{$episode->videoUrl}}">
                                </div>
                                <div class="col-sm-4">
                                    <label for="time" class="control-label">زمان ویدیو</label>
                                    <input type="text" class="form-control" name="time" id="time"
                                           placeholder="زمان ویدیو" value="{{$episode->time}}">
                                </div>
                                <div class="col-sm-4">
                                    <label for="type" class="control-label">نوع ویدیو</label>
                                    <select name="type" id="type">
                                        <option value="vip" {{$course->type == 'vip' ? 'selected': ''}}>مخصوص اعضای ویژه</option>
                                        <option value="cash" {{$course->type == 'cash' ? 'selected': ''}}>نقدی</option>
                                        <option value="free" {{$course->type == 'free' ? 'selected': ''}}>رایگان</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <label for="tags" class="control-label">تگ های ویدیو</label>
                                    <input type="text" class="form-control" name="tags" id="tags"
                                           placeholder="تگ های ویدیو" value="{{$episode->tags}}">
                                </div>
                                <div class="col-sm-4">
                                    <label for="number" class="control-label">شماره قسمت ویدیو</label>
                                    <input type="number" class="form-control" name="number" id="number"
                                           placeholder="شماره قسمت ویدیو" value="{{$episode->number}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success">آپدیت ویدیو</button>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>
            </div>



@endsection
