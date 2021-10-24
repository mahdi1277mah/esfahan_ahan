@extends('Home.layouts.master')

@section('content')





    <login-register _nghost-c35="" class="" style="">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div _ngcontent-c35="" class="container flex-col al-center">

                <div _ngcontent-c35=""
                     class="wrapper wi-xxl-40 wi-xl-50 wi-md-60 wi-sm-80 wi-xs-100 flex-col al-center"
                     style="margin-top: 200px; background-color: #ffffff;">
                    <user-forgot _ngcontent-c35="" _nghost-c36="" class="ng-tns-c36-9">
                        <div _ngcontent-c9=""
                             class="forgotPassWrap wi-100 flex-col jus-center al-center wrapped ng-tns-c36-9">
                            <div _ngcontent-c9="" class="faraTitle" style="margin-top: 30px;">
                                <h2 _ngcontent-c9="" class="title">{{ __('درخواست رمز عبور جدید') }}</h2>
                            </div>


                            <p _ngcontent-c9="" class="ng-tns-c36-9">{{ __('یک پیامک حاوی کد فعالسازی یا ایمیل حاوی لینک
                                    انتخاب رمز عبور جدید برایتان ارسال خواهد شد.') }}</p>

                            <div _ngcontent-c9="" class="inputWrapper wi-md-80 wi-sm-100 wi-xs-100">
                                <i _ngcontent-c9="" class="fa fa-user"></i>

                                <input _ngcontent-c9="" id="email" type="email"
                                       class="basicInput ng-untouched ng-pristine ng-valid @error('email') is-invalid @enderror"
                                       placeholder="ایمیل خود را وارد کنید" name="email" value="{{ old('email') }}"
                                       required autocomplete="email" autofocus>


                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!---->

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



<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
    <div class="alert alert-success" role="alert">
{{ session('status') }}
        </div>
@endif

    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

    <div class="form-group row">
        <label for="email"
               class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
    <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
{{ __('Send Password Reset Link') }}
    </button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>-->
