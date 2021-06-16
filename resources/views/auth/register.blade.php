@extends('user.asset')
@section('user_content')



<section class="login_page">
    <div class="login_img_overly"></div>


    <div class="container">
        <div class="col-md-6">

            <div class="modal-content login_page_modal_content">
                <div class="modal-header reg_modal_header">
                    <h5 class="modal-title" id="reg_exampleModalLongTitle">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <div class="modal-body">

                    <div class="reg_form">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <input id="name" type="text"
                                    class="reg_name_input form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}"  autocomplete="name" >
                                    <label class='reg_name' for="">Name</label>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>


                            <!-- name end -->
                            <div class="form-group">
                                <input id="email" type="email"
                                    class="reg_mail_input form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}"  autocomplete="email">
                                    <label class='reg_mail' for="email">Email</label>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <!-- email -->
                            <div class="form-group">
                                <input type="text" class="form-control  reg_sub_input" id="" name="suburb">
                                <label class='reg_sub' for="">Suburb</label>
                                @error('suburb')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>



                            <div class="form-group">
                                <input type="text" name="phone" class="form-control form-control-lg reg_phn_input" id=" ">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label class='reg_phn' for="  ">Phone</label>
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-lg reg_pass_input" id=" ">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label class='reg_pass' for="  ">Password</label>
                            </div>

                            <div class="form-group">
                                <input type="password" name="password_confirmation" class="form-control form-control-lg reg_pass_input" id=" ">
                           
                                <label class='reg_pass' for="  ">Confirm PassPassword</label>
                            </div>




                            <div class="reg_btn">
                                <button type="submit" class="btn ">Register</button>
                            </div>



                        </form>
                    </div>

                </div>
                <div class="modal-footer login_footer">
                    <p>Already a user? <a href="{{ url('login') }}"><span data-toggle="modal" data-target="#reg_exampleModalCenter"> login!</span></a></p>


                </div>
            </div>

        </div>
    </div>

</section>


<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
