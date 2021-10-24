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
                        کاربران
                    </h2>
                    <div style="display: flex;float: left;">
                        <div class="btn-group" style="margin-left: 5px">
                            @can('show_staff_user')
                                <a href="{{request()->fullUrlWithQuery(['admin'=>1])}}" class="btn btn-warning"
                                   style="margin-right: 5px;font-size: 16px">نمایش مدیران</a>
                            @endcan
                            @can('create_user')
                                <a href="{{route('admin.users.create')}}" class="btn btn-info" style="font-size: 16px">افزودن
                                    کاربر جدید</a>
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
                                <th>نام</th>
                                <th>ایمیل</th>
                                <th>مقام ها</th>
                                <th>اقدامات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @if($user->is_superuser == '1')
                                            مدیرکل سایت
                                        @elseif($user->is_staff == '1')
                                            همکار سایت
                                        @elseif($user->vendor == '1')
                                            مدرس سایت
                                        @elseif($user->is_member == '1')
                                            کاربر عادی سایت
                                        @endif
                                    </td>
                                    <td style="display: flex; justify-content: center">

                                        @if($user->is_superuser == '1')
                                            @can('create_super_user')
                                                <form action="{{route('admin.users.destroy',['user'=>$user->id])}}"
                                                      method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-sm btn-danger">حذف</button>
                                                </form>
                                            @endcan
                                        @else
                                            @can('delete_user')
                                                <form action="{{route('admin.users.destroy',['user'=>$user->id])}}"
                                                      method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-sm btn-danger">حذف</button>
                                                </form>
                                            @endcan
                                        @endif
                                            @if($user->is_superuser == '1')
                                                @can('create_super_user')
                                                    <a href="{{route('admin.users.edit',['user'=>$user->id])}}"
                                                       class="btn btn-sm btn-primary" style="margin-right: 3px;">ویرایش</a>
                                                @endcan
                                            @else
                                        @can('edit_user')
                                            <a href="{{route('admin.users.edit',['user'=>$user->id])}}"
                                               class="btn btn-sm btn-primary" style="margin-right: 3px;">ویرایش</a>
                                        @endcan
                                            @endif

                                        @if($user->isStaffuser())
                                            @can('staff_user_permissions')
                                                <a href="{{route('admin.users.permissions',$user->id)}}"
                                                   class="btn btn-sm btn-warning" style="margin-right: 3px;">دسترسی
                                                    ها</a>
                                            @endcan
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="card-footer">
                        {{$users->render()}}
                    </div>
                </div>

            </div>

        </div>

    </div>



@endsection
