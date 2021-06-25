@extends('user.asset')
@section('user_content')

<style>
    .form-check-label {
      margin-bottom: 24px;
    }
    .new-User{
      margin-left: 8rem !important;
    }
    .new-User a{
        font-size: 15px;
        color: #5bdb98;
    }

   .login_footer .new-User{
    margin-left: 8rem !important;
    }

    @media (max-width: 600px){
        .form-check-label {
         font-size: 14px;
        }
        .font-weight-bold{
            font-size: 10px;
            margin-bottom: 6px;
            font-style: italic;
        }
        .google_icon {
          width: 18px;
          height: 17px;
          margin-top: -1px;

        }
        .login_footer p{
            font-size: 12px;
        }
        .login_footer span{
            font-size: 8px;
        }

        .login_social_icon i {
            border-radius: 50%;
            font-size: 12px;
            padding: 2px;
            width: 18px;
            height: 17px;
        }

        .login_footer .new-User {
            margin-left: 2rem !important
       }
       .new-user-register{
          font-size: 15px;
          color: #5bdb98;
       }

    }


    @media only screen and (min-width: 411px){
        .login_footer .new-User {
         margin-left: 5rem !important;
        }

    }

    @media only screen and (min-width: 540px){
        .login_footer .new-User {
         margin-left: 13rem !important;
        }

    }
</style>


<section class="login_page">
    <div class="login_img_overly"></div>


    <div class="container">
        <div class="col-md-6">

            <div class="modal-content login_page_modal_content">
                <div class="modal-header login_header">
                    <h5 class="modal-title " id="exampleModalLongTitle">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <div class="modal-body">

                    <div class="login_form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <input id="email" type="email"
                                class="login_input form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}"  autocomplete="email" autofocus>
                                <label class='login_email' for="email">Email address</label>
                                {{-- @error('email')
                                <span class="invalid-feedback mb-4" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror --}}
                            </div>

                            <div class="form-group">
                                <input id="password" type="password"
                                    class="pass_input form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password">
                                {{-- @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror --}}
                                <label class='login_pass' for="password">Password</label>
                            </div>

                            @if ($errors->any())
                                <div class="alert-danger rounded pt-1">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="login_btn1 mt-4">
                                <button type="submit" class="btn ">Login</button>

                                <div class="rember_forget mt-2">
                                    <form action="">
                                        {{-- <div class="form-check">

                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label rember_login" for=" ">Remember me</label>
                                        </div> --}}
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </form>
                                    <p>
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link font-weight-bold text-success"
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot Password?') }}
                                        </a>
                                        @endif
                                    </p>
                                </div>
                                {{-- <div class="login_social_icon">
                                    <span>Or login with</span>
                                    <a href="#"> <img class=' google_icon'
                                            src="https://img.icons8.com/color/48/000000/google-logo.png" /></a>

                                    <a href="#"> <i class="fab fa-apple apple_login_icon"></i></a>
                                    <a href="#"><i class="fab fa-facebook login_fb_icon"></i></a>


                                </div> --}}
                            </div>


                        </form>
                    </div>
                </div>

                <div class="modal-footer login_footer">
                    <div class="login_social_icon">
                        <span>Or login with</span>
                        <a href="#">

                             <img class='google_icon' src="https://img.icons8.com/color/48/000000/google-logo.png" />
                            </a>

                        <a href="#"> <i class="fab fa-apple apple_login_icon"></i></a>
                        <a href="#"><i class="fab fa-facebook login_fb_icon"></i></a>


                    </div>
                    <p class="new-User">New user,<a href="{{ url('register') }}" class="new-user-register"><span  data-toggle="modal" data-target="#reg_exampleModalCenter"> Register!</span></a></p>
                </div>
            </div>

        </div>
    </div>

</section>

@endsection
