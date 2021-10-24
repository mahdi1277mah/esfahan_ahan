@extends('Home.layouts.master')

@section('content')

    <div _ngcontent-c1="" class="popupWrapper ng-tns-c1-0 ng-trigger ng-trigger-enterAnimation"
         id="headerPopup">

        <div _ngcontent-c1="" class="container flex-col al-center">
            <div _ngcontent-c1="" class="popupParent wi-xxl-40 wi-xl-50 wi-md-60 wi-sm-80 wi-xs-100">
                <div _ngcontent-c1="" class="popup wi-100 ">
                    <a _ngcontent-c1="" class="ng-tns-c1-0" href="/" dideo-checked="true">
                        <img
                            src="https://raman01.ir/wp-content/uploads/2020/10/raman01.ir_-16-400x93.png"
                            class="attachment-us_400_600 size-us_400_600 yp_onscreen" alt="" loading="lazy"
                            srcset="https://raman01.ir/wp-content/uploads/2020/10/raman01.ir_-16-400x93.png 400w, https://raman01.ir/wp-content/uploads/2020/10/raman01.ir_-16-300x70.png 300w, https://raman01.ir/wp-content/uploads/2020/10/raman01.ir_-16-1024x237.png 1024w, https://raman01.ir/wp-content/uploads/2020/10/raman01.ir_-16-600x139.png 600w, https://raman01.ir/wp-content/uploads/2020/10/raman01.ir_-16-768x178.png 768w, https://raman01.ir/wp-content/uploads/2020/10/raman01.ir_-16-150x35.png 150w, https://raman01.ir/wp-content/uploads/2020/10/raman01.ir_-16-380x88.png 380w, https://raman01.ir/wp-content/uploads/2020/10/raman01.ir_-16-360x83.png 360w, https://raman01.ir/wp-content/uploads/2020/10/raman01.ir_-16-259x60.png 259w"
                            sizes="(max-width: 400px) 100vw, 400px" width="400" height="93">
                    </a>
                    <tabs-holder _ngcontent-c1="" class="wi-100" _nghost-c6="">
                    <!--                                        <ul _ngcontent-c6="" class="nav nav-tabs wrapped register">
                                        @guest

                        &lt;!&ndash;&ndash;&gt;
                                                <div _ngcontent-c6="">
                                                    &lt;!&ndash;&ndash;&gt;
                                                    <div _ngcontent-c6="" class="none separator"></div>
                                                    @if (Route::has('register'))
                            <li _ngcontent-c6="">
&lt;!&ndash;&ndash;&gt;

                                                            <span _ngcontent-c6="">   <a class="nav-link"
                                                                                         href="{{ route('register') }}">{{ __('ثبت نام') }}</a></span>
                                                            &lt;!&ndash;&ndash;&gt;
                                                            &lt;!&ndash;&ndash;&gt;

                                                        </li>
                                                @endif
                            &lt;!&ndash;&ndash;&gt;
                                                    <div _ngcontent-c6="" class="separator"></div>
                                                </div>
                                                <div _ngcontent-c6="">
                                                    &lt;!&ndash;&ndash;&gt;
                                                    <div _ngcontent-c6="" class="none separator"></div>
                                                    @if (Route::has('login'))
                            <li _ngcontent-c6="" class="active">
&lt;!&ndash;&ndash;&gt;
                                                            <span _ngcontent-c6=""><a class="nav-link"
                                                                                      href="{{ route('login') }}">{{ __('ورود') }}</a></span>
                                                            &lt;!&ndash;&ndash;&gt;
                                                            &lt;!&ndash;&ndash;&gt;

                                                        </li>
                                                        &lt;!&ndash;&ndash;&gt;
                                                    @endif

                            <div _ngcontent-c6="" class="separator"></div>
                        </div>
@else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                               role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                               v-pre>
{{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right"
                                 aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}"
                                                              method="POST" class="d-none">
                                                            @csrf
                            </form>
                        </div>
                    </li>

@endguest
                        </ul>
                        <div _ngcontent-c6="" class="contentHolder register">-->

                        <tab-child _ngcontent-c1="" _nghost-c7="" class=" ng-tns-c1-0 ">
                            <div _ngcontent-c7="" class="pane active">

                                <user-login _ngcontent-c1="" _nghost-c9="" class="ng-tns-c1-0">

                                    <div _ngcontent-c9=""
                                         class="loginForm flex-col wi-100 al-center">
                                        <form _ngcontent-c9=""
                                              class="flex-col wi-100 al-center ng-untouched ng-valid ng-dirty"
                                              novalidate="" method="POST"
                                              action="{{ route('login') }}">
                                            @csrf

                                            <div _ngcontent-c9=""
                                                 class="inputWrapper wi-md-80 wi-sm-100 wi-xs-100">
                                                <i _ngcontent-c9="" class="fa fa-user"></i>
                                                <input _ngcontent-c9="" placeholder="ایمیل"
                                                       id="email" type="email"
                                                       class="ng-untouched ng-valid ng-dirty @error('email') is-invalid @enderror"
                                                       name="email" value="{{ old('email') }}"
                                                       required autocomplete="email"
                                                       autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>


                                            <!---->
                                            <div _ngcontent-c9=""
                                                 class="inputWrapper wi-md-80 wi-sm-100 wi-xs-100">
                                                <i _ngcontent-c9="" class="fa fa-lock"></i>
                                                <input _ngcontent-c9="" placeholder="گذرواژه"
                                                       id="password" type="password"
                                                       class="ng-untouched ng-valid ng-dirty @error('password') is-invalid @enderror"
                                                       name="password" required
                                                       autocomplete="current-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <!---->
                                            @if (Route::has('password.request'))
                                                <a _ngcontent-c9="" dideo-checked="true"
                                                   class="btn btn-link"
                                                   href="{{ route('password.request') }}">
                                                    {{ __('فراموش کردید؟') }}
                                                    <span
                                                        _ngcontent-c9="">(بازیابی رمز عبور)
                                                                        </span>
                                                </a>

                                            @endif



                                            <div class="g-recaptcha @error('g-recaptcha-response') is-invalid @enderror "
                                                 data-sitekey="{{ env('GOOGLE_RECAPTCHA_SITE_KEY')}}"></div>
                                            @error('g-recaptcha-response')
                                            <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                        @enderror

                                            <script src="https://www.google.com/recaptcha/api.js?hl=fa" async defer></script>



                                        <!---->
                                            <button _ngcontent-c9="" type="submit"
                                                    class="actionBtn btn wi-md-80 wi-sm-100 wi-xs-100">
                                                {{ __('ورود') }}
                                            </button>
                                        </form>
                                        <hr _ngcontent-c9="">
                                        <p _ngcontent-c9="">یا</p>
                                        <a href="{{route('auth.google')}}" _ngcontent-c8=""
                                           dideo-checked="true"
                                           class="wi-md-80 wi-sm-100 wi-xs-100 flex-row jus-start"
                                           id=""
                                           style="text-decoration: none;">
                                            <button _ngcontent-c9=""
                                                    class="googleBtn btn wi-md-80 wi-sm-100 wi-xs-100 flex-row jus-start"
                                                    id="googleLogin" style="width: 100%">
                                                <div _ngcontent-c9="">با گوگل وارد شوید</div>
                                                <i _ngcontent-c9="" class="fab fa-google-plus"></i>
                                            </button>
                                        </a>

                                    </div>


                                </user-login>

                            </div>
                        </tab-child>


                    </tabs-holder>
                </div>
            </div>
        </div>


        <style>
            .popupWrapper {
                z-index: 900;
                width: 100%;
                height: 1000px;
                position: static;
                background-color: #ebeced;
            }
            .popupWrapper .popupParent {
                top: 57%;
            }
            p, ul, ol, dl, address, pre, table, blockquote, fieldset {
                margin: 15px;
            }
        </style>

    </div>


@endsection
