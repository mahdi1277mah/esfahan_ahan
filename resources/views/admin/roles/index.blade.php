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
                        نقش های کاربری
                    </h2>
                    <div style="display: flex;float: left;">
                        <div class="btn-group" style="margin-left: 5px">

                            @can('create_role')

                                <a href="{{route('admin.roles.create')}}" class="btn btn-info" style="font-size: 16px">ایجاد نقش
                                    جدید</a>
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
                                <th>نام نقش(مقام)</th>
                                <th>توضیح نقش کاربری</th>
                                <th>اقدامات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{$role->id}}</td>
                                    <td>{{$role->name}}</td>
                                    <td>{{$role->label}}</td>
                                    <td style="display: flex; justify-content: center">
                                        @can('delete_roles')
                                            <form action="{{route('admin.roles.destroy',['role'=>$role->id])}}"
                                                  method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">حذف</button>
                                            </form>
                                        @endcan
                                        @can('edite_role')
                                            <a href="{{route('admin.roles.edit',['role'=>$role->id])}}"
                                               class="btn btn-sm btn-primary" style="margin-right: 3px;">ویرایش</a>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="card-footer">
                        {{$roles->render()}}
                    </div>
                </div>

            </div>

        </div>

    </div>



@endsection
