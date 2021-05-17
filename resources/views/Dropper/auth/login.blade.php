@extends('User.Asset')
@section('user_content')




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
                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label rember_login" for=" ">Remember me</label>
                                        </div>
                                    </form>
                                    <p>
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link font-weight-bold text-success"
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                                    </p>
                                </div>
                                <div class="login_social_icon">
                                    <span>Or login with</span>
                                    <a href="#"> <img class=' google_icon'
                                            src="https://img.icons8.com/color/48/000000/google-logo.png" /></a>

                                    <a href="#"> <i class="fab fa-apple apple_login_icon"></i></a>
                                    <a href="#"><i class="fab fa-facebook login_fb_icon"></i></a>


                                </div>
                            </div>


                        </form>
                    </div>
                </div>

                <div class="modal-footer login_footer">
                    <!-- <p>New user,<a href="{{ url('register') }}"><span data-toggle="modal" data-target="#reg_exampleModalCenter"> Register!</span></a></p> -->
                </div>
            </div>

        </div>
    </div>

</section>

@endsection
