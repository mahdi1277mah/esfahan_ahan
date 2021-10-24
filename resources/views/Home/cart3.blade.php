@extends('Home.layouts.master')
@section('head')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">


@endsection

@section('content')
    <div class="container px-3 my-5 clearfix" style="text-align: center;">
        <div class="card">
            <div class="card-header">
                <h2>سبد خرید</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered m-0">
                        <thead>
                        <tr>
                            <!-- Set columns width -->
                            <th class="text-center py-3 px-4" style="min-width: 400px;">نام دوره</th>
                            <th class="text-right py-3 px-4" style="width: 150px;">قیمت واحد</th>
                            <th class="text-center py-3 px-4" style="width: 120px;">تعداد</th>
                            <th class="text-right py-3 px-4" style="width: 150px;">قیمت نهایی</th>
                            <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#"
                                                                                                   class="shop-tooltip float-none text-light"
                                                                                                   title=""
                                                                                                   data-original-title="Clear cart"><i
                                        class="ino ion-md-trash"></i></a></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\Cart::instance('cart-faranesh')->all() as $cart)
                            @if(isset($cart['course']))
                                @php
                                    $course = $cart['course'];
                                @endphp
                                <tr>
                                    <td class="p-4">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <a href="#" class="d-block text-dark">{{$course->title}}</a>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right font-weight-semibold align-middle p-4">  {{$course->price}}
                                        تومان
                                    </td>
                                    <td class="align-middle p-4">
                                        <select name="" class="form-control text-center"
                                                onchange="changeQuantity(event,'{{$cart['id']}}','cart-faranesh')">
                                            @foreach(range(1,$course->inventory) as $item)
                                                <option
                                                    value="{{$item}}" {{$cart['quantity'] == $item ? 'selected' : ''}}>{{$item}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="text-right font-weight-semibold align-middle p-4"> {{$course->price * $cart['quantity']}}
                                        تومان
                                    </td>
                                    <td class="text-center align-middle px-0">
                                        <form action="{{route('cart.destroy',$cart['id'])}}"
                                              id="delete-cart-{{$course->id}}" method="post">
                                            @csrf
                                            @method('delete')

                                            <a href="#"
                                               onclick="event.preventDefault();document.getElementById('delete-cart-{{$course->id}}').submit()"
                                               class="shop-tooltip close float-none text-danger">×</a>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- / Shopping cart table -->
                <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
                    <div style="border: 1px solid #62B965;margin-bottom:20px;" id="discount_box">
                        <div style="padding: 20px;">
                            <div class="row">
                                <div class="col-md-4 col-xs-12">
                                    <p style="padding-top:5px">در صورتی که کد تخفیف دارید وارد کنید</p>
                                </div>

                                <div class="col-md-8 col-xs-12">
                                    <input class="form-control" style="width:200px;float:right" type="text"
                                           name="discount_code" id="discount_code">
                                    <button class="btn btn-primary" onclick="send_code()">بررسی</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
                    <div class="mt-4"></div>
                    <div class="d-flex">
                        <div class="text-right mt-4">
                            <label class="text-muted font-weight-normal m-0">قیمت کل</label>
                            @php
                                $totalPrice = Cart::all()->sum(function ($cart){
       return $cart['course']->price * $cart['quantity'];
    });
                            @endphp
                            <div class="text-large"><strong>{{$totalPrice}} تومان</strong></div>
                        </div>
                    </div>
                </div>

                <div class="float-left">
                    <form action="{{route('cart.payment')}}" id="cart-payment" method="post">
                        @csrf
                        <input type="hidden" name="course_id" value="{{$course->id}}">
                        <button type="button" class="btn btn-lg btn-primary mt-2"
                                onclick="document.getElementById('cart-payment').submit()">پرداخت
                        </button>

                    </form>

                </div>

            </div>
        </div>
    </div>


@endsection
@section('js')
    <?php
    $url = route('site.check_discount_code');
    ?>
    <script>
        send_code = function () {
            var discount_code = document.getElementById('discount_code').value;
            if (discount_code.trim() != '') {
                $.ajaxSetup(
                    {
                        'headers': {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                $.ajax({
                    url: '{{ $url }}',
                    type: 'POST',
                    data: 'discount_code=' + discount_code,
                    success: function (data) {
                        alert(data)
                        if (data == 'error') {
                            var html = '<p style="padding:20px;">کد تخفیف فعال وارد شده معتبر نمی باشد</p>';
                            $("#loading").html(html);
                        } else {
                            var html = '<p style="padding:20px;">' + data + '</p>';
                            $("#discount_box").hide();
                            $("#loading").html(html);
                        }

                    }
                });
            }
        };

    </script>










    {{--    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"--}}
    {{--            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"--}}
    {{--            crossorigin="anonymous"></script>--}}
    {{--    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"--}}
    {{--            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"--}}
    {{--            crossorigin="anonymous"></script>--}}

    <script>
        function changeQuantity(event, id, cartName = 'default') {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                    'Cntent-Type': 'application/json'
                }
            })
            $.ajax({
                type: 'POST',
                url: '/cart/quantity/change',
                data: JSON.stringify({
                    id: id,
                    quantity: event.target.value,
                    cart: cartName,
                    _method: 'patch'
                }),
                success: function (res) {
                    location.reload();
                }
            })
        }
    </script>
@endsection
