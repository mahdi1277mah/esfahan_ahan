@extends('Home.layouts.master')

@section('content')

        <login-register _nghost-c12="">
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
            <div _ngcontent-c12="" class="container flex-col al-center">
               <div _ngcontent-c12="" class="wrapper wi-xxl-40 wi-xl-50 wi-md-60 wi-sm-80 wi-xs-100 flex-col al-center">
                    <user-forgot _ngcontent-c12="" _nghost-c13="" class="ng-tns-c13-4">

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div _ngcontent-c13="" class="forgotPassWrap wi-100 flex-col jus-center al-center wrapped ng-tns-c13-4">
                            <div _ngcontent-c13="" class="faraTitle">
                                <h2 _ngcontent-c13="" class="title">تکمیل فرایند بازیابی رمز عبور</h2>
                            </div>

                            <p _ngcontent-c13="" class="ng-tns-c13-4">رمز عبور جدید خود را وارد کنید</p>

                            <div _ngcontent-c13="" class="inputWrapper wi-md-80 wi-sm-100 wi-xs-100">
                                <i _ngcontent-c13="" class="fa fa-user"></i>

                                <input _ngcontent-c13=""  placeholder="ایمیل خود را وارد کنید" id="email" type="email" class="basicInput ng-untouched ng-valid ng-dirty @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>


                            <div _ngcontent-c13="" class="inputWrapper wi-md-80 wi-sm-100 wi-xs-100">
                                <i _ngcontent-c13="" class="fa fa-lock"></i>
                                <input  _ngcontent-c13="" placeholder="رمز عبور جدید" id="password" type="password" class="basicInput ng-untouched ng-pristine ng-valid @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div _ngcontent-c13="" class="inputWrapper wi-md-80 wi-sm-100 wi-xs-100">
                                <i _ngcontent-c13="" class="fa fa-lock"></i>
                                <input  _ngcontent-c13=""  id="password-confirm" type="password" class="basicInput ng-untouched ng-pristine ng-valid" placeholder="تکرار رمز عبور جدید" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <button type="submit" class="btn btn-primary">
                                {{ __('ارسال درخواست') }}
                            </button>
                        </div>

                       </user-forgot>
                </div>

            </div>
            </form>
        </login-register>

@endsection



